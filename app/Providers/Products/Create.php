<?php

namespace App\Providers\Products;

use App\Models\Product;
use Illuminate\Http\Request;

class Create
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        try {
            $product = new Product;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->category_id = $request->category_id;
            $product->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Product kon niet worden aangemaakt.');
        }

        return redirect()
            ->route('products.index')
            ->with('success', 'Product aangemaakt.');
    }
}
