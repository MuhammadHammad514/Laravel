<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\StudentExport;
use Maatwebsite\Excel\Facades\Excel;


class StudentExportController extends Controller
{
    public function exportStudent(){
          return Excel::download(new StudentExport, 'Students.csv',\Maatwebsite\Excel\Excel::CSV);

    }
}
