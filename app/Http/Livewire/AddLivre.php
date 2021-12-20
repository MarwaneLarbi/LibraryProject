<?php

namespace App\Http\Livewire;

use App\Models\auteur;
use App\Models\category;
use Livewire\Component;
use App\Models\Livre ;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class AddLivre extends Component
{
    use WithFileUploads;
    public function generateBook(){
        $code=$this->gencodebar();
        $checkExisteCodebar=Livre::where('livre_code',$code)->count();
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
        $checkExisteCategory = Livre::where('livre_code', $req ->check)->count();
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
        $path = 'files/bookCover/';
        $file = $req->file('book_photo');
        $file_name = time().'_'.$file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filetest='app/public/files/bookCover/'.$file_name;
        $upload = $file->storeAs($path, $file_name, 'public');
        dd($req->all());
        $newBook= new Livre();
        $newBook->titre=$req->book_name;
        $newBook->livre_code=$req->book_code;
        $newBook->auteur=$req->book_auteur;
        $newBook->editeur=$req->book_editeur;
        $newBook->isbn=$req->book_isbn;
        $newBook->nombre_exmp=$req->book_nbrexmp;
        $newBook->annee=$req->book_annee;
        $newBook->description=$req->book_description;
        $newBook->langue=$req->book_langue;
        $newBook->titre=$req->book_name;


    }
    public function render()
    {
        return view('livewire.add-livre',[
            'categories'  =>   category::all(),
            'auteurs'     =>   auteur::all(),
        ]);
    }
}
