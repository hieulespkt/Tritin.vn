<?php
namespace App\Http\Controllers\admin;
/**
 * Created by PhpStorm.
 * User: Hieu
 * Date: 2015/09/13
 * Time: 7:42 AM
 */
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class Layout extends Controller
{
    public function __contruct()
    {

    }
    public function index()
    {
        return view("admin.__layout");
    }
    public function change_logo_l(Request $request)
    {
        return view("admin.change_logo");
    }
    public function change_logo(Request $request)
    {

            $dulieu_tu_input = $request->all();
            return $dulieu_tu_input;

    }
}