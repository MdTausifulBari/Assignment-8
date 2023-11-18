<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    function index(Request $request, $id=null){
        $name = "Donal Trump";
        $age = "75";

        $data = ["id"=> $id,"name"=> $name,"age"=> $age];

        $name = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER["SERVER_NAME"];  // Setting Dynamic Server Name
//        $domain = "localhost";            // Locally Server Name Setting
        $secure = false;
        $httpOnly = true;

//        return response("OPERATION SUCCESSFUL!")->json(['status'=>'success', 'data'=>$data], 200)
//                            ->cookie($name , $value , $minutes , $path , $domain, $secure, $httpOnly);
        return response($data, 200)->cookie($name , $value , $minutes , $path , $domain, $secure, $httpOnly);
    }
}
