<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Models\Adress;
use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\OrderController;
class CommandController extends Controller
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
        return view('chefs.commandes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.checkout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecommand(Request $request)
    {

        if(Auth::user()){
            $cart = session()->get('cart');
            if(isset($cart) && count($cart)>0){
                                $command=new Command();
                                $command->user_id=Auth::user()->id;
                                $command->save();
                    if($request->input('adress')){
                        $adress=new Adress();
                        $adress->street=$request->input('street');
                        $adress->zipcode=$request->input('zipcode');
                        $adress->adress=$request->input('adress');
                        $adress->save();

                                // Redirecting To Controller Actions with params
                                return redirect()->action([OrderController::class, 'storeOrd'],['id' => $command->id,'adress' =>$adress->id,'livraison'=>$request->input('livraison')]
                                );

                    }
                    else{
                            // Redirecting To Controller Actions with params
                            return redirect()->action([OrderController::class, 'storeOrd'],['id' => $command->id,'adress' =>Auth::user()->adress_id,'livraison'=>$request->input('livraison')]
                            );


                }
            }

        }

    }



    
}
