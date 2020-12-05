<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   	protected $table = 'category';
    protected $fillable = ['category','id_user','active','deleted'];

     public function scopeActive($query){
        return $query->where('active',1);
    }

    public function getActive(){
    return $this->active == 1 ? 'active' : 'désactive';
        
     }

 public function place(){
        return $this->hasMany('App\Endroits','id_category','id');
    }
}

