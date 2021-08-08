<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Adress;
// use App\Models\Chef;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:chef');
    // }

    public function index()
    {
        $chefs=User::where('isChef','=',1)->get();
        return view('users.nosChefs',["chefs"=>$chefs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profil($id)
    {
        $user=User::find($id);
        return view('chefs.chefProfile',["chef"=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $adress=new Adress();
        $adress->street=$request->input('street');
        $adress->zipcode=$request->input('zipcode');
        $adress->adress=$request->input('adress');
        $adress->save();

        $image = $request->file('photo');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('ressources\images'), $new_name);

            return User::create([
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'username' => $request->input('username'),
                'tel' => $request->input('tel'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'description' =>$request->input('description'),
                'photo' =>"images/".$new_name,
                'isChef'=>1,
                'adress_id' =>$adress->id,

            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $chef=User::find(Auth::user()->id);
        return view('chefs.chefInformations',["chef"=>$chef]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function edit(Chef $chef)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function updat(Request $request)
    {
        $chef=User::find(Auth::user()->id);
        $chef->firstname=$request->firstname;
        $chef->lastname=$request->lastname;
        $chef->username=$request->username;
        $chef->tel=$request->tel;
        $chef->email=$request->email;
        $chef->save();
        $adress=Adress::find($chef->adress_id);
        $adress->street=$request->street;
        $adress->zipcode=$request->zipcode;
        $adress->adress=$request->adress;
        $adress->save();
        return redirect('/plat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef $chef)
    {
        //
    }
}
