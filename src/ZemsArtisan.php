<?php
namespace Zems\lrArtisan;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\View;
// use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use DB;

class ZemsArtisan extends Controller
{
    public $method;
    public $request;
    // function __construct(Request $request)
    // {
    //     $this->method = $request->method();
    //     $this->request = $request;
        
    // } 
    public function home()
    {
        $data = DB::select('SHOW TABLES');
        return view('lrartisan::dashboard', compact('data'));
    }
    public function create()
    {
        return view('lrartisan::create');
    }   
    public function cmd(Request $request)
    {
        $data = $request->post();
        $model = $request->input('model');
        $migrate = $request->input('migrate');
        $controller = $request->input('controller');
        $hipen = '';
        if(isset($migrate) || isset($controller)){
            $hipen = '-';
        }
        $cmd = "make:model $model $hipen".$migrate.$controller;        
        \Artisan::call($cmd);
        return redirect('./zems_cmd?msg=Model Created Successfully');
    }    
    
    public static function migrate()
    {
        $cmd = "migrate";
        \Artisan::call($cmd);
        return redirect('./zems_cmd?msg=Database Migrated Successfully');
    } 
    public function get_column($tbl)
    {
        $data = DB::table($tbl)->get();
        $clum = Schema::getColumnListing($tbl);
        return view('lrartisan::table', compact('clum', 'data'));
    }
    public function migrate_list(){
        // $data = DB::table('migrations')->get();
        $data = DB::select('SHOW TABLES');
        return $data;

    }
    public function del_tbl($tbl){
        $data = Schema::dropIfExists($tbl);
        return redirect("./zems_cmd?msg=$tbl Table Deleted Successfully");
    }      
    public function del_column($id){
        DB::table('migrations')
        ->where('id',$id)
        ->delete();
        return redirect("./zems_cmd/tbl/migrations?msg=Data Deleted Successfully");
    }      
    
}
