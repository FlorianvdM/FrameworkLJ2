<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $order_date
 * @property int $status
 * @property int $user_id
 * @property-read User $user
 * @property-read Collection<int, OrderRow> $orderRows
 */
class Order extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'order_date',
        'status',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function orderRows(): HasMany
    {
        return $this->hasMany(OrderRow::class);
    }

    public function canDelete(): bool
    {
        if (isset($this->order_rows_count)) {
            return $this->order_rows_count === 0;
        }

        return ! $this->orderRows()->exists();
    }
}
