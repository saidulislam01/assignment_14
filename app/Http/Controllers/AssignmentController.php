<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AssignmentController extends Controller
{

    //Question 1:


    function retriveName(Request $request)
    {
        $name = $request->input('name');
        return $name;
    }


    //Question 2:


    function userAgent(Request $request): string
    {

        $userAgent = $request->header('User-Agent');
        return $userAgent;
    }


    //Question 3:



public function page( Request $request){
    $page = $request->query('page', null);
  if($page){
    return $page;
  }else{
    return "please set the page number";
  }

}


    //Question 4:



    function responseJson(): JsonResponse
    {
        $message = "Success";
        $data = ["name=" => "John Doe", "age" => "25"];
        return response()->json(['message' => $message, 'data' => $data]);
    }



    //Question 5:




    function fileUP(Request $request)
    {
        $img = $request->file('avatar');
        $photoFIle = $img->move(public_path('uploads'), $img->getClientOriginalName());
    }



    //Question 6:


    function rememberCookie(Request $request)
    {
        $rememberToken = $request->cookie('remember_token', null);
        return $rememberToken;
    }


    
/*
Question 7:


{
    "success": true,
    "message": "Form submitted successfully."
}
*/
}
