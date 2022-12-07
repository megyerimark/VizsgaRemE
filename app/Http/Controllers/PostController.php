<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

  
    public function create()
    {
        return("Írj egy új posztot");
    }

   
    public function store(Request $request)
    {
        
    }

   
    public function show($id)
    {
        
    }

  
    public function edit($id)
    {
        return("szerkesztés");
    }

 
    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
