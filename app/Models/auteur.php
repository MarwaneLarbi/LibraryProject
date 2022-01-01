<?php

namespace App\Models;

use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class auteur extends Model
{
    use HasFactory;
    use SoftDeletes,CascadeSoftDeletes;
    protected $table = "auteurs";
    protected $fillable=['fullname','country','description','photo','created_at','updated_at','deleted_at'];
    protected $hidden =['created_at','updated_at','pivot','deleted_at'];
    public $timestamps = true;

    public function livres(){
        return $this->hasMany(livre::class);
    }

    public function auteur(){

        return $this->belongsTo(User::class);
    }
}
