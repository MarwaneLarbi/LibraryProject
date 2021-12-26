<?php

namespace App\Http\Livewire;

use App\Models\abonne;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class QrCodeReaderAbonne extends Component
{
    public function checkqrcode(Request $req){
        $checkExisteAbonne = abonne::where('id', $req->id)->count();
        if($checkExisteAbonne!=0){
            $abonne =abonne::find($req->id);
            session()->put('abonne', $abonne);
            return response()->json([
                'success'=>true,
                'status'=>200,
                'abonne'=> $abonne
            ]);
        }
        else{
            return response()->json([
                'success'=>false,
                'status'=>505,
            ]);
        }

    }
    public function render()
    {
        return view('livewire.qr-code-reader-abonne');
    }
}
