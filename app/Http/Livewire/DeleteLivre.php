<?php

namespace App\Http\Livewire;

use App\Models\category;
use App\Models\livre;
use Illuminate\Http\Request;
use Livewire\Component;

class DeleteLivre extends Component
{
    public function deleteselected(Request $req){
        livre::find($req->id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>'category has been deleted'
        ]);

    }
    public function delete($id){
        livre::find($id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>'category has been deleted'
        ]);
    }
    public function render()
    {
        return view('livewire.delete-livre');
    }
}
