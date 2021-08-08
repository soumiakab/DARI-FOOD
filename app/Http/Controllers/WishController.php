<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use App\Models\Plat;
use Illuminate\Http\Request;
use Auth;
class WishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.wishes');
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
    public function addTowish(Request $request)
    {
        $find=false;
        if(Auth::user()){
            $wishes=Auth::user()->wish();
            foreach($wishes as  $wish){
                if($wish->plat_id == $request->platid){
                    $find=true;
                }
            }
            if(!$find){
            $wish=new Wish();
            $wish->plat_id=$request->platid;
            $wish->user_id=Auth::user()->id;
            $wish->save();
            }
        }
    }


    public function wishesData()
    {
        $wishes=Auth::user()->wish();
        $arr=array();
        foreach($wishes as  $wish){
            $plat=new Plat();
            $plat->name = $wish->plat->name;
            $plat->id =$wish->plat->id;
            $plat->price =$wish->plat->price;
            $plat->imag =$wish->plat->imag;
            array_push($arr, $plat);
        }
        return response()->json($arr);
    }






    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function show(Wish $wish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function edit(Wish $wish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wish $wish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request)
    {
        $plat=$request['platid'];
        $user= Auth::user()->id;
        $w=Wish::where('plat_id','=',$plat)->where('user_id', '=',$user)->first();
        $wish=Wish::find( $w->id);

        $wish->delete();
    }
}
