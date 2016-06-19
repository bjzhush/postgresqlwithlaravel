<?php

namespace App\Http\Controllers;

use DB;

class postgresController extends Controller
{
    public function showdb()
    {
        $results = DB::select('select * from user_tbl');
        echo "<pre>";
        var_dump($results);
        exit;

    }
    
}

