<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Admin;

class EventController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $text = Admin::all();
		$text = DB::select( DB::raw("SELECT * FROM event_folders"));
		return view('events',compact('text'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('auth/login');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$eventName = $request->get('event');
		$description = $request->get('description');
		$regular = $request->get('regular');
		$vip = $request->get('vip');
		$ticketNumber = $request->get('ticketNumber');
		$id = $request->get('id');
		$events = DB::select( DB::raw("UPDATE event_folders set name='$eventName', description='$description',regular_ticket=$regular,vip_ticket=$vip, original_number=$ticketNumber, updated_at=NOW() WHERE id= $id"));
		return redirect()->route('qr2');
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
		$events = DB::select( DB::raw("SELECT * from event_folders where id=$id"));
		return view('edit',compact('events'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Request $request)
	{
		//
		$name = $request->get('username');
		$email = $request->get('address');
		$number = $request->get('phone');
		$id = $request->get('id');
		$events = DB::select( DB::raw("UPDATE users set name = '$name', email='$email',phone='$number',
			updated_at=NOW() where id = $id"));
		return redirect()->route('qr3');
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
		$events = DB::select( DB::raw("SELECT * from users where id=$id"));
		return view('userEdit',compact('events'));
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
