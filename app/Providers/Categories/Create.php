<?php

namespace App\Providers\Categories;

use App\Models\Category;
use Illuminate\Http\Request;

class Create
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
        ]);

        try {
            $category = new Category();
            $category->name = $request->name;
            $category->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Categorie kon niet worden aangemaakt.');
        }

        return redirect()
            ->route('categories.index')
            ->with('success', 'Categorie aangemaakt.');
    }
}