<?php

namespace App\Models\Apart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomsModel extends Model
{
    use HasFactory;
    protected $table = "apart_rooms";

    public function images()
    {
        return $this->hasMany(RoomsPicturesModel::class);
    }
}
