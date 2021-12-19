<?php

namespace App\Http\Livewire;

use App\Models\category;
use Illuminate\Http\Request;
use Livewire\Component;

class AddCategories extends Component
{
    public function addCategory(Request $req){
        dd($req->all());
    }
    public function checkAdd(Request $req){
        $checkcategory=category::where('name',$req->nameCategory)->count();
    if ($checkcategory!=0){
        return response()->json([
            'success' => false,
        ]);
    }
    else{
        $newCategory=new category();
        $newCategory->name=$req->nameCategory;
        $newCategory->description=$req->description;
        $newCategory->save();
        return response()->json([
            'success' => true,
            'status'=>200,
            'message'=>'category has been added'
        ]);
    }
    }
    public function render()
    {
        return view('livewire.add-categories');
    }
}
