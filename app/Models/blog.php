<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $primaryKey = 'topid';
    protected $table = 'blogs';
    protected $guarded = []; 
    use HasFactory;
   
 
    public function category(){
        return $this->hasOne('\App\Models\category','catid');
    }
    
    public static function getByCategoryId($catId){

           return self::select()->where('catid',$catId)->get();
        
    }

    public static function selectByData($topId){

        return self::select()->where('topid',$topId)->firstOrFail(); 
    }
    
}
