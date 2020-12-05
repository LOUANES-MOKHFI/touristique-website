<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endroits extends Model
{
    
   	protected $table = 'endroits';
    protected $fillable = ['name','photo','wilaya','commune','adress','description','id_category','active','deleted'];

     public function scopeActive($query){
        return $query->where('active',1);
    }

    public function getActive(){
    return $this->active == 1 ? 'active' : 'désactive'; 
     }



     public function category(){
        return $this->belongsTo('App\Category','id_category','id');
    }
}
