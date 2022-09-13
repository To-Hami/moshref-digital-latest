<?php

namespace App\Http\Controllers\Classrooms;

use App\Http\Controllers\Controller;
use App\Imports\MograratsImport;
use App\Imports\StudantImport;
use App\Models\History;
use App\Models\Mograrat;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class MograratController extends Controller
{
    public function index()
    {
        $mograrats = Mograrat::all();

        $histories = History::all();
        foreach ($histories as $history) {
            return view('pages.mograrats.index', compact('history', 'mograrats'));
        }
    }

    public function createExcel()
    {

        $histories = History::all();
        foreach ($histories as $history) {
            return view('pages.mograrats.createExcel', compact('history'));
        }
    }

    public function storeExcel(Request $request)
    {
        Excel::import(new MograratsImport(), $request->file);

        toastr()->success(trans('messages.success'));
        return redirect()->route('mograrats.index');

    }


    public function show()
    {
        dd('show');
    }

    public function trash()
    {
        $mograrats = Mograrat::all();
        foreach ($mograrats as $mograrat) {
            $mograrat->delete();
        }

        toastr()->success('تم حزف البيانات بنجاح');
        return redirect()->route('mograrats.index');


    }

    public function create()
    {

        $histories = History::all();
        foreach ($histories as $history) {
            return view('pages.mograrats.add_studants', compact('history'));

        }
    }

    public function store(Request $request)
    {

        $student = new Mograrat();
        $student->name = $request->name;
        $student->nationality = $request->nationality;
        $student->specialty = $request->specialty;
        $student->entry_year = $request->entry_year;
        $student->id_number = $request->id_number;
        $student->birth = $request->birth;
        $student->status = $request->status;
        $student->date_of_com = $request->date_of_com;

        $student->save();

        toastr()->success(trans('messages.success'));
        return redirect()->route('mograrats.index');


    }


    public function update ( Request $request ,Mograrat $mograrat)
    {
        $mograrat->update($request->all());

        toastr()->success(trans('messages.success'));
        return redirect()->route('mograrats.index');

    }

    public function edit(Mograrat $mograrat)
    {

        $histories = History::all();
        foreach ($histories as $history) {
            return view('pages.mograrats.edit', compact('history','mograrat'));
        }
    }

    public function destroy (Mograrat $mograrat)
    {
        $mograrat->delete();
        toastr()->success(trans('messages.success'));
        return redirect()->route('mograrats.index');
    }
}
