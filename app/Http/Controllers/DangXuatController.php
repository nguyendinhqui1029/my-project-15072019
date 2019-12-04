<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\BoxRightMaster;
use App\Classes\DataBoxRight;
use App\Classes\BoxDuAnNoiBat;
use App\Classes\DataCard;
use App\Classes\FormSearch;
use App\Classes\HeaderMaster;
use App\Classes\ContentMaster;
use App\Classes\FormTimKiem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class DangXuatController extends MasterController
{
    function __construct()
    {
        parent::__construct();
    }
    public function getLogout(Request $request){
       
        if($request->session()->has('role') && $request->session()->has('tendangnhap') && $request->session()->has('madangnhap'))
        {
            $request->session()->forget(['role', 'tendangnhap','madangnhap']);
            return redirect('');
        }
    }
}