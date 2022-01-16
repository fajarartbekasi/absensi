<?php

namespace App\Http\Controllers\Manage;

use App\Clas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassController extends Controller
{
    public function index()
    {
        $class = Clas::latest()->paginate(6);
        return view('manage.class.index', compact('class'));
    }
    public function create()
    {
        return view('manage.class.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'          => 'required',
            'walas'         => 'required',
            'jurusan'       => 'required',
            'jumlah'        => 'required',
        ]);

        $class = Clas::create([
            'name'          => $request->name,
            'walas'         => $request->walas,
            'jurusan'       => $request->jurusan,
            'jumlah'        => $request->jumlah,
        ]);

        return redirect()->back();
    }
}
