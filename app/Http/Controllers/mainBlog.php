<?php
/*
 Author:rootcause a.k.a:Ilyas Gorkem Coban
--------------------------------------------
 It serves as a core controller of app.
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\category;
use View;

class mainBlog extends Controller
{
    
    //Supplies all the fundemantal database datas to views.
    public function main(){
        
         
        
        $data = blog::all();
        
        
        View::share('data',$data);
        return View('/Layout/home');

    }
   // I'm planning to direct all GET HTTP to there,and will do all proccesses in this function.
    public function processor(Request $request){
     echo $request->input('p');

    }
    // There all cat. algorithm goes...
    public function category(Request $request){

     $catvalue = $request->input('catid'); // Implementing simple GET method here.
     $data = blog::select()->where('catid',$catvalue)->get(); //There goes the query.
     if(!($data->isEmpty())){
     View::share('data',$data);
     return View('/Layout/home');
     }
     else{
         return View('/Layout/Partials/noCat');
     }
    }

    public function register(Request $req){
   
print_r($req->input());
       
    }
    //
}

