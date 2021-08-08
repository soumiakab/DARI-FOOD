<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Adress;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'tel' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'address_id' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $adress=new Adress();
        $adress->street=$data['street'];
        $adress->zipcode=$data['zipcode'];
        $adress->adress=$data['adress'];
        $adress->save();
        // if($data['description']){
        //     return User::create([
        //         'firstname' => $data['firstname'],
        //         'lastname' => $data['lastname'],
        //         'username' => $data['username'],
        //         'tel' => $data['tel'],
        //         'email' => $data['email'],
        //         'password' => Hash::make($data['password']),
        //         'description' =>$data['description'],
        //         'photo' =>$adress->id,
        //         'isChef'=>1,
        //         'address_id' =>$adress->id,

        //     ]);
        // }
        // else{
            return User::create([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'username' => $data['username'],
                'tel' => $data['tel'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'adress_id' =>$adress->id,

            ]);
        // }
    }
}