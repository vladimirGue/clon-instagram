<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table = 'likes';//indicamos la tabla que va a modificar este modelo

    //Relacion de muchos a uno
    public function user(){
        // se encarga de buscar los objetos cuyo id sean igual al user_id
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    //Relacion de muchos a uno
    public function image(){
        // se encarga de buscar los objetos cuyo id sean igual al user_id
        return $this->belongsTo('App\Models\Image', 'image_id');
    }
}
