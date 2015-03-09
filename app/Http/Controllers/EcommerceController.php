<?php


namespace App\Http\Controllers;


use Illuminate\Routing\Controller;

class EcommerceController extends Controller{

//    public function __construct(){
//        $this->middleware('auth');}

    public function ecommerce()
    {
        return view('ecommerce/index');
    }

} 