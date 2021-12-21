<?php

namespace App\Http\Livewire;

use App\Models\livre;
use App\Models\mot_cle;
use App\Models\tag;
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
        $checkExisteTags = tag::where('name', $req ->name_category)->count();
        $all=$req->tags_name;
        $tags = explode(',' ,$req->tags);
        $existCount=0;
        $notExistCount=0;
        foreach ($tags as $tag){
            if (tag::where('name',$tag)->count()!=0){
                $existCount++;
            }
            else{
                $notExistCount++;
                $newtag=  new tag();
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
        tag::find($id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>'tags has been deleted'

        ]);
    }

    public function render()
    {
        return view('livewire.mots-cles',[
            'tags'=>	tag::orderBy('created_at','desc')->where(function($sub_query){
                $sub_query->where('name', 'like', '%'.$this->searchTags.'%');
            })->paginate(10)
        ]);
    }

    public function testdata(){
        $livre=livre::find(2000);
        $tag=tag::find(2);
        return $livre->tags;
    }
}
