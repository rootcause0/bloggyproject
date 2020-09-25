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
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;  
use View;

class mainBlog extends Controller
{
    
    //Supplies all the fundemantal database datas to views (just in case if it is required).
    public function __construct()
    {
        $allData = blog::all();
        $catTable = category::all();
        view::share('allData',$allData);
        view::share('catTable',$catTable);
    }

    public function main(){
        
    
        return View('Layout/home');

    }
   // It is the page processor (content)
    public function processor(Request $request){
        try{
     return view('Layout/partials/content',['data'=>blog::selectByData($request->get('p'))]);
        }
        catch(\Exception $ex){
            return Redirect('/err');
        }
    }
    // There all cat. algorithm goes...
    public function category(Request $request){

     $catvalue = $request->input('catid'); // Implementing simple GET method here.
                     // It is for retrieve all categories for anvbar.
     $data = blog::getByCategoryId($catvalue); //There goes the query.
     if(!($data->isEmpty())){
     return View('/Layout/home',['catData'=>$data]);
     }
     else{
        return Redirect('/err');
     }
    }

    public function register(Request $req){
      $inputs = ['email' => $req->input('email'),'password' => Hash::make($req->input('up2'))]; 
      //Try catch. blogs just in case if query goes wrong.
      try{
      
        Users::create($inputs);   
      }
      catch(\Exception $ex){
          
        return Redirect('/err');
      }
      return view('/Layout/Partials/regsuccess');
    //
    }

    

public function login(Request $req){

     
    $credentials = [
        "email" => $req->input("email"),
        "password" => $req->input("password"),
     ];
    
     
    
    if(Auth::attempt($credentials)){

     return Redirect('/');
    } 
    else{
        return Redirect('/err');
    }

    

}

public function logOut(){

Auth::logout();
return Redirect('/');

}

public function addCategory(Request $req){
    try{
    $category = new Category();
    $cat = $req->input('cat'); 

    $category->category = $cat;
    $category->save();
    }
    catch(\Exception $ex){
        return Redirect('/err');
    }
    return Redirect('/');
}
// It is for view (Required for constructor data.)
public function addContent(){

return View('/Layout/Partials/add');

}

public function addContentProc(Request $req){
try{
 
$dataArray = ['catid'=>$req->input('catName'),'topic'=>$req->input('topic'),'content'=>$req->input('content'),'author'=>Auth::User()->email,'photolink'=>$req->input('photoLink')];
Blog::create($dataArray);
return Redirect('/');

}
catch(\Exception $ex){
    echo $ex;
    return Redirect('/err');
}

}
//GET
public function update(Request $req){
    $topData = Blog::selectByData($req->get('topid'));
    return View('/Layout/partials/update',['topData'=>$topData]);
}
//POST
public function updateProc(Request $req){
    
    $topData = Blog::selectByData($req->input('topid'));
    //Couldn't use mass data $topData = ['topic'=>$req->input('topic'),'content'=>$req->input('content'),'author'=>Auth::User()->email,'photolink'=>$req->input('photoLink')];
    $topData->topic = $req->input('topic');
    $topData->content = $req->input('content');
    $topData->catid = $req->input('catName');
    $topData->photolink = $req->input('photoLink');
    $topData->save();
    return Redirect('/');
}
public function delete(Request $req){
    
    $topData = Blog::selectByData($req->get('topid'));
    $topData->delete();
    return Redirect('/');
}
}