<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "categories";
    protected $fillable=['name','created_at','updated_at'];
    protected $hidden =['created_at','updated_at','pivot','deleted_at'];
    public $timestamps = true;
    public function category(){

        return $this->belongsTo(User::class)->withTimestamps();
    }
    public function livres()
    {
        return $this->belongsToMany(livre::class, 'livre_category','category_id')->whereNull('livre_category.deleted_at')->withTimestamps();

    }
}
