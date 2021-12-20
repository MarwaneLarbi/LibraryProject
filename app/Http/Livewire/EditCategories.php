<?php

namespace App\Http\Livewire;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Livewire\Component;


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
    if ($checkname){
        if ($checkdescription){
            return response()->json([
                'status'=>404,
                'message'=>'Aucune Mofification detected',
                'exist'  => 0,
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
                'message'=>'category has been Updeted',
                'exist'  => 2,
            ]);
        }

    }
    else{
        $checkExisteCategory = category::where('name', $req ->name_category)->count();
        if ($checkExisteCategory!=0){
            return response()->json([
                'success'=>false,
                'status'=>505,
                'message'=>'Category deja  Exist',
                'exist'  => 1,
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
                'message'=>'category has been Updeted',
                'exist'  => 2,
            ]);
        }

    }

    }
    public function render()
    {
        return view('livewire.edit-categories');
    }
}
