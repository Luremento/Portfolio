<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(9);
        return view('projects', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'main_tech' => 'nullable|string|max:100',
            'technologies' => 'nullable|string',
            'link' => 'nullable|url',
            'icon' => 'nullable|string|max:10',
            'is_coming_soon' => 'boolean',
        ]);

        $technologies = !empty($validated['technologies'])
            ? array_map('trim', explode(',', $validated['technologies']))
            : [];

        Project::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'main_tech' => $validated['main_tech'],
            'technologies' => $technologies,
            'link' => $validated['link'],
            'icon' => $validated['icon'] ?? '✨',
            'is_coming_soon' => $validated['is_coming_soon'] ?? false,
        ]);

        return redirect()->route('projects')->with('success', 'Проект успешно создан!');
    }
}