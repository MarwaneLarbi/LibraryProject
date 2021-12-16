<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Livewire\Component;
use App\Models\auteur as auteurs;

class AddAuteurForm extends Component
{

    public function render()
    {
        return view('livewire.add-auteur-form');
    }
    public function Check (Request $req){
    $fullname = auteurs::where('fullname', $req ->name)-> first();
    $country=auteurs::where('country', $req ->country)-> first();
     if ($fullname && $country){
         return response()->json([
             'success' => true,
         ]);
     }

        return response()->json([
            'success' => false,
        ]);

    }
    public function store(Request $req)
    {
        $marwane=auteurs::all();
        $auteur =new auteurs();
        $auteur->fullname=$req->get('name');
        $auteur->country=$req->get('country');
        $auteur->description=$req->get('content');
        $auteur->save();

    }
}
