<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cruds as ModelsCruds;

class ctudcontroller extends Controller
{
    public function inicio(){
        return view('principal');
    }

    public function __construct ()
    {
        $this->middleware('auth');

}
    public function index(Request $request)
    {
        $cruds = $request->user()->cruds()->orderBy('created_at', 'des')->get();

        return view('cruds.index', ['cruds' => $cruds]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|max:255',
            'email' => 'required|max:255'

        ]);

        $request->user()->cruds()->create([
            'nombre' => $request->nombre,
            'email' => $request->title
        ]);

        return redirect('/cruds');
    }
    public function editView($id)
    {
        $cruds= cruds ::find($id);

        if (empty($curds)) {
            return redirect('/cruds');
        }

        $this->authorize('verify', $cruds);

        return view('cruds.edit', ['cruds' => $cruds]);
    }

    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required|max:255',
            'email' => 'required|max:255'
        ]);

        $crud = cruds::find($id);

        if (empty($task)) {
            return redirect('/crud');
        }

        $this->authorize('verify', $crud);

        $crud->nombre = $request->nombre;
        $crud->cargo = $request->cargo;
        $crud->save();
        return redirect('/crud');
    }


    public function destroy($id)
    {
        $crud= cruds::find($id);

        if (empty($crud)) {
            return redirect('/crud');
        }

        $this->authorize('verify', $crud);

        $crud->delete();
        return redirect('/crud');
    }


}
