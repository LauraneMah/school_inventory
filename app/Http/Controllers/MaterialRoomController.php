<?php

namespace App\Http\Controllers;

use App\Models\MaterialRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class MaterialRoomController
 * @package App\Http\Controllers
 */
class MaterialRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materialRooms = MaterialRoom::paginate();

        return view('material-room.index', compact('materialRooms'))
            ->with('i', (request()->input('page', 1) - 1) * $materialRooms->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Fmat = DB::table('materials')->where('type_id', 2)->pluck('description', 'id');
        $listRooms = DB::table('rooms')->pluck('name', 'id');

        $materialRoom = new MaterialRoom();
        return view('material-room.create', compact('listRooms','Fmat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MaterialRoom::$rules);

        $materialRoom = MaterialRoom::create($request->all());

        return redirect()->route('material-rooms.index')
            ->with('success', 'MaterialRoom created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materialRoom = MaterialRoom::find($id);

        return view('material-room.show', compact('materialRoom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materialRoom = MaterialRoom::find($id);

        return view('material-room.edit', compact('materialRoom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MaterialRoom $materialRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialRoom $materialRoom)
    {
        request()->validate(MaterialRoom::$rules);

        $materialRoom->update($request->all());

        return redirect()->route('material-rooms.index')
            ->with('success', 'MaterialRoom updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materialRoom = MaterialRoom::find($id)->delete();

        return redirect()->route('material-rooms.index')
            ->with('success', 'MaterialRoom deleted successfully');
    }
}
