<?php
namespace App\Http\Controllers;

use App\Jobs\ProcessPodcast;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session,Validator;

class PageController extends Controller
{
    public function getIndex()
    {          
        return view('welcome');
    }
}
