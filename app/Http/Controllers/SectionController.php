<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionRequest;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::get();
        return view('en.admin.sections.sections', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('en.admin.sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SectionRequest $request)
    {
        $section = new Section;

        $section->name = $request->name_en;
        $section->desc = $request->desc_en;
        $section->created_by = Auth::user()->id;
        $section->updated_by = Auth::user()->id;

        $section->save();

        return redirect()->back()->with('success', 'Section Added Successfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $section = Section::findorFail(1)->first();

        return view('en.admin.sections.show', compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $section = Section::findorFail($id)->first(['id', 'name', 'desc']);

        return view('en.admin.sections.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SectionRequest $request, $id)
    {
        $brand = Section::findorFail($id);

        $data = [
            'name' => $request->name_en,
            'desc' => $request->desc_en,
            'updated_by' => Auth::user()->id,
        ];

        $brand->update($data);

        return redirect()->back()->with('success', 'Brand updated successfuly!');
    }

    // disabled Section status
    public function disabled($id)
    {
        $status = Section::findorFail($id);

        $status->status = 0;
        $status->save();
        return redirect()->back()->with('disabled', 'Section was disabled successuly!');
    }

    // Active Section status
    public function active($id)
    {
        $status = Section::findorFail($id);

        $status->status = 1;

        $status->save();

        return redirect()->back()->with('active', 'Section was active successuly!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Section::findorFail($id)->delete();
        return redirect()->back()->with('success', 'Section deleted successfuly!');
    }
}
