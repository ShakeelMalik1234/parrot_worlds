<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddParrot;
use App\Models\user;
use Auth;

class AddParrotController extends Controller
{
    public function Parrot()
    {
        return view('addparrot');
    }
    public function storeParrot(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $create = new AddParrot();
        $create->user_id = Auth::user()->id;
        $create->title = $request->title;
        $create->category = $request->category;
        $create->price = $request->price;
        $create->gender = $request->gender;
        $create->phone_number = $request->phone_number;
        $create->address = $request->address;
        $create->description = $request->description;
        $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();  
        $request->image->move(public_path('images'), $imageName);
        $create->image = $imageName;
        $create->save();
        
        return redirect()->route('details.parrot');
    }
    public function detailsParrot()
    {
        $userdata = AddParrot::where('user_id', Auth::user()->id)->latest()->get();
        return view('parrotdetails',['usersdata'=>$userdata]);
    }
    
}
