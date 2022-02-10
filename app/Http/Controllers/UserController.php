<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
class UserController extends Controller
{

    protected $routes;

    public function __construct()
    {
        include_once 'routes/custom.php';
    }

    public function addRoute($path, $func){
        array_push($this->routes,(object)[
            "name"=>$path,
            "func"=>$func
        ]);
    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Support\Collection|\Illuminate\View\View
     */
    public function fileImportExport()
    {

        return view('file-import');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function fileImport(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return back();
    }
    /**
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function fileExport()
    {
        return Excel::download(new UsersExport, 'users-collection.xlsx');
    }
}
