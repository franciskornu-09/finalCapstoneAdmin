<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
use App\markers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class TableController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		return view('new');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$events = DB::select( DB::raw("SELECT * from event_folders"));
		return view('addlocation',compact('events'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$destinationPath = '../images/';
		$eventName = $request->get('event');
		$lat = $request->get('lat');
		$lng = $request->get('lng');
		$address=$request->get('address');
		$number = $request->get('fig');
		$type = 'bar';
		// $file = Request::file('image');
		// if (Request::hasFile('photo'))
		// {
		//     //
		//     Request::file('photo')->move($destinationPath);

		// 	Request::file('photo')->move($destinationPath, $eventName);
		// }

		$location = new markers;
		$location->quantity=$number;
		$location->name=$eventName;
		$location->address=$address;
		$location->lat=$lat;
		$location->lng=$lng;
		$location->type=$type;
		$location->save();

		return view('index');
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
	public function update(Request $request)
	{
		$input = new Admin;
		
		$eventName = $request->get('event');
		$description = $request->get('description');
		$reg_amount = $request->get('regular');
		$vip_amount = $request->get('vip');
		$number = $request->get('ticketNumber');
		
		 $input->name=$eventName;
		 $input->description=$description;
		 $input->regular_ticket=$reg_amount;
		 $input->vip_ticket=$vip_amount;
		 $input->original_number=$number;
		 $input->number_left=$number;
		 $input->image = $eventName;
        $input->description = $request->description;
		$input->save();
		

		return view('index');
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
