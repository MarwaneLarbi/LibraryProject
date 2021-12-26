<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class livre extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "livres";
    protected $fillable=['titre','auteur','isbn','editeur','langue','nombre_exmp','description','annee','Photo','created_at','updated_at'];
    protected $hidden =['created_at','updated_at','pivot','deleted_at'];
    public $timestamps = true;

    public function tags()
    {
        return $this->belongsToMany(tag::class, 'livre_tag','livre_id')->withTimestamps();
    }
    public function categories()
    {
        return $this->belongsToMany(category::class, 'livre_category','livre_id')->whereNull('livre_category.deleted_at')->withTimestamps();
    }
    public function abonnes()
    {
        return $this->belongsToMany(abonne::class, 'livre_abonne','livre_id')->withPivot('status')->whereNull('livre_abonne.deleted_at')->withTimestamps();
    }
    public function activites()
    {
        return $this->belongsToMany(abonne::class, '_activities_abonne','livre_id')->withPivot('status')->whereNull('livre_abonne.deleted_at')->withTimestamps();
    }
}

