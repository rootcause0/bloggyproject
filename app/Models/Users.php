<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
class users extends Model implements Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $table = 'users';
    protected $primaryKey ='id';
    protected $guarded = [];  
//Author name for various func.
    

    // Interface section.
    public function getAuthIdentifierName(){
             return 'email';
    }
    
    
    public function getAuthIdentifier(){
       return $this->email;
    }
    public function getAuthPassword(){
    return $this->password;
        
    }
    public function getRememberToken(){
     
    }
    public function setRememberToken($value){
    return string;
    }
    public function getRememberTokenName(){

    }
    //

    

    
    
  
}
