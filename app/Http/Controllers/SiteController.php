<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
   public function home(Request $request) {
        $app_name = 'Shop 241';
        return view('site.home', compact('app_name'));
   }
   
   public function about(Request $request) {
    return view('site.about');
   }

   public function contact(Request $request) {
      $email = 'contact@shop241.com';
      return view('site.contact', compact('email'));
   }
}
