<?php

namespace App\Http\Controllers;

use app\Models\Requete;
use app\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use  Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequeteMail;

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

   /**
     * Sauvegarder une nouvelle requete.
     */
    public function save_requete(Request $request){

        // Validation des données de la requête
        $request->validate([
            'nom_complet' => ['string', 'max:250'],
            'phone' => ['string', 'max:14'],
            'email' => ['required', 'string', 'email', 'max:250',],
            'objet' => ['required', 'string', 'email', 'max:240',],
            'message' => ['required', 'string', 'email', 'max:1000',],
        ]);

        // Génération d'un code d'affiliation unique
        $uniqueCode = Str::uuid()->toString();

        $user = $request->user ? $request->user : 1;
        $nom_complet = $request->nom_complet;

        // Création de l'utilisateur
        Requete::create([
            'code' => $uniqueCode, // Utilisation du code d'affiliation généré
            'nom_complet' => $request->nom_complet,
            'email' => $request->email,
            'phone' => $request->phone,
            'objet' => $request->objet,
            'message' => $request->message,
            'active' => 1,
        ]);

        // Envoyer l'e-mail de bienvenue
        Mail::to($request->email)->send(new RequeteMail($user, $nom_complet));

        return redirect()->route('site.contact')->with('success', 'Votre requqte été suomis avec succès');

    }
}
