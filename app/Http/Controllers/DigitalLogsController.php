<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitalLogsController extends Controller
{
    public function index() {
        return view('DigitalLogs.index');
    }

    public function create() {
        return view('DigitalLogs.digitalForm');
    }
}
