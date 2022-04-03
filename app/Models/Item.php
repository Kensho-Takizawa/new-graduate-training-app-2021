<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    protected $fillable = ['name'];

    public function category(): BelongsTo
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function getCategory(int $id): Category
    {
        return Category::find($id);
    }

    /**
     * @return array<Item>
     */
    public static function getAll(): array
    {
        $collectionItems = Item::all();

        $items = [];

        foreach ($collectionItems as $item) {
            $i = Item::find($item->id);

            $items[] = $i;
        }

        return $items;
    }
}
