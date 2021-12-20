<?php

namespace App\Http\Livewire;

use App\Models\mot_cle;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Livewire\WithPagination;

class MotsCles extends Component
{
    use WithPagination;

    protected $listeners = ['refreshTableTags' => '$refresh'];
    public $searchTags;
    protected $paginationTheme = 'bootstrap';
    public function store(Request $req){
        $checkExisteTags = mot_cle::where('name', $req ->name_category)->count();
        $all=$req->tags_name;
        $tags = explode(',' ,$req->tags);
        $existCount=0;
        $notExistCount=0;
        foreach ($tags as $tag){
            if (mot_cle::where('name',$tag)->count()!=0){
                $existCount++;
            }
            else{
                $notExistCount++;
                $newtag=  new mot_cle();
                $newtag->name=$tag;
                $newtag->save();
            }
        }
        if ($notExistCount==0){
            return response()->json([
                'success'=>false,
                'status'=>505,
                'message'=>'tags deja  Exist',
            ]);
        }
        else {
            return response()->json([
                'status'=>200,
                'success'=>true,
                'notexist'=>$notExistCount,
                'exist'  => $existCount,
            ]);
        }

    }
    public function delete($id){
        mot_cle::find($id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>'tags has been deleted'

        ]);
    }

    public function render()
    {
        return view('livewire.mots-cles',[
            'tags'=>	mot_cle::orderBy('created_at','desc')->where(function($sub_query){
                $sub_query->where('name', 'like', '%'.$this->searchTags.'%');
            })->paginate(10)
        ]);
    }
}
