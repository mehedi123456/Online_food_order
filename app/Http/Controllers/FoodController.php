<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\foodInput;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function foodview()
    {
        $lists = foodInput::all();
        return view('Food.FoodView',compact('lists'));
    }

    public function foodData()
    {
        return view('Food.FoodData');
    }

    public function foodInput(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'discription' => 'required',
            'price' => 'required|numeric',
        ]);

        foodInput::insert([
            'title'      =>$request->title,
            'discription'=>$request->discription,
            'price'      =>$request->price,
        ]);
        return back();
    }

    public function Foodread($product_id)
    {
        $foodIteam=foodInput::findOrFail($product_id);
        return view('Food.FoodUpdate',compact('foodIteam'));
    }

    public function update(Request $request)
    {
        foodInput::findOrFail($request->item_id)->update([
            'title'      =>$request->title,
            'discription'=>$request->discription,
            'price'      =>$request->price,
        ]);
        return back();
    }

    public function delete($item_id)
    {
        foodInput::findOrFail($item_id)->delete();
        return back();
    }

}
