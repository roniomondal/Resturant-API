<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Http\Requests;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\Transformer\UserTransformer;

class UserController extends Controller
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
		$user = User::all();
		return response()->json($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

		$http = new \GuzzleHttp\Client();
		 $oauth_client = \DB::table('oauth_clients')->where('name', '=', 'Laravel Password Grant Client')->where('password_client', '=', 1)->first();
		 $response = $http->post(url('/') . '/oauth/token', [
		   'form_params' => [
			 'grant_type' => 'password',
			 'client_id' => $oauth_client->id,
			 'client_secret' => $oauth_client->secret,
			 'username' => $request->email,
			 'password' => $request->password,
			 'scope' => '',
		   ],
		 ]);
		 $response_body = json_decode((string)$response->getBody(), true);
		 $access_token = $response_body['access_token'] ;
		 $refresh_token = $response_body['refresh_token'];

		 return $response_body;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		/*
		$this->validate($request, [
        'category' => 'required|unique:posts|max:255',
		]);
		*/

		try {
			$user = User::create($request->all());
			return response()->json($user);

		} catch ( \Illuminate\Database\QueryException $e) {
			 $arr = $e->errorInfo;
			unset($arr[0]);
			return response()->json( $arr);
		}







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
		try{
			$user = User::find($id);
				return response()->json($user);
			//return $this->response->withItem($user, new  UserTransformer());

		} catch ( \Illuminate\Database\QueryException $e) {
			 $arr = $e->errorInfo;
			unset($arr[0]);
			return response()->json( $arr);
		}
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

		$user = \App\User::find($id);

		$user->fname = $request['fname'];

		return $this->response->withItem($user->save(), new  UserTransformer());

		//return response()->json());
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


        $user = User::find($id);
        if (!$user) {
            return $this->response->errorNotFound('User Not Found');
        }

        if($user->delete()) {
             return $this->response->withItem($user, new  UserTransformer());
        } else {
            return $this->response->errorInternalError('Could not delete a User info');
        }
    }
}
