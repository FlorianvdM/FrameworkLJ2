<?php

namespace App\Providers\Categories;

use App\Models\Category;
use Illuminate\Http\Request;

class Update
{
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|string|max:45',
        ]);

        $category = Category::findOrFail($id);

        try {
            $category->name = $request->name;
            $category->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Categorie kon niet worden bijgewerkt.');
        }

        return redirect()
            ->route('categories.get', $category->id)
            ->with('success', 'Categorie bijgewerkt.');
    }
}
