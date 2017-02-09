<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		$image = $request->file('image');

		 $input->name=$eventName;
		 $input->description=$description;
		 $input->regular_ticket=$reg_amount;
		 $input->vip_ticket=$vip_amount;
		 $input->original_number=$number;
		 $input->number_left=$number;
		 $input->image = $eventName;
        $input->description = $request->description;
		$input->save();
		
				// $new_path =  public_path().'/img/logo/'. Admin::get('image').'/'.$user->logo_path;
    //             $old_path =  public_path().'/img/logo/'. $user->username.'/'.$user->logo_path;
    //             $move     =  File::move($new_path, $old_path);
    //             $delete   =  File::delete($old_path);

    //              $mobile = $request->all();
    // $Mob = Admin::create($mobile);
    $imageName = $input->image.'.'.$request->file('image')->getClientOriginalExtension();
    $request->file('image')->move(public_path().'/public/images/products/',$imageName);
    //return redirect('mobile');
		// $imageName = $input->image . '.' . 
  //       $request->file('image')->getClientOriginalExtension();

	 //    $request->file('image')->move(
	 //        base_path() . '/public/images/products/', $imageName
	 //    );

		// $file = rand(1000,100000)."-".$_FILES['file']['name']; $file_loc = $_FILES['file']['tmp_name']; 
		// $file_size = $_FILES['file']['size']; 
		// $file_type = $_FILES['file']['type']; 
		// $folder="uploads/";
		// $new_size = $file_size/1024;
		// $new_file_name = strtolower($file);
		// $final_file=str_replace(' ','-',$new_file_name);
		// if(move_uploaded_file($file_loc,$folder.$final_file)) { 
		// 	$sql="INSERT INTO event_folders SET image='$final_file'"; 
		// 	mysql_query($sql);
		// }
		
	
            //$file = $image;
            //getting timestamp
            //$timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            
            // $name = $timestamp. '-' .$file->getClientOriginalName();
            
            // $image->imagePath = $name;

            // $file->move(public_path().'/images/', $name);
        // $image = Admin::file('image');
        // $filename = date('Y-m-d-H:i:s')."-".$image->getClientOriginalName();
        //Storage::disk('local')->put('$filename', '$image');
        //Storage::move('$image','imageFile/$filename');
        //$inputPath->image = 'imageFile/'. $filename;

        // $input->save();

		//Storage::put('/imageFile', $image);
	    //$request->file('image')->move($destinationPath, $fileName);
		//$photo->move($destinationPath, $chooseYourFileName);

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
