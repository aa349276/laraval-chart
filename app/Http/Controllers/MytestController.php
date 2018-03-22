<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tlists;

class MytestController extends Controller
{
   // -----------------show data---------------// 
   public function QQQ()
   {
    $tlists = Tlists::all();
  
    return view('testlist.index',['tlists' => $tlists]);
   }

//------------------- insert data--------------------//
   public function UUU(Request $request)
   {
       $request ->validate([
           'name' => 'required|min:3'
       ]);


       $Tlists= Tlists :: create($request->all());

       return redirect('/todo');
   }


   //--------------------- delete data     ---------------//
   public function DDD(Request $request, Tlists $iD)
   {
    
       $iD->delete();

       return redirect('/todo');


   
   }

   //------------------------- update date 1 (direct edition page)---------//
    public function Edit(Request $request,Tlists $iD)
   {
    
       $iD = Tlists :: find ($iD);

       return view('testlist.edit')->with('Tlists',$iD);


   
   }
   //------------------------- update date 2  (save)------------------//
   public function update(Request $request,$iD)
   {
    
       $post = Tlists :: find ($iD);
       $post->name=$request->name;
       $post->save();

       return redirect('/todo');

   }
   //----------------------------------------------------------------//



}

