<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Plat;
use Illuminate\Http\Request;
use Auth;
class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ordersG=array();
        $commands=Auth::user()->commands();
        foreach($commands as  $comd){
            $orders=Order::where('command_id','=',$comd->id)->get();
            foreach($orders as $order)
            {
                array_push($ordersG, $order);
            }
        }
        return view('users.usercommandes',["orders"=>$ordersG]);
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
    public function storeOrd($id,$adress,$livraison)
    {
        $cart = session()->get('cart');
        for ($i=0; $i < count($cart) ; $i++) {
            $plat=Plat::find($cart[$i]['id']);
            Order::create([
                'command_id'=>$id,
                'plat_id'=>$cart[$i]['id'],
                'quantity'=>$cart[$i]['quantity'],
                'user_id'=>$plat->user_id,
                'adress_id'=>$adress,
                'date_livraison'=>$livraison,
            ]);
        }

        session()->forget('cart');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update($id,$staus)
    {
        $order=Order :: find($id);
        $order->status=$staus;
        $order->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }

    public function test(Request $request)
    {
        echo "hi";
    }
}
