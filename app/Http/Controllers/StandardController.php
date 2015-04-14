<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Standard;

class StandardController extends Controller {


    /**
     * Whenever this controller is called, protect all the routes except for those defined below
     * with the faculty middleware.
     */
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
        $standards = Standard::paginate(10);
		return view('standard.index',['standards'=>$standards]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('standard.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input = $request->except('_token');

        $this->validate($request,
            ['name' => "required|unique:standards",
            'category_id' => "required|exists:categories,id",
            'link' => "required"]);

        Standard::create($input);

        return redirect('standard')->with('message','Successfully created standard ' . $request->name);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$standard = Standard::find($id);

        return view('standard.show',['standard'=>$standard]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$standard = Standard::find($id);

        return view('standard.edit',['standard'=>$standard]);
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

        $this->validate($request,
            ['name'=>'required',
            'category'=>'required']);

        Standard::updateOrCreate(['id' => $id], $input);

        return redirect('standard')->with('message' , "Standard  modified");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Standard::destroy($id);

        return redirect('standard')->with('message','Deleted standard!');
	}

}
