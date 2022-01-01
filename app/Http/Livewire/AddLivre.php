<?php

namespace App\Http\Livewire;

use App\Models\auteur;
use App\Models\category;
use App\Models\tag;
use Livewire\Component;
use App\Models\livre ;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class AddLivre extends Component
{
    use WithFileUploads;
    public $image_path;
    public function generateBook(){
        $code=$this->gencodebar();
        $checkExisteCodebar=livre::where('id',$code)->count();
        if($checkExisteCodebar==0){
            return response()->json([
                'status'=>200,
                'code'  => $code,
            ]);
        }
        else
        {
            $this->generateBook();
        }
    }
    private function gencodebar(){
        return $gen=random_int(1000000,10000000000);
    }
    public function check(Request $req){
        $checkExisteCategory = livre::where('id', $req ->check)->count();
        if ($checkExisteCategory!=0){
            return response()->json([
                'status'=>500,
                'check'  => false,
            ]);
        }
        else{
            return response()->json([
                'status'=>200,
                'check'  => true,
            ]);
        }

    }
    public function store(Request $req){
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

        $image = $req->file('book_photo');
        $image_name =date('YmdHis') . "." .  $image -> getClientOriginalName();
        $image -> move(public_path('/images/Books'), $image_name);
        $image_path = "/images/Books/".$image_name;
                $newBook= new livre();
                $newBook->titre=$req->book_name;
                $newBook->id=$req->book_code;
                $newBook->auteur=$req->book_auteur;
                $newBook->editeur=$req->book_editeur;
                $newBook->isbn=$req->book_isbn;
                $newBook->nombre_exmp=$req->book_nbrexmp;
                $newBook->annee=$req->book_annee;
                $newBook->description=$req->book_description;
                $newBook->langue=$req->book_langue;
                $newBook->photo=$image_path;
                $newBook->save();
                $livre=livre::find($req->book_code);
                $livre->categories()->syncWithoutDetaching($req->book_category);
                $livre->tags()->syncWithoutDetaching($alltags);
                return response()->json([
                    'status'=>200,

                ]);

    }
    public function render()
    {
        return view('livewire.add-livre',[
            'categories'  =>   category::all(),
            'auteurs'     =>   auteur::all(),
        ]);
    }
}
