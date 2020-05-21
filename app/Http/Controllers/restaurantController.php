<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\restaurant;

class restaurantController extends Controller
{
    function search($words)
    {
        $restaurants = restaurant::where('r_name', 'LIKE', '%' . $words . '%')->get();
        return $restaurants->toJson();
    }

    function add(Request $request)
    {
        $this->validate($request, restaurant::rules, []);
        $model = new restaurant();
        $model->fill($request->all());
        $model->save();
        //DANGER Что будет возвращать данный роут view или еще что?
        return redirect()->route('anyroute')->with('isDone', 'done');
    }

    function delete($r_id)
    {
        $restaurant = restaurant::where('r_id', $r_id)->first();
        if ($restaurant['r_restHolderId'] = Auth::id()) {
            //DANGER что возвращаем на фронт
            return 'done';
        }
        //DANGER что возвращаем на фронт
        return 'nodone';
    }
}
