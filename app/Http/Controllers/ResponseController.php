<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Response;
use Illuminate\Support\Facades\Auth;
use App\Question;
class ResponseController extends Controller {

    /**
     * Whenever this controller is called, protect all the routes except for those defined below
     * with the faculty middleware.
     */
    public function __construct(){
        $this->middleware('teacher');
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    /**
     * List all the responses for that specific user
     */
	public function index()
	{
        $id = Auth::user()->id;
        $responses = Response::where('user_id','=',$id)->paginate(10);
        $responses = $responses->filter(function($response){
            return Question::find($response->question_id);
        });
        return view('response.index',['responses'=>$responses]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		/**
         * This is not used currently. All responses are formulated on question pages
         */
	}

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
	public function store(Request $request)
	{
		$input = $request->only(['evidence','comments','user_id','question_id']);
        $response = Response::create($input);
        $response->standards()->sync($request->get('standards'));
        return redirect()->back()->with('message',' Submitted response!<br> Thank you for your feedback!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$response = Response::find($id);
        return view('response.show',['response'=>$response]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$response = Response::find($id);
        $standard_ids = $response->standards->lists('id');
        return view('response.edit',['response'=>$response,'standard_ids'=>$standard_ids]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
        if(Auth::user()->id != $request->user_id){
            return redirect('/')->withErrors(['User ID in form didn\'t match']);
        }

        $input = $request->except('_token','standards');
        $this->validate($request,[
            'question_id' => 'required|exists:questions,id',
            'user_id' => 'required|exists:users,id',
            'comments' => 'required',
            'evidence' => 'required',
        ]);
        $response =  Response::updateOrCreate(['id' => $id], $input);

        $response->standards()->sync($request->get('standards'));
        return redirect('question')->with('message', "Updated response.");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request, $id)
	{
        if(Auth::user()->id != $request->user_id ){
            return redirect('/')->withErrors(['You don\'t own this response, You cannot delete it.']);
        }
		Response::destroy($id);
        return redirect('response');
	}

}
