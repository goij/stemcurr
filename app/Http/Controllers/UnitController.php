<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Unit;
use App\Topic;

class UnitController extends Controller {


    /**
     * Whenever this controller is called, protect all the routes except for those defined below
     * with the faculty middleware.
     */
    public function __construct(){
        $this->middleware('faculty',['except'=>['index','show','showprint']]);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
        $units = Unit::all();
        if($request->has('subject')){
            $units = $units->filter(function($unit) use ($request){
                if($unit->subject_id == $request->get('subject')){
                    return true;
                }
                return false;
            });
        }
        if($request->has('grade')){
            $units = $units->filter(function($unit) use ($request){
                if($unit->grade_id == $request->get('grade')){
                    return true;
                }
                return false;
            });
        }
		return view("unit.index",["units"=>$units]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// New Units will not be created manually post-deployment
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        // New Units will not be created manually post-deployment
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$unit = Unit::find($id);
        $topics = Topic::where('grade_id','=',$unit->grade_id)->where('subject_id','=',$unit->subject_id)->get();
        return view("unit.show",["unit"=>$unit,"topics"=>$topics]);
	}

    public function showprint($id)
    {
        $unit = Unit::find($id);
        $topics = Topic::where('grade_id','=',$unit->grade_id)->where('subject_id','=',$unit->subject_id)->get();
        return view("unit.showprint",["unit"=>$unit,"topics"=>$topics]);
    }


    /**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$unit = Unit::find($id);
        return view("unit.edit",["unit"=>$unit]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
        $input = $request->except('_token');
        Unit::updateOrCreate(['id'=>$id],$input);
        return redirect('unit')->with('message','Updated unit!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        // Units will not be destroyed manually post-deployment
    }

}
