<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();
        // return view('products', compact('products'));
        return view('chefs.plats');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function display()
    {
        // $products = Product::all();
        // $categories=Category::all();
        // ddd($categories[0]->products());
        $products = Plat::with('category')->get();
        // return view('users.plats', ['products' => $products]);
        return response()->json($products);
    }
    public function afficher()
    {

        return view('users.plats');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('chefs.ajouterPlat', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plat=new Plat();
        $plat->name=$request->input('nom');
        $image = $request->file('photo');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('resource\images'), $new_name);
        $plat->imag="images/".$new_name;
        $plat->price =$request->input('prix');
        $plat->description =$request->input('description');
        $plat->category_id=$request->input('categorie');
        $plat->nbr_pers=$request->input('nbr');
        $plat->user_id=Auth::user()->id;
        $plat->save();
        return redirect('plat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plat  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plat=Plat::find($id);
        return view('users.platinfos',["plat"=>$plat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $plat=Plat::find($id);
        return view('chefs.platDetails',["plat"=>$plat,"categories"=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plat  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $plat=Plat::find($id);
        $plat->name=$request->input('nom');
        if(isset($request->photo)){
        $image = $request->file('photo');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('resource\images'), $new_name);
        $plat->imag="images/".$new_name;
        }
        $plat->price =$request->input('prix');
        $plat->description =$request->input('description');
        $plat->category_id=$request->input('categorie');
        $plat->nbr_pers=$request->input('nbr');
        $plat->save();
        return redirect('plat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plat  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plat=Plat::find($id);

        $plat->delete();
        return redirect('/plat');
    }


}
