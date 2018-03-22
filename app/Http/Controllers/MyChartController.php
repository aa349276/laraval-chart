<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tlists;
class MyChartController extends Controller
{
    // -----------------show data---------------// 
   public function show()
   {
    $tlists = Tlists::all()->toJson();
  
    return $tlists;
   }

   public function chart()
   {
     
    return view('myChart.chart');
      
   }

}
