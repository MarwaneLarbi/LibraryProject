<?php

namespace App\Http\Livewire;

use App\Models\auteur;
use App\Models\category;
use App\Models\Comment;
use App\Models\livre;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
class BooksList extends Component
{    use WithPagination;

    public $selectCategory=[];
    public $searchboook=null;
    public $Options=null;
    protected $paginationTheme = 'bootstrap';
    public $pagin=2;
    public function saveContact(Request $req){
        $this->Options='active';
        $this->searchboook=$req->searchboook;
        $this->pagin=5;
        return view('auth.test',[
            'categories'=> category::all(),
            'auteurs'=> auteur::all(),
            'books'=>livre::
                when($req->searchboook,function ($query) use ($req) {
                $query->where('titre', 'like', '%'.$req->searchboook.'%')
                    ->orwhere   ('id', '=', $req->searchboook)
                    ->orwhereHas('tags', function($q) use ($req) {
                        $q->where('name', $req->searchboook);
                    });
                })
                ->when($req->Langue,function ($query) use ($req) {
                    $query->where('langue',$req->Langue);
                })
                ->when($req->categories,function ($query) use ($req) {
                    $query->whereHas('categories', function($q) use ($req) {
                        $q->where('category_id', '=', $req->categories);
                    });
                })
                ->when($req->auteurs,function ($query) use ($req) {
                    $query->whereHas('auteurs', function($q) use ($req) {
                        $q->where('id', '=', $req->auteurs);
                    });
                })
                ->
            paginate(6)
        ]);
    }
    public function render()
    {$selectCategory=$this->searchboook;
        return view('livewire.books-list',[
            'categories'=> category::all(),
            'auteurs'=> auteur::all(),
            'books'=>livre::
            when($this->Options,function ($query){
                if ($this->Options=='active'){
                    $query->orderBy('titre','asc');
                }
                elseif ($this->Options=='inactive'){
                    $query->orderBy('status','desc');
                }
                elseif($this->Options=='dateexp'){
                    $query-> orderBy('endDate','asc');
                }
            })->
            where(function($sub_query){
                $sub_query->where('titre', 'like', '%'.$this->searchboook.'%');
            })->orwhere(function($sub_query){
                $sub_query->where('id', 'like', '%'.$this->searchboook.'%');
            })->whereHas('tags', function($q) {
        $q->where('name', $this->searchboook);
    })->paginate(6)
        ]);
    }
    public function book_id($id){
    $book=livre::where('id',$id)->first();
    if($book)
    {    $comments=Comment::where('post_id',$id)->orderBy('created_at','desc')->paginate(5);

        return view('home.bookDetails', ['book' => $book,'comments'=>$comments,]);

    }
    else {
      return  redirect('/');
    }

    }
    public function book_Category($id){
        $category=category::where('id',$id)->first();
        if($category)
        {            $books = $books=livre::whereHas('categories', function (Builder $query) use($id) {
            $query->where('category_id', '=', $id);
        })->paginate(9);

            return view('home.bookCategories', ['categories' => $category,'books'=>$books]);

        }
        else {
            return  redirect('/');
        }

    }
    public function store_comments(Request $req){
        $newcomment=new Comment();

        if (!$req->has('stars')){
            $newcomment->rating=3;
        }
        else{
            $newcomment->rating=$req->stars;

        }
        $newcomment->name=$req->name;
        $newcomment->email=$req->email;
        $newcomment->post_id=$req->post_id;
        $newcomment->comment=$req->message;
        $newcomment->save();
        return  back();



    }
}
