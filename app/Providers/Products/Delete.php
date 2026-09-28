<?php

namespace App\Providers\Products;

use App\Models\Product;

class Delete
{
    public function delete(int $id)
    {
        $product = Product::findOrFail($id);

        if (! $product->canDelete()) {
            return redirect()
                ->route('products.index')
                ->with('error', 'Product kan niet worden verwijderd omdat er nog reviews, prijzen of orderregels aan gekoppeld zijn.');
        }

        try {
            $product->delete();
        } catch (\Exception $exception) {
            return redirect()
                ->route('products.index')
                ->with('error', 'Product kon niet worden verwijderd.');
        }

        return redirect()
            ->route('products.index')
            ->with('success', 'Product verwijderd.');
    }
}
