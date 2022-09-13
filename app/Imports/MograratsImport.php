<?php

namespace App\Imports;

use App\Models\Mograrat;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use phpDocumentor\Reflection\Types\Collection;

class MograratsImport implements ToCollection
{


    public function collection(\Illuminate\Support\Collection $rows)
    {


        $rows->each(function ($data, $value) {

            if ($value > 18 && $value % 2 == 1 ) {

//                dd($data);
                $student = new Mograrat();
                $student->name = $data[24] ?? null;
                $student->nationality = $data[22] ?? null;
                $student->specialty = $data[20] ?? null;
                $student->entry_year = $data[18] ?? null;
                $student->id_number = $data[15] ?? null;
                $student->birth = $data[10] ?? null;
                $student->status = $data[8] ?? null;
                $student->date_of_com = $data[2] ?? null;

                $student->save();
            }

        });


    }//end of collection

}//end of class
