<?php

namespace App\Exports;
use App\Models\Attend;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\FromCollection;

class AttendanceExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

           protected $attendData;

 public function __construct($attendData)
    {
        $this->attendData = $attendData;
    }

    public function collection()
    {
        return $this->attendData;
    }

     public function headings(): array
    {
        return [
            'id',
            'name',
            'Email',
            'Description',
            'Date Time',
        ];
    }
}