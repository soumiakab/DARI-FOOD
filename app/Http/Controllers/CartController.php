<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Plat;
use Illuminate\Http\Request;
use Auth;
class CartController extends Controller
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
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('users.panier');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function addToCart(Request $request)
    {
        $id=$request->platid;
        $plat = Plat::findOrFail($id);
        $find=false;
        $cart = session()->get('cart', []);
        for ($i=0; $i < count($cart) ; $i++) {
            if($cart[$i]['id'] == $id) {
                $cart[$i]['quantity']+=$request->quantite;
                $find=true;
                break;
            }
        }
        if(!$find) {
            $cart[$i] = [
                "id"=>$id,
                "name" => $plat->name,
                "quantity" => $request->quantite,
                "price" =>(float) $plat->price,
                "image" => $plat->imag
            ];
        }

        session()->put('cart', $cart);
        // return redirect()->back()->with('success', 'Produit ajouté au panier avec succès !');
    }

    public function panierData()
    {
        $cart = session()->get('cart', []);

        return response()->json($cart);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->platid && $request->quantite){
            $cart = session()->get('cart');
            for ($i=0; $i < count($cart) ; $i++) {
                if(isset($cart[$i])){
                    if($cart[$i]['id'] == $request->platid){
                        $cart[$i]["quantity"] = $request->quantite;
                        session()->put('cart', $cart);
                        break;
                    }
                }
            }

        }
    }


    public function total()
    {
        $cart = session()->get('cart', []);
        $total=0;
        for ($i=0; $i < count($cart) ; $i++) {
            if(isset($cart[$i]))
            {$total +=$cart[$i]['quantity'] * $cart[$i]['price'];}
            else{ continue; }
        }

        return response()->json(["total"=>$total]);
        // return $total;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request['platid']){
            $cart = session()->get('cart');
            for ($i=0; $i < count($cart) ; $i++) {
                if(isset($cart[$i])){
                    if($cart[$i]['id'] == $request['platid']){
                            if(isset($cart[$i+1]))
                            $cart[$i]=$cart[$i+1];
                    }
                }
            }
                unset($cart[(count($cart)-1)]);
                session()->put('cart', $cart);
        }

        // if($request['platid']){
        //     $cart = session()->get('cart');
        //     for ($i=0; $i < count($cart) ; $i++) {
        //         if(isset($cart[$i])){
        //             // return response()->json($request['platid']);
        //             if($cart[$i]['id'] == $request['platid']){
        //                 unset($cart[$i]);
        //                 session()->put('cart', $cart);
        //                 break;

        //             }
        //         }
        //     }
        // }
        // if($request->id) {
        //     $cart = session()->get('cart');
        //     if(isset($cart[$request->id])) {
        //         unset($cart[$request->id]);
        //         session()->put('cart', $cart);
        //     }
        //     session()->flash('success', 'Product removed successfully');
        // }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()){
            $panier=Cart::where('plat_id');
            $product = Plat::findOrFail($request->prodid)->first();
            $cart=new Cart();
            $cart->plat_id=$request->prodid;
            $cart->quantity=$request->quantite;
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
