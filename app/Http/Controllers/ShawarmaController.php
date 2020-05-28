<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shawarmas;

class ShawarmaController extends Controller
{
    public function index(){        
    // Passing Model/table Shawarmas to variable - get with all()
    $shawarmas = Shawarmas::all();
    return view('shawarmas.index', ['shawarmas' => $shawarmas]);
    }

    public function show($id){        
    // Showing Details for Single Shawarma Route Parameters
    $shawarma = Shawarmas::findOrFail($id);
    return view('shawarmas.show', ['shawarma' => $shawarma]);
    }

    public function create(){
        // Launches the Create page for the Web form
       return view('shawarmas.create');
    }
    
    public function store(){
        // Create instance of Shawarmas Model and use it to receive/store data in table
        $shawarma = new Shawarmas();

        $shawarma->name = request('name');
        $shawarma->type = request('type');
        $shawarma->price = request('price');
        $shawarma->discount = request('discount');

        $shawarma->save();

        return redirect('/')->with('mssg', 'Thanks for your order');;
    }

    public function destroy($id){
        $shawarma = Shawarmas::findOrFail($id);
        $shawarma->delete();

        return redirect('/shawarmas');
    }

    // public function __construct(){
    //     $this->middleware('auth');
    // }

}
