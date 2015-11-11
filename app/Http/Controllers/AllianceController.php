<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Alliance;
use Illuminate\Http\Request;

class AllianceController extends Controller {


    public function __construct(){
        $this->middleware('faculty',['except'=>['index','show']]);
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $alliances = Alliance::paginate(10);

        return view('alliance.index',['alliances' => $alliances]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return view('alliance.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
        $input = $request->except('_token');
        //Magic redirect
        $this->validate($request,[
            'name' => 'required',
        ]);
        $alliance = Alliance::create($input);
        return redirect('alliance')->with('message', "Added new topic $alliance->name");
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
        $alliance = Alliance::find($id);
        return view('alliance.show', ['alliance' => $alliance]);
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
        $alliance = Alliance::find($id);
        return view('alliance.edit', ['alliance' => $alliance]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		//
        $input = $request->except('_token');
        //Magic redirect
        $this->validate($request,[
            'title' => 'required',
        ]);
        $alliance =  Alliance::updateOrCreate(['id' => $id], $input);
        return redirect('alliance')->with('message', "Updated $alliance->name");
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
        Alliance::destroy($id);

        return redirect('alliance')->with('message','Alliance disabled!');
	}

}
