<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function form(Request $request){

        if ($request->isMethod('post')){
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'email' => 'required|email',
                'tel' => 'required|min:10|max:10',
                'sexe' => 'required|in:homme,femme',
                'filiere' => 'required',
                'option' => 'required',
                'message' => 'min:30|max:100',
                'photo' => 'required|image|max:2048'
            ]);

            //stocker L'image dans storage/app/images
            $request->file('photo')->store('images');

            // Afficher Les donnee dans la page
            echo "<b>Nom : </b>".$request->input('nom')."<br>";
            echo "<b>Prenom : </b>".$request->input('prenom').'<br>' ;
            echo "<b>Email : </b>".$request->input('email').'<br>';
            echo "<b>Telaphone : </b>".$request->input('tel').'<br>';
            echo "<b>Sexe : </b>".$request->input('sexe').'<br>';
            echo "<b>Filiere : </b>".$request->input('filiere').'<br>';
            echo "<b>Options : </b>" ;
            $arr = ($request->input('option') );
            foreach($arr as $val)
            {
                echo $val.', ';
            }
            echo "</span><br><b>Message : </b>".$request->input('message').'<br>';

        }
        return view('form');

    }

}
