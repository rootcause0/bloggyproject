<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function category(){
        return $this-belongsTo('\App\Models\blog','catid');
    }
    
    use HasFactory;
}
