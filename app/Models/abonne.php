<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class abonne extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "abonnes";
    protected $fillable=['nom','prenom','adresse','tel','email','dateNaissence','endDate','status','package_id','created_at','updated_at','deleted_at'];
    protected $hidden =['created_at','updated_at','pivot','deleted_at'];
    public $timestamps = true;
    public function package(){

        return $this->belongsTo(package::class, 'abonne_id','id')->withTimestamps();
    }
    public function livres()
    {
        return $this->belongsToMany(livre::class, 'livre_abonne','abonne_id')->withPivot('status')->whereNull('livre_abonne.deleted_at')->withTimestamps();

    }
    public function activites()
    {
        return $this->belongsToMany(livre::class, '_activities_abonne','abonne_id')->withPivot('status')->whereNull('livre_abonne.deleted_at')->withTimestamps();

    }
}
