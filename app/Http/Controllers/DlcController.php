<?php

namespace App\Http\Controllers;

use App\Dlc;
use Illuminate\Http\Request;

class DlcController extends Controller
{
    public function __construct(Request $request) {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $dlcs = Dlc::all();
        return view('dlc.index')->with('dlcs', $dlcs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dlc.create');
    }

    public function store(Request $request)
    {
        Dlc::create($request->all());
        return redirect('dlc');
    }

    public function show(Dlc $dlc)
    {
        //
    }

    public function edit(Dlc $dlc)
    {
        return view('dlc.edit')->with('dlc', $dlc);
    }

    public function update(Request $request, Dlc $dlc)
    {
        $dlc->update($request->all());
        return redirect('dlc');
    }

    public function destroy(Dlc $dlc)
    {
        //
    }
}
