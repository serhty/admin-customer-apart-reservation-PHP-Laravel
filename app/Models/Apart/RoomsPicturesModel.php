<?php

namespace App\Models\Apart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomsPicturesModel extends Model
{
    use HasFactory;
    protected $table = "room_images";

    public function news()
    {
        return $this->belongsTo(RoomsModel::class);
    }
}
