<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Category extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::all();

        return view('admin.category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:categories,name|max:255',
            'slug' => 'unique:categories,slug|max:255',
            'description' => 'string'
        ]);

        \App\Models\Category::create($request->all());

        return to_route('admin.category.index')->with('message', 'La catégorie à bien été enregistré!');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function edit(\App\Models\Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(\App\Models\Category $category, Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categories', 'name')->ignore(id: $category->id)
            ],
            'slug' => [
                'max:255',
                Rule::unique('categories', 'slug')->ignore(id: $category->id)
            ],
            'description' => 'string'
        ]);

        $category->update($request->all());

        return to_route('admin.category.index')->with('message', 'La catégorie à bien été mis à jours!');
    }
}
