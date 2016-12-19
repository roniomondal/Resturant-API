<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charges;

class ChargesCon extends Controller
{
    //

    public function create(Request $request){

      $result = Charges::get();

      if(empty($result)){
        //Create new Vlaues

        $charges = new Charges;
        $charges->packaging_charges = $request->packaging_charges;
        $charges->tax = $request->tax;
        $charges->delivery_charges = $request->delivery_charges;


        $charges->save();


      }
      else{
        $charges = Charges::find(1);

        $charges->packaging_charges = $request->packaging_charges;
        $charges->tax = $request->tax;
        $charges->delivery_charges = $request->delivery_charges;


        $charges->save();
      }


    }


}
