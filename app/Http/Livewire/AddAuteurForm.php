<?php

namespace App\Http\Livewire;
use App\Models\country;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Livewire\Component;
use App\Models\auteur as auteurs;

class AddAuteurForm extends Component
{




    public function render()
    {
        return view('livewire.add-auteur-form',[
            'countries' => country::all(),
        ]);
    }
    public function Check (Request $req){
        dd($req->all());
    $fullname = auteurs::where('fullname', $req ->name)-> first();
    $country=auteurs::where('country', $req ->country)-> first();
     if ($fullname){
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
    $chek=auteurs::where('fullname',$req->fullname)->first();
    if ($chek){
        return response()->json([
            'success' => false,
        ]);
    }
    else{
        $image = $req->file('photo');
        $image_name =date('YmdHis') . "." .  $image -> getClientOriginalName();
        $image -> move(public_path('/images/auteurs'), $image_name);
        $image_path = "/images/auteurs/".$image_name;
        $auteur =new auteurs();
        $auteur->fullname=$req->get('fullname');
        $auteur->country=$req->get('country');
        $auteur->description=$req->get('content');
        $auteur->photo=$image_path;
        $auteur->save();
        return response()->json([
            'success' => true,
        ]);
    }

        /*        dd($req->get('content'));*/
/*        $marwane=auteurs::all();
        $auteur =new auteurs();
        $auteur->fullname=$req->get('name');
        $auteur->country=$req->get('country');
        $auteur->description=$req->get('content');
        $auteur->save();
        $this->emit('refreshTable');*/
    }
}
