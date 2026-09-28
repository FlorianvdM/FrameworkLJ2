<?php

namespace App\Providers\Products;

use App\Models\Product;
use Illuminate\Http\Request;

class Update
{
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);

        try {
            $product->name = $request->name;
            $product->description = $request->description;
            $product->category_id = $request->category_id;
            $product->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Product kon niet worden bijgewerkt.');
        }

        return redirect()
            ->route('products.get', $product->id)
            ->with('success', 'Product bijgewerkt.');
    }
}
