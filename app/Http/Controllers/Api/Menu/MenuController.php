<?php

namespace App\Http\Controllers\Api\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Http\Requests;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\Transformer\UserTransformer;

class MenuController extends Controller
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
        
		//$menu = Menu::paginate(15);
        // Return a collection of $task with pagination
        //return $this->response->withPaginator($tasks, new  TaskTransformer());
		
		$menu = Menu::where('status', 1)->paginate(10);
		
		
		//$menu = Menu::all();
		return response()->json($menu);
    }
	
	public function search($term, $keyword){
		
			
		//$menu = Menu::where('status', 1)->paginate(10);
		
		$menu = Menu::where($term, '=', $keyword)->paginate(1);
		
		return response()->json($menu);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
