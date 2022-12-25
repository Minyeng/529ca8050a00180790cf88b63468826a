<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\EmailJob;

class EmailController extends Controller
{
    public function index(Request $request) {
        dispatch(new EmailJob($request->all()));

        return 'Email has been added to queue!';
    }
}
