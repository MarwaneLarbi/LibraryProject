<?php

namespace App\Http\Livewire;

use App\Models\livre;
use Livewire\Component;

class DeleteLivre extends Component
{
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
