<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\SlidersModel;
use App\Models\Admin\ApartModel;
use App\Models\Apart\ApartPicturesModel;
use App\Models\Admin\SettingsModel;
use App\Models\Admin\ContactsModel;
use App\Models\Admin\BlogsModel;
use App\Models\Apart\RoomsModel;
use App\Models\Apart\RoomsPicturesModel;
use DateTime;
use DateInterval;
use DatePeriod;
use App\Models\Apart\PeriodsModel;
use App\Models\Apart\ReservationsModel;
use App\Models\Admin\SupportsModel;
use App\Models\Apart\ApartSupportsModel;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function __construct()
    {
        view()->share('site_settings',SettingsModel::where("id","=","1")->get());
        view()->share('site_contacts',ContactsModel::where("id","=","1")->get());
        view()->share('site_populer_aparts',ApartModel::where([["status","=","1"],["populer","=","1"]])->orderBy('id','DESC')->get());
        view()->share('site_apart_cover_pictures',ApartPicturesModel::where([["status","=","1"],["cover","=","1"]])->orderBy('id','DESC')->get());
    }

    public function index()
    {
        $sliders = SlidersModel::where("status","=","1")->orderBy('id','DESC')->get();
        $populer_aparts = ApartModel::where([["status","=","1"],["populer","=","1"]])->orderBy('id','DESC')->get();
        $recommended_aparts = ApartModel::where([["status","=","1"],["recommended","=","1"]])->orderBy('id','DESC')->get();
        $visited_aparts = ApartModel::where([["status","=","1"],["last_visited","=","1"]])->orderBy('id','DESC')->get();
        $apart_cover_pictures = ApartPicturesModel::where([["status","=","1"],["cover","=","1"]])->orderBy('id','DESC')->get();
        $blogs = BlogsModel::where("status","=","1")->orderBy('id','DESC')->limit(4)->get();
        $settings = SettingsModel::where("id","=","1")->get();

        return view('site.home',compact([['sliders'],['populer_aparts'],['recommended_aparts'],['visited_aparts'],['apart_cover_pictures'],['settings'],['blogs']]));
    }

    public function apart($link)
    {
        $apart = ApartModel::where([["status","=","1"],["apart_link","=",$link]])->get();
        $apart_id = $apart[0]->id;
        $apart_cover_picture = ApartPicturesModel::where([["status","=","1"],["cover","=","1"],["apart_id","=",$apart_id]])->get();
        $apart_pictures = ApartPicturesModel::where([["status","=","1"],["apart_id","=",$apart_id]])->get();
        $rooms = RoomsModel::where([["status","=","1"],["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();
        $rooms_cover_pictures = RoomsPicturesModel::where([["status","=","1"],["apart_id","=",$apart_id],["cover","=","1"]])->orderBy('id','ASC')->get();
        $rooms_pictures = RoomsPicturesModel::where([["status","=","1"],["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();

        return view('site.apart-detail',compact([['apart'],['apart_cover_picture'],['apart_pictures'],['rooms'],['rooms_cover_pictures'],['rooms_pictures']]));
    }

    public function reservation_check(Request $request)
    {
        if($request->checkin==""){
            echo "Please Select Login Date!";
        }elseif($request->checkout==""){
            echo "Please Select a Release Date!";
        }else{
            $apart = ApartModel::where([["status","=","1"],["apart_link","=",$request->apart]])->get();
            $apart_id = $apart[0]->id;
            $customer_id = $apart[0]->customer_id;
            $rooms = RoomsModel::where([["status","=","1"],["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();
            $rooms_pictures = RoomsPicturesModel::where([["status","=","1"],["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();

            foreach($rooms as $room){
                $room_id = $room->id;
                $room_cover_picture = RoomsPicturesModel::where([["status","=","1"],["room_id","=",$room_id],["cover","=","1"]])->orderBy('id','ASC')->get();
                
                $start_date_datetime = $_POST['checkin'];
                $start_date = DateTime::createFromFormat('d-m-Y', $start_date_datetime)->format('Y-m-d');
                
                $end_date_datetime = $_POST['checkout'];
                $end_date = DateTime::createFromFormat('d-m-Y', $end_date_datetime)->format('Y-m-d');

                $interval = DateInterval::createFromDateString('1 day');
                $period = new DatePeriod(new DateTime($start_date), $interval, new DateTime($end_date));

                $max_quota = PeriodsModel::where([["period_start","<=",$start_date],["period_end",">=",$start_date],["room_id","=",$room_id],["status","=","1"]])->orderBy('id','ASC')->get('room_count');
                if(!empty($max_quota[0])){
                    $max_quota = $max_quota[0]->room_count;
                }else{
                    $max_quota = 0;
                }

                $reservation_count = DB::table("reservations")->select(DB::raw("COUNT(id) as reservation_count"))->where([['start_date', '>=', $start_date],["start_date","<=",$end_date],["room_id","=",$room_id],["status","=","1"]])->get();
                if(!empty($reservation_count[0])){
                    $reservation_count = $reservation_count[0]->reservation_count;
                }else{
                    $reservation_count = 0;
                }

                $total_price = 0;
                $total_discounted_price = 0;
                $total_final_price = 0;
                
                $vacancies = $max_quota - $reservation_count;

                if ($vacancies <= 0) { ?>
                    <div class="col-md-12">
                        <div class="hotel-grid mb-xl-30">
                            <div class="hotel-grid-wrapper bx-wrapper">
                                <div class="animate-img col-md-6 apart_rooms_img_col">
                                    <?php if(!empty($room_cover_picture[0])){ ?>
                                        <a href="/public/<?php echo $room_cover_picture[0]->image ?>"
                                        data-fancybox="<?php echo $room->room_name ?>"
                                        data-caption="<?php echo $room->room_name ?>"
                                        data-speed="700">
                                            <img src="/public/<?php echo $room_cover_picture[0]->image ?>" class="img-fluid apart_room_cover_img" alt="<?php echo $apart[0]->apart_name ?>" width="800" height="533">
                                        </a>
                                        
                                        <div class="room_other_pictures" style="display:none;">
                                            <?php
                                                $room_pictures_array = array();
                                                foreach($rooms_pictures as $room_picture){
                                                    if($room_picture['room_id'] == $room_id){
                                                        $room_pictures_array[] = $room_picture['image'];
                                                    }
                                                }
                                            ?>
                                            <?php foreach($room_pictures_array as $picture_array) { ?>
                                            <a href="/public/<?php echo $picture_array ?>"
                                            data-fancybox="<?php echo $room->room_name ?>"
                                            data-caption="<?php echo $room->room_name ?>"
                                            data-speed="700">
                                                <img src="/public/<?php echo $picture_array ?>" class="img-fluid apart_room_cover_img" alt="<?php echo $apart[0]->apart_name ?>" width="800" height="533">
                                            </a>
                                            <?php } ?>
                                        </div>
                                    <?php } else { ?>
                                        <img src="/public/images/image-preparing.png" class="img-fluid" width="800" height="533">
                                    <?php } ?>
                                </div>
                                <div class="hotel-grid-caption bg-custom-white p-relative col-md-6 apart_rooms_price_col">
                                    <h4 class="title fs-16 room_title_fs_16">
                                        <a href="" class="text-custom-black not_click">
                                            <?php echo $room->room_name ?>
                                            <small class="text-light-dark"><?php echo $room->room_concept ?> </small>
                                        </a>
                                    </h4>
                                    <div class="action">
                                        <p style="margin-top:5px;">
                                        Available on Dates <?php echo $room->room_name ?> Not Found. Contact Us For Reservation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                                        
                	<?php
                    } else {
                        foreach ($period as $dt) {
                            $price_to_date = $dt->format("Y-m-d");
        
                            $price_query = PeriodsModel::where([["period_start","<=",$price_to_date],["period_end",">=",$price_to_date],["room_id","=",$room_id],["status","=","1"]])->get();
        
                            $price_result = $price_query[0]->period_price;
                            $total_price = $total_price + $price_result;
                            $discount_price_result = $price_query[0]->period_discounted_price;
                            $total_discounted_price = $total_discounted_price + $discount_price_result;
                            $final_price_result = $price_query[0]->period_final_price;
                            $total_final_price = $total_final_price + $final_price_result;
                            $discount = round((100-(($total_discounted_price/$total_price)*100)),2);
                        }
                    ?>
                    <form action="/reservation" method="post">
                    <input name="_token" type="hidden" value="<?php echo csrf_token(); ?>"/>
                        <div class="col-md-12">
                            <div class="hotel-grid mb-xl-30">
                                <div class="hotel-grid-wrapper bx-wrapper">
                                    <div class="animate-img col-md-6 apart_rooms_img_col">
                                    <?php if(!empty($room_cover_picture[0])){ ?>
                                        <a href="/public/<?php echo $room_cover_picture[0]->image ?>"
                                        data-fancybox="<?php echo $room->room_name ?>"
                                        data-caption="<?php echo $room->room_name ?>"
                                        data-speed="700">
                                            <img src="/public/<?php echo $room_cover_picture[0]->image ?>" class="img-fluid apart_room_cover_img" alt="<?php echo $apart[0]->apart_name ?>" width="800" height="533">
                                        </a>
                                        
                                        <div class="room_other_pictures" style="display:none;">
                                            <?php
                                                $room_pictures_array = array();
                                                foreach($rooms_pictures as $room_picture){
                                                    if($room_picture['room_id'] == $room_id){
                                                        $room_pictures_array[] = $room_picture['image'];
                                                    }
                                                }
                                            ?>
                                            <?php foreach($room_pictures_array as $picture_array) { ?>
                                            <a href="/public/<?php echo $picture_array ?>"
                                            data-fancybox="<?php echo $room->room_name ?>"
                                            data-caption="<?php echo $room->room_name ?>"
                                            data-speed="700">
                                                <img src="/public/<?php echo $picture_array ?>" class="img-fluid" alt="<?php echo $apart[0]->apart_name ?>" width="800" height="533">
                                            </a>
                                            <?php } ?>
                                        </div>
                                    <?php } else { ?>
                                        <img src="/public/images/image-preparing.png" class="img-fluid apart_room_cover_img" width="800" height="533">
                                    <?php } ?>
                                    </div>
                                    <div class="hotel-grid-caption bg-custom-white p-relative col-md-6 apart_rooms_price_col">
                                        <h4 class="title fs-16 room_title_fs_16">
                                            <a href="" class="text-custom-black not_click">
                                                <?php echo $room->room_name ?>
                                                <small class="text-light-dark"><?php echo $room->room_concept ?> </small>
                                            </a>
                                        </h4>
                                        <span class="price">
                                        <?php if($room->room_price>1){ ?>
                                            <?php if($total_price != $total_discounted_price){ ?>
                                                <small><del class="room_price_discount_del"><?php echo $total_price; ?> $</del></small>
                                                <small class="room_price_discount_small">% <?php echo round((100-(($total_discounted_price/$total_price)*100)),2); ?> DISCOUNT</small>
                                                <?php echo $total_discounted_price; ?> $
                                            <?php } else{ ?>
                                                <?php echo $total_final_price; ?> $
                                            <?php } ?>
                                        <?php } ?>
                                        </span>
                                        <div class="action" style="margin-top: 30px;">
                                            <button class="btn-first btn-submit" type="submit" id="reservation_button" name="reservation_button" style="padding: 5px 5px;">Create Reservation Request</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="start_date" value="<?php echo $start_date; ?>">
                        <input type="hidden" name="end_date" value="<?php echo $end_date; ?>">
                        <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">
                        <input type="hidden" name="room_id" value="<?php echo $room_id; ?>">
                        <input type="hidden" name="total_price" value="<?php echo $total_price; ?>">
                        <input type="hidden" name="total_discounted_price" value="<?php echo $total_discounted_price; ?>">
                        <input type="hidden" name="total_final_price" value="<?php echo $total_final_price; ?>">
                    </form>
                    <hr>
                    <?php
                }
            }
        }
    }

    public function reservation(Request $request)
    {
        return view('site.reservation');
    }
    
    public function reservation_add(Request $request)
    {
        $room_id = $request->room;
        $room = RoomsModel::where([["status","=","1"],["id","=",$room_id]])->get();
        $apart_id = $room[0]->apart_id;
        $apart = ApartModel::where([["status","=","1"],["id","=",$apart_id]])->get();
        $customer_id = $apart[0]->customer_id;
        $reservation = new ReservationsModel;
        $reservation->status = "1";
        $reservation->room_id = $room_id;
        $reservation->apart_id = $apart_id;
        $reservation->start_date = $request->start_date;
        $reservation->end_date = $request->end_date;
        $reservation->reservation_date = date('Y-m-d H:i:s');
        $reservation->price = str_replace(",",".",$request->price);
        $reservation->discount = $request->discount;
        $reservation->final_price = str_replace(",",".",$request->final_price);
        $reservation->booker = "Site";
        $reservation->count_people = $request->count_people;
        $reservation->customer_name = $request->name;
        $reservation->customer_surname = $request->surname;
        $reservation->customer_phone = $request->phone;
        $reservation->customer_mail = $request->mail;
        $reservation->customer_address = $request->address;

        $add = $reservation->save();

        return view('site.reservation-complate');

    }

    public function aparts()
    {
        $aparts = ApartModel::where([["status","=","1"]])->orderBy('id','DESC')->get();
        $apart_cover_pictures = ApartPicturesModel::where([["status","=","1"],["cover","=","1"]])->orderBy('id','DESC')->get();

        return view('site.aparts',compact([['aparts'],['apart_cover_pictures']]));
    }

    public function rooms()
    {
        $aparts = ApartModel::where([["status","=","1"]])->orderBy('id','DESC')->get();
        $apart_cover_pictures = ApartPicturesModel::where([["status","=","1"],["cover","=","1"]])->orderBy('id','DESC')->get();
        $rooms = RoomsModel::where([["status","=","1"]])->orderBy('id','DESC')->get();
        $rooms_cover_pictures = RoomsPicturesModel::where([["status","=","1"],["cover","=","1"]])->orderBy('id','ASC')->get();

        return view('site.rooms',compact([['aparts'],['apart_cover_pictures'],['rooms'],['rooms_cover_pictures']]));
    }

    public function blogs()
    {
        $blogs = BlogsModel::where("status","=","1")->orderBy('id','DESC')->get();
        return view('site.blogs',compact([['blogs']]));
    }
    
    public function blog_detail($link)
    {
        $other_blogs = BlogsModel::where("status","=","1")->orderBy('id','DESC')->limit(4)->get();
        $blog = BlogsModel::where([["status","=","1"],["link","=",$link]])->orderBy('id','DESC')->get();
        return view('site.blog-detail',compact([['blog'],['other_blogs']]));
    }
    
    public function contact()
    {
        return view('site.contact');
    }
    
    public function support_add(Request $request)
    {
        $support = new SupportsModel;
        $support->status = "1";
        $support->name = $request->name;
        $support->surname = $request->surname;
        $support->mail = $request->mail;
        $support->phone = $request->phone;
        $support->message = $request->message;
        $support->support_date = date('Y-m-d H:i:s');

        $add = $support->save();
    }
    
    public function apart_support_add(Request $request)
    {
        $support = new ApartSupportsModel;
        $support->apart_id = $request->apart;
        $support->status = "1";
        $support->name = $request->name;
        $support->surname = $request->surname;
        $support->mail = $request->mail;
        $support->phone = $request->phone;
        $support->message = $request->message;
        $support->support_date = date('Y-m-d H:i:s');

        $add = $support->save();
    }

    public function user_agreement()
    {
        return view('site.user-agreement');
    }

    public function cookie_policy()
    {
        return view('site.cookie-policy');
    }
    
    public function about()
    {
        return view('site.about');
    }

    public function apart_add_request(Request $request)
    {
        $support = new SupportsModel;
        $support->status = "1";
        $support->name = $request->name;
        $support->surname = $request->surname;
        $support->mail = $request->mail;
        $support->phone = $request->phone;
        $support->message = "Request from Membership Form";
        $support->support_date = date('Y-m-d H:i:s');

        $add = $support->save();
    }
    
    public function room_price_check(Request $request)
    {
        $room_id = $request->room;
        $apart_id = $request->apart;
        $apart_phone = $request->phone;
        $roomlar = RoomsModel::where([["status","=","1"],["apart_id","=",$apart_id]])->get();

        $start_date_datetime = $_POST['checkin'];
        $start_date = DateTime::createFromFormat('d-m-Y', $start_date_datetime)->format('Y-m-d');
        
        $end_date_datetime = $_POST['checkout'];
        $end_date = DateTime::createFromFormat('d-m-Y', $end_date_datetime)->format('Y-m-d');

        $interval = DateInterval::createFromDateString('1 day');

        $period = new DatePeriod(new DateTime($start_date), $interval, new DateTime($end_date));

        $max_quota = PeriodsModel::where([["period_start","<=",$start_date],["period_end",">=",$start_date],["room_id","=",$room_id],["status","=","1"]])->orderBy('id','ASC')->get('room_count');
        if(!empty($max_quota[0])){
            $max_quota = $max_quota[0]->room_count;
        }else{
            $max_quota = 0;
        }

        $reservation_count = DB::table("reservations")->select(DB::raw("COUNT(id) as reservation_count"))->where([['start_date', '>=', $start_date],["start_date","<=",$end_date],["room_id","=",$room_id],["status","=","1"]])->get();
        if(!empty($reservation_count[0])){
            $reservation_count = $reservation_count[0]->reservation_count;
        }else{
            $reservation_count = 0;
        }

        $total_price = 0;
        $total_discounted_price = 0;
        $total_final_price = 0;
        
        $vacancies = $max_quota - $reservation_count;

        if ($vacancies <= 0) {
            ?>
                <small class="rooms_page_not_available">
                No available rooms were found for the dates you searched. Contact Us For Reservation.
                </small>
        
        <?php
        }else{
        	foreach ($period as $dt) {
			$price_to_date = $dt->format("Y-m-d");
            
            $price_query = PeriodsModel::where([["period_start","<=",$price_to_date],["period_end",">=",$price_to_date],["room_id","=",$room_id],["status","=","1"]])->get();
        
            $price_result = $price_query[0]->period_price;
            $total_price = $total_price + $price_result;
            $discount_price_result = $price_query[0]->period_discounted_price;
            $total_discounted_price = $total_discounted_price + $discount_price_result;
            $final_price_result = $price_query[0]->period_final_price;
            $total_final_price = $total_final_price + $final_price_result;
            $discount = round((100-(($total_discounted_price/$total_price)*100)),2);
			
		    } ?>

                <?php if(!empty($discount)){ ?>
                    <small><del class="room_price_discount_del"><?php echo $total_price; ?> $</del></small>
                    <small class="room_price_discount_small">% <?php echo $discount ?> DISCOUNT</small>
                <?php } ?>
                <?php echo $total_final_price; ?> $

		<?php }

    }
	
    public function sitemap()
    {
        $blogs = BlogsModel::where("status","=","1")->orderBy('id','DESC')->get();
        $settings = SettingsModel::where("id","=","1")->get();
        $aparts = ApartModel::where([["status","=","1"]])->orderBy('id','DESC')->get();
        $now = Carbon::now()->toAtomString();
        return response ()->view('site.sitemap', compact('blogs','now','aparts','settings'))->header('Content-Type', 'application/xml');
    }
    

}
