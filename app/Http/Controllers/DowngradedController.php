<?php

namespace App\Http\Controllers;

use App\Downgraded;
use Illuminate\Http\Request;

/**
 * Class DowngradedController
 * @package App\Http\Controllers
 */
class DowngradedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $downgradeds = Downgraded::paginate();

        return view('downgraded.index', compact('downgradeds'))
            ->with('i', (request()->input('page', 1) - 1) * $downgradeds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $downgraded = new Downgraded();
        return view('downgraded.create', compact('downgraded'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Downgraded::$rules);

        $downgraded = Downgraded::create($request->all());

        return redirect()->route('downgradeds.index')
            ->with('success', 'Downgraded created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $downgraded = Downgraded::find($id);

        return view('downgraded.show', compact('downgraded'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $downgraded = Downgraded::find($id);

        return view('downgraded.edit', compact('downgraded'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Downgraded $downgraded
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Downgraded $downgraded)
    {
        request()->validate(Downgraded::$rules);

        $downgraded->update($request->all());

        return redirect()->route('downgradeds.index')
            ->with('success', 'Downgraded updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $downgraded = Downgraded::find($id)->delete();

        return redirect()->route('downgradeds.index')
            ->with('success', 'Downgraded deleted successfully');
    }
}
