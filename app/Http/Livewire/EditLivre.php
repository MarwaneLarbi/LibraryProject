<?php

namespace App\Http\Livewire;

use App\Models\auteur;
use App\Models\category;
use App\Models\livre;
use App\Models\tag;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class EditLivre extends Component
{
    public $image_path,$hasimage=false;
    public function update(Request $req){
        $alltags = array();
        $tags = explode(',' ,$req->book_tags);
        foreach ($tags as $tag){
            if (tag::where('name',$tag)->count()==0){
                $newtag=  new tag();
                $newtag->name=$tag;
                $newtag->save();
            }
        }
        foreach ($tags as $tag){
            $test=tag::where('name',$tag)->first();
            array_push($alltags, $test->id);
        }

    if($req->hasFile('edit_book_photo')){
        $image = $req->file('book_photo');
        $image_name = $image -> getClientOriginalName();
        $image -> move(public_path('/images'), $image_name);
        $this->image_path= "/images/".$image_name;
        $this->hasimage=true;
    }
        $updateBook= livre::find($req->edit_book_code);
        $updateBook->titre=$req->edit_book_name;
        $updateBook->id=$req->edit_book_code;
        $updateBook->auteur=$req->edit_book_auteur;
        $updateBook->editeur=$req->edit_book_editeur;
        $updateBook->isbn=$req->edit_book_isbn;
        $updateBook->nombre_exmp=$req->edit_book_nbrexmp;
        $updateBook->annee=$req->edit_book_annee;
        $updateBook->description=$req->edit_book_description;
        $updateBook->langue=$req->edit_book_langue;
        if ( $this->hasimage){
            $updateBook->photo= $this->image_path;
        }
        $updateBook->save();

        $updateBook->categories()->sync($req->book_category);
        $updateBook->tags()->sync($alltags);
        return response()->json([
            'status'=>200,

        ]);

    }
    public function render()
    {
        return view('livewire.edit-livre',[
            'categories'  =>   category::all(),
            'auteurs'     =>   auteur::all(),
        ]);
    }

    public function check_step1(Request $req){
        $checkExisteBook = livre::where('id', $req->code)->count();
        if($checkExisteBook!=0){
            return response()->json([
                'success'=>false,
                'status'=>505,
                'message'=>'Category deja  Exist',
            ]);
        }
        else{
            return response()->json([
                'success' => true,
                'status'=>200,
            ]);
        }
    }


}
