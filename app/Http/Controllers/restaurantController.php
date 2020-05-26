<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\restaurant;
use PHPUnit\Util\Json;


class restaurantController extends Controller
{
    function search(Request $request)
    {
        $name = $request->get('name');
        if ($name) {
            $restaurants = restaurant::where('r_name', 'LIKE', '%' . $name . '%')->get();
            return $restaurants->toJson();
        }
        $restaurants = restaurant::all();
        return $restaurants->toJson();
    }

    function add(Request $request)
    {
        $this->validate($request, restaurant::rules, []);
        $model = new restaurant();
        $model->fill($request->all());
        $model->save();
        return Json::prettify('{"isSave" : "save"}');
    }

    function delete($r_id)
    {
        $restaurant = restaurant::where('r_id', $r_id)->first();
        if ($restaurant['r_restHolderId'] = Auth::id()) {
            restaurant::destroy($r_id);
            return Json::prettify('{"isDelete" : "delete"}');
        }
        return Json::prettify('{"isDelete" : "not delete"}');
    }

    function view(Request $request)
    {
        $r_id = $request->get('r_id');
        $restaurant = restaurant::where('r_id', $r_id)->get();
        $restaurant->toJson();
        if ($restaurant == "[]"){
            return Json::prettify('{"Error" : "Что то пошло не так"}');
        }
        return $restaurant;

    }
}
