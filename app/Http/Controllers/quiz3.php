<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;


class ItemController extends Controller
{
    //
    public function index(){
        $item = ItemModel::get_all();
        return view('item.index', compact('item'));
    }
    public function store(Request $request){
        $new_item = ItemModel::save($request->all());
    }
}
