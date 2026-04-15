<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
    public function index()
    {
        $classes = ClassRoom::paginate(5);
        return view('class.index', compact('classes'));
    }

    public function create()
    {
        return view('class.create');
    }

    public function store(Request $request)
    {
        ClassRoom::create($request->all());
        return redirect('/classes');
    }

    public function edit($id)
    {
        $class = ClassRoom::findOrFail($id);
        return view('class.edit', compact('class'));
    }

    public function update(Request $request,$id)
    {
        ClassRoom::findOrFail($id)->update($request->all());
        return redirect('/classes');
    }

    public function delete($id)
    {
        ClassRoom::destroy($id);
        return redirect('/classes');
    }
}