<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function gallery(Request $request)
    {
        $id = $request['ident'];

        return ++$id;
    }
}
