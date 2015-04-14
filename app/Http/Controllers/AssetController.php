<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;
use App\Asset;

class AssetController extends Controller
{

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('admin', ['only' => ['adminIndex', 'adminDestroy']]);
        $this->middleware('teacher', ['except' => ['adminIndex', 'adminDestroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $assets = Asset::where('user_id','=',Auth::user()->id)->get();
        return view("asset.index", ['assets' => $assets]);
    }


    /**
     * @param $user
     * @param $file
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */

    public function download($user, $file)
    {
        return response()->download(storage_path() . '/upload/' . $user . '/' . $file);
    }

    public function adminIndex()
    {
        $assets = Asset::paginate(10);

        return view("asset.admin_index", ['assets' => $assets]);
    }

    public function adminDestroy($user, $path)
    {

    }

    public function create()
    {
        return view("asset.create");
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //Max file size of 10 megs
        $this->validate($request, [
            'asset' => 'required|max:10240'
        ]);
        $file = $request->file('asset');
        $filesize = round($request->file('asset')->getSize() / (1024 * 1024),3);
        $path = storage_path() . '/upload/' . Auth::user()->username . '/';

        //Sanitize the filename

        // Remove anything which isn't a word, whitespace, number
        // or any of the following caracters -_~,;:[]().
        $filename = preg_replace("([^\w\s\d\-_~,;:\[\]\(\).])", '', $file->getClientOriginalName());
        $filename = preg_replace("([\.]{2,})", '', $filename);
        $request->file('asset')->move($path, $filename);

        Asset::create(['user_id' => Auth::user()->id, 'path' => $path, 'filename' => $filename,'filesize'=>$filesize]);

        return redirect('asset')->with('message', ' Uploaded file!');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Asset::destroy($id);

        return redirect('asset')->with('message',' Deleted asset!');
    }

}
