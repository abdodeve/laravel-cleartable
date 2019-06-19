<?php

namespace Abdodev\ClearTable;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    //
    public function testAction( $name ){
    	echo "Action works ! :), Hello:  ".$name ;
    }
}
