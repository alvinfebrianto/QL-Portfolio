<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Resources\SkillResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class SkillController extends Controller
{
    public function index()
    {
        $skills = SkillResource::collection(Skill::all());
        return Inertia::render('Skills/Index', compact('skills'));
    }

    public function create()
    {
        return Inertia::render('Skills/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'image' => ['required', 'image']
        ]);

        if($request->hasFile('image')) {
            $image = $request->file('image')->store('skills');
            Skill::create([
                'name' => $request->name,
                'image' => $image
            ]);

            return Redirect::route('skills.index')->with('message', 'Skill created successfully.');
        }
        return Redirect::back();
    }

    public function edit(Skill $skill)
    {
        return Inertia::render('Skills/Edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $image = $skill->image;
        $request->validate([
            'name' => ['required', 'min:3']
        ]);
        if($request->hasFile('image')){
            Storage::delete($skill->image);
            $image = $request->file('image')->store('skills');
        }
        $skill->update([
            'name' => $request->name,
            'image' => $image
        ]);
        return Redirect::route('skills.index')->with('message', 'Skill updated successfully.');
    }

    public function destroy(Skill $skill)
    {
        Storage::delete($skill->image);
        $skill->delete();

        return Redirect::back()->with('message', 'Skill deleted successfully.');
    }
}
