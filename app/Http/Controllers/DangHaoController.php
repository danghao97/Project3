<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DangHaoController extends BaseController
{
    public function setCookie()
    {
        $res = new Response();
        $res->withCookie('user', 'DangHao', 1);
        return $res;
    }

    public function getCookie(Request $req)
    {
        return $req->cookie('user');
    }
}
