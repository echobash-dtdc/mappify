<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MapMarker;

class MapController extends Controller
{
    public function index()
    {
        $maps = MapMarker::all();
        return view('maps.index', compact('maps'));
    }

    public function list()
    {
        $maps = MapMarker::all(['latitude','longitude','name','image']);
        return view('maps.list', compact('maps'));
    }
}
