<?php

namespace App\Http\Livewire;

use App\Models\category;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Http\Response;

class EditCategories extends Component
{
    public function editer($id){
        $category = category::find($id);
        return response()->json([
            'status'=>200,
            'category_edt'=> $category,
        ]);
    }
    public function store(Request $req){
    $categort=category::find($req->id_category);
    $checkname=$req->name_category==$categort->name;
    $checkdescription=$req->description_category==$categort->description;
    if ($checkname && $checkdescription){
        return response()->json([
            'status'=>404,
            'message'=>'Aucune Mofification detected'
        ]);
    }
    else{
        $checkExisteCategory = category::where('name', $req ->name_category)->count();
        if ($checkExisteCategory!=0){
            return response()->json([
                'success'=>false,
                'status'=>505,
                'message'=>'Category deja  Exist'
            ]);
        }
        else{
            $updateCategory=new category();
            $updateCategory->name=$req->name_category;
            $updateCategory->description=$req->description_category;
            $updateCategory->save();
            return response()->json([
                'success' => true,
                'status'=>200,
                'message'=>'category has been Updeted'
            ]);
        }


    }
    }
    public function render()
    {
        return view('livewire.edit-categories');
    }
}
