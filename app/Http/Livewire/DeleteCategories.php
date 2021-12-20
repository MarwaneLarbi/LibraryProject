<?php

namespace App\Http\Livewire;

use App\Models\category;
use Livewire\Component;

class DeleteCategories extends Component
{
    public function deleteCategory($id){
        category::find($id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>'category has been deleted'

        ]);
    }
    public function render()
    {
        return view('livewire.delete-categories');
    }
}
