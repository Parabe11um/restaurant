<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\restaurant;

class restaurantController extends Controller
{
    function search($words)
    {
        //TODO write this
    }

    function add(Request $request)
    {
       $this->validate($request, restaurant::rules,[]);
       $model = new restaurant();
       $model->fill($request->all());
       $model->save();
       //DANGER Что будет возвращать данный роут view или еще что?
       return redirect()->route('anyroute')->with('isDone', 'done');
    }

    function delete($id)
    {


    }
}
