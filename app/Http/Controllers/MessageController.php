<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Mail;

class MessageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{	
		$user = $id;
		$events = DB::select( DB::raw("SELECT id,email from users where id ='$user'"));
		return view('message',compact('events'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		//
		$id = $request->get('num');
		$topic=$request->get('topic');
		$mail = $request->get('message');

		$events = DB::select( DB::raw("insert into msg_table set messages = '$mail', users_id =$id,topic='$topic',choices='no', created_at=NOW(), updated_at=NOW()"));
		

		// Mail::raw('Text to e-mail', function($message)
		// {
		//     $message->from('$mail', 'Laravel');

		//     $message->to('franciskornu@gmail.com')->cc('francis.kornu@ashesi.edu.gh');
		// });

		return view('index');
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$message = DB::select( DB::raw("select id,topic,message,created_at,sender from admin_alert"));
		return view('alert',compact('message'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
