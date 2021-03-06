<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class client_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=> 'required|max:30',
            'email'=>'required|email|max:255',
            'address'=>'required',
            'phone'=> 'required',
            'city'=> 'required',

          ]);
        $user = user::find($id);

        $user->name = $request->name;
        $user->email= $request->email;
        $user->address= $request->address;
        $user->phone= $request->phone;
        $user->city= $request->city;
        
        $user->save();
        $cartitems = Cart::content();
        return view('cart.payment')->with('cartitems',$cartitems);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
