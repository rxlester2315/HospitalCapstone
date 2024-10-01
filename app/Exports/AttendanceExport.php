<?php

namespace App\Exports;
use App\Models\Attend;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AttendanceExport implements FromArray, WithHeadings
{
    protected $attendData;

    public function __construct($attendData)
    {
        $this->attendData = $attendData;
    }

    // Return the array of data to export
    public function array(): array
    {
        return $this->attendData->map(function ($item) {
            return [
                'id'          => $item->id,
                'name'        => $item->name,
                'email'       => $item->email,
                'description' => $item->description,
                'date_time'   => $item->date_time,
            ];
        })->toArray();
    }

    // Optionally add headings to the exported Excel file
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Description',
            'Date Time',
        ];
    }
}