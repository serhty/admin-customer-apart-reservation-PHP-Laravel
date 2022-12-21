<?php

namespace App\Models\Apart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartModel extends Model
{
    use HasFactory;
    protected $table = "apart_infos";

    public function images()
    {
        return $this->hasMany(ApartPicturesModel::class);
    }
}
