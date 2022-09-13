<?php

namespace App\Http\Controllers\Activities;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\History;
use App\Models\ProgramImage;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        $activities = Activity::all();


        $histories = History::all();
        foreach ($histories as $history) {
            return view('pages.activities.index', compact('activities', 'history'));
        }

    }

    public function create()
    {
        $histories = History::all();
        foreach ($histories as $history) {
            return view('pages.activities.create', compact('history'));
        }
    }

    public function store(Request $request)
    {


        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $images) {
                $name = $images->getClientOriginalName();
                $images->move(public_path('Attachments/activities'), $name);

                $images = new Activity();
                $images->images = $name;
                $images->save();
            }
        }
        toastr()->success(trans('messages.success'));
        return redirect()->route('activities.index');
    }

    public function delete()
    {
        dd('delete');
    }
}
