<?php

namespace App\Providers\Categories;

use App\Models\Category;

class Delete
{
    public function delete(int $id)
    {
        $category = Category::findOrFail($id);

        if (!$category->canDelete()) {
            return redirect()
                ->route('categories.index')
                ->with('error', 'Categorie kan niet worden verwijderd omdat er nog producten aan gekoppeld zijn.');
        }

        try {
            $category->delete();
        } catch (\Exception $exception) {
            return redirect()
                ->route('categories.index')
                ->with('error', 'Categorie kon niet worden verwijderd.');
        }

        return redirect()
            ->route('categories.index')
            ->with('success', 'Categorie verwijderd.');
    }
}