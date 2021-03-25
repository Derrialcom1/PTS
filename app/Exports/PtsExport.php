<?php

namespace App\Exports;
use App\Models\Pts;
use Maatwebsite\Excel\Concerns\FromCollection;

class PtsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pts::all();
    }
}
