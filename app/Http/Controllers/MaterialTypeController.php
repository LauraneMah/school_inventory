<?php

namespace App\Http\Controllers;

use App\MaterialType;
use Illuminate\Http\Request;

/**
 * Class MaterialTypeController
 * @package App\Http\Controllers
 */
class MaterialTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materialTypes = MaterialType::paginate();

        return view('material-type.index', compact('materialTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $materialTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materialType = new MaterialType();
        return view('material-type.create', compact('materialType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MaterialType::$rules);

        $materialType = MaterialType::create($request->all());

        return redirect()->route('material-types.index')
            ->with('success', 'MaterialType created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materialType = MaterialType::find($id);

        return view('material-type.show', compact('materialType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materialType = MaterialType::find($id);

        return view('material-type.edit', compact('materialType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaterialType $materialType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialType $materialType)
    {
        request()->validate(MaterialType::$rules);

        $materialType->update($request->all());

        return redirect()->route('material-types.index')
            ->with('success', 'MaterialType updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materialType = MaterialType::find($id)->delete();

        return redirect()->route('material-types.index')
            ->with('success', 'MaterialType deleted successfully');
    }
}
