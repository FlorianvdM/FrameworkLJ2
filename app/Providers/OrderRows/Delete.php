<?php

namespace App\Providers\OrderRows;

use App\Models\OrderRow;

class Delete
{
    public function delete(int $id)
    {
        $orderRow = OrderRow::findOrFail($id);

        if (! $orderRow->canDelete()) {
            return redirect()
                ->route('orderrows.index')
                ->with('error', 'Orderregel kan niet worden verwijderd.');
        }

        try {
            $orderRow->delete();
        } catch (\Exception $exception) {
            return redirect()
                ->route('orderrows.index')
                ->with('error', 'Orderregel kon niet worden verwijderd.');
        }

        return redirect()
            ->route('orderrows.index')
            ->with('success', 'Orderregel verwijderd.');
    }
}
