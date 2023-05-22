<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AssignmentController extends Controller
{

    /*Question 1:
You have a Laravel application with a form that submits user information using a POST request.
Write the code to retrieve the 'name' input field value from the request and store it in a variable called $name.
*/


    function retriveName(Request $request)
    {
        $name = $request->input('name');
        return $name;
    }


    /*
Question 2:
In your Laravel application, you want to retrieve the value of the 'User-Agent' header from the current request.
Write the code to accomplish this and store the value in a variable called $userAgent.
*/

    function userAgent(Request $request): string
    {

        $userAgent = $request->header('User-Agent');
        return $userAgent;
    }


    /*
Question 3:
You are building an API endpoint in Laravel that accepts a GET request with a 'page' query parameter.
Write the code to retrieve the value of the 'page' parameter from the current request and store it in a variable called $page.
If the parameter is not present, set $page to null.
*/


public function page( Request $request){
    $page = $request->query('page', null);
  if($page){
    return $page;
  }else{
    return "please set the page number";
  }

}


    /*Question 4:

Create a JSON response in Laravel with the following data:
*/


    function responseJson(): JsonResponse
    {
        $message = "Success";
        $data = ["name=" => "John Doe", "age" => "25"];
        return response()->json(['message' => $message, 'data' => $data]);
    }



    /*
  Question 5:
You are implementing a file upload feature in your Laravel application.
Write the code to handle a file upload named 'avatar' in the current request and
store the uploaded file in the 'public/uploads' directory. Use the original filename for the uploaded file.
  */



    function fileUP(Request $request)
    {
        $img = $request->file('avatar');
        $photoFIle = $img->move(public_path('uploads'), $img->getClientOriginalName());
    }



    /*
Question 6:
Retrieve the value of the 'remember_token' cookie from the current request in Laravel
and store it in a variable called $rememberToken. If the cookie is not present, set $rememberToken to null.
  */


    function rememberCookie(Request $request)
    {
        $rememberToken = $request->cookie('remember_token', null);
        return $rememberToken;
    }


    
/*
Question 7:
Create a route in Laravel that handles a POST request to the '/submit' URL.
Inside the route closure, retrieve the 'email' input parameter from the request
and store it in a variable called $email. Return a JSON response with the following data
{
    "success": true,
    "message": "Form submitted successfully."
}
*/
}
