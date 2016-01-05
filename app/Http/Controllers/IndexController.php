<?php
/**
 * Created by PhpStorm.
 * User: Binho
 * Date: 31/10/2015
 * Time: 10:27
 */

namespace CodeDelivery\Http\Controllers;


class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}