<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
   public static function get_all(){
        $items = DB::table('items')->get();
        return $items;
    }

    public static function save($data){
        $new_item = DB::table('items')->insert($data);
        return $new_item;
    }
}