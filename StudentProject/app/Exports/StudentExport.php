<?php

namespace App\Exports;
use App\Models\ExportStd;
use App\Models\Students;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class StudentExport implements FromCollection ,WithHeadings
{
    public function  headings(): array{
        return [
            'Student_id',
            'First_Name',
            'Last_Name',
            'Email',
            'Address',
            'Age',
            'Class',
            'Gender',


        ];

    }
    public function collection()
    {
        return Students::all([
            'Student_id',
            'First_Name',
            'Last_Name',
            'Email',
            'Address',
            'Age',
            'Class',
            'Gender',


        ]);
    }
}
