<?php

namespace App\Http\Livewire;

use App\Models\abonne;
use App\Models\category;
use App\Models\livre;
use App\Models\package;
use App\Traits\sendSMS;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;
use Nette\Utils\Image;
use phpDocumentor\Reflection\Types\Integer;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class AddAbonnes extends Component
{
    use sendSMS;

    /**
     * @var mixed
     */
    public $Options='active';

    public function check(Request $req){

    }
    public function render()
    {
        return view('livewire.add-abonnes',[
            'packages'=>package::all(),
        ]);
    }


    public function store(Request $req){
        $check=abonne::where('id',$req->id)->count();
        if ($check!=0){
            return response()->json([
                'status'=>500,
                'success'=>false,

            ]);
        }
        $months = 0;
        switch ($req->abonnemnt){
            case 11:
                $months = 1;
            break;
            case 12:
                $months = 3;
            break;
            case 13:
                $months = 12;
            break;

        }

        $expiry_date = Carbon::now()->addMonths($months);
                $newAbonne=new abonne();
                $newAbonne->id=$req->abonne_id;
                $newAbonne->nom=$req->abonne_nom;
                $newAbonne->prenom=$req->abonne_prenom;
                $newAbonne->email=$req->abonne_email;
                $newAbonne->tel=$req->abonne_tel;
                $newAbonne->dateNaissence=$req->date_naissence;
                $newAbonne->package_id=$req->abonnemnt;
                $newAbonne->status='active';
                $newAbonne->role='abonne';

        if ($req->abonne_notification){}
                $newAbonne->notification=$req->abonne_notification;
                $newAbonne->endDate=$expiry_date->format('Y-m-d');
                $message='bienvenu '.$req->abonne_nom.' '.$req->abonne_prenom.
                        '   votre abonnement expire le : '.$expiry_date->format('Y-m-d');
                $number='+213'.$req->abonne_tel;
                $newAbonne->save();
                $this->sendMessage($message,'+213'.$req->abonne_tel);
        return response()->json([
            'status'=>200,
            'success'=>true,
        ]);
    }

    public function testdata(){
        $test=abonne::find('230589143');
        $test2=livre::find('370212');
        $user_id='15487826154';
        $allTopics = livre::whereHas('abonnes', function ($query)  {
            $query->where('livre_abonne.status', '=', 'done');
        })->get();
/*        foreach ($test->livres as $product)
        {
            echo $product->pivot;
        }*/
/* $mar=DB::table('_activities_abonne')
    ->where('abonne_id', Session::get('abonne')->id)
    ->orderBy('date',)
    ->get();*/
/*        $notification = $test->livres();
        return  DB::table('_activities_abonne')
            ->where('abonne_id', Session::get('abonne')->id)
            ->orderBy('date',)
           ->get();*/
        $books=livre::all();
        $category=category::all();
/*        foreach ($category as $product)
            {
                echo $product->name. ' '.$product->livres->count() ;
            }*/
/*        $ab=abonne::all();
        foreach ($ab as $product)
        {
            echo  $product->livres; ;
        }*/
        $ab=abonne::all();
/*        foreach ($ab as $abonne)
        {
            foreach ($abonne->livres as $product)
            {
                echo $product->pivot .'\n';
            }
        }*/
      //  $posts = Blog::where( DB::raw('YEAR(created_at)'), '=', '2015' )->get();
   /*     for ($i=1;$i<=31;$i++){
           echo  DB::table('_activities_abonne')
                   ->
                   where(DB::raw('DAY(created_at)'), '=', $i)
                   ->
                   where(DB::raw('MONTH(created_at)'), '=', now()->format('m'))
                   ->
                   where('status', '=', 'active')
                   ->
                   count().',';
        }*/
      //  livre::where(DB::raw('YEAR(created_at)'), '=', '2021')->count();

        return  DB::table('abonnes')
            ->where(DB::raw('role'), '=', 'Gestionnaire')
            ->get();
   }


}
