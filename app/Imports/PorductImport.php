<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PorductImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        $chunks = $rows->chunk(100);
        
        foreach ($chunks as $chunk) {
            Product::insert($chunk->toArray());
        }
    }
}
