<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{

    /**
     * Whenever this controller is called, protect all the routes except for those defined below
     * with the admin middleware.
     */
    public function __construct(){
        $this->middleware('admin',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $news = News::paginate(10);
        return view('news.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
        $this->validate($request, ['user_id' => 'required|exists:users,id', 'text' => 'required','title'=>'required']);
        News::create($input);
        return redirect('/')->with('message', ' Created news article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $article = News::find($id);

        return view('news.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $article = News::find($id);

        return view('news.edit', ['article' => $article]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return $this
     */
    public function update(Request $request, $id)
    {
        $input = $request->except('_token');
        $this->validate($request, ['user_id' => 'required|exists:users,id', 'text' => 'required','title'=>'required']);
        News::updateOrCreate(['id' => $id], $input);

        return view('news.index')->with('message', ' Updated news article.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        News::destroy($id);

        return redirect('news')->with('message', ' Deleted news article.');
    }

}
