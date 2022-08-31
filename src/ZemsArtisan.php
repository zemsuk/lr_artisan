<?php
namespace Zems\lrArtisan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use DB;

class ZemsArtisan extends Controller
{
    public $method;
    public $request;
    function __construct(Request $request)
    {
        $this->method = $request->method();
        $this->request = $request;
        
    }    
    public function index($data = false)
    {
        echo "Hello Artisan";
    }    
    
    public static function test()
    {
        return "Test";
    }
    public function hi()
    {
        return "Hi from Controller";
    }
    
    
}
