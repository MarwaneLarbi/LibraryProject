<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Livewire\Component;
use App\Models\auteur as auteurs;
use Livewire\WithPagination;
use Yajra\DataTables\DataTables;

class ListeAuteurs extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshTable' => '$refresh'];

    public $description;
    public $searchTerm;
    public function getDescription($id){
        $this->description=auteurs::where('id',$id)->first();
    }
public function getAuteurs(){
    $data= auteurs::all()->toArray();
    $result = [
        'recordsTotal'    => '19',
        'recordsFiltered' => '10',
        'data'            => $data,
    ];
    return response()->json($result);

}
    public function getauteur(Request $request)
    {
        if ($request->ajax()) {
            $data = auteurs::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

    }

    //get auteur id
    public function render()
    {

        return view('livewire.liste-auteurs', [
            'auteurs'		=>	auteurs::orderBy('created_at','desc')->where(function($sub_query){
                $sub_query->where('fullname', 'like', '%'.$this->searchTerm.'%');
            })->orwhere(function($sub_query){
                 $sub_query->where('country', 'like', '%'.$this->searchTerm.'%');
            })->orwhere(function($sub_query){
                $sub_query->where('id', 'like', '%'.$this->searchTerm.'%');
            })
                ->paginate(10)
        ]);
    }
}
