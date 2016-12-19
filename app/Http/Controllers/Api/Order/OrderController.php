<?php

namespace App\Http\Controllers\Api\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Order;
use App\Charges;

use App\Http\Requests;
use EllipseSynergie\ApiResponse\Contracts\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $respose;

   public function __construct(Response $response)
   {
       $this->response = $response;
   }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function generate(Request $request , $userid){

        $jsonArr = json_decode($request->items,true);
        $count=0;
        $bill_total=0;
        foreach ($jsonArr as $key => $value) {

            $bill_total += $value['price']*$value['quantity'];
            $count++;

        }


        $charges = Charges::find(1);

        $data['userid'] = $userid;
        $data['items'] = $request->items;
        $data['item_count'] = $count;
        $data['packaging_charges'] = $charges->packaging_charges;
        $data['tax']= $charges->tax;
        $data['bill_total'] =   $bill_total;
        $data['delivery_charges'] = $charges->delivery_charges;
        $data['total'] = $bill_total+$charges->delivery_charge;

        return response()->json($data);
    }


    public function store(Request $request,Request $request , $userid)
    {

      $jsonArr = json_decode($request->items,true);
      $count=0;
      $bill_total=0;
      foreach ($jsonArr as $key => $value) {

          $bill_total += $value['price']*$value['quantity'];
          $count++;

      }


      $charges = new Charges;

      $charges->userid = $userid;
      $charges->items = $request->items;
      $charges->item_count = $count;
      $charges->packaging_charges = $charges->packaging_charges;
      $charges->tax= $charges->tax;
      $charges->bill_total =   $bill_total;
      $charges->delivery_charges = $charges->delivery_charges;
      $charges->total = $bill_total+$charges->delivery_charge;

      $charges->save();

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userid)
    {
        $order = Order::where('user_id' , '=', $userid)->get();

        return response()->json($order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
