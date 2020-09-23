<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $primaryKey = 'topid';
    protected $table = 'blogs';
    use HasFactory;
   
 
    public function category(){
        return $this->hasOne('\App\Models\category','catid');
    }
    
}
