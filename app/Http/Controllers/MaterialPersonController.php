<?php

namespace App\Http\Controllers;

use App\Models\MaterialPerson;
use Illuminate\Http\Request;

/**
 * Class MaterialPersonController
 * @package App\Http\Controllers
 */
class MaterialPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materialPeople = MaterialPerson::paginate();

        return view('material-person.index', compact('materialPeople'))
            ->with('i', (request()->input('page', 1) - 1) * $materialPeople->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materialPerson = new MaterialPerson();
        return view('material-person.create', compact('materialPerson'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MaterialPerson::$rules);

        $materialPerson = MaterialPerson::create($request->all());

        return redirect()->route('material-people.index')
            ->with('success', 'MaterialPerson created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materialPerson = MaterialPerson::find($id);

        return view('material-person.show', compact('materialPerson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materialPerson = MaterialPerson::find($id);

        return view('material-person.edit', compact('materialPerson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaterialPerson $materialPerson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialPerson $materialPerson)
    {
        request()->validate(MaterialPerson::$rules);

        $materialPerson->update($request->all());

        return redirect()->route('material-people.index')
            ->with('success', 'MaterialPerson updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materialPerson = MaterialPerson::find($id)->delete();

        return redirect()->route('material-people.index')
            ->with('success', 'MaterialPerson deleted successfully');
    }
}
