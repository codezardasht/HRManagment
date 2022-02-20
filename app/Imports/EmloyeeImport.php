<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmloyeeImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
//        dd('name');

        return new Employee([
            'name'  => $row['name'],
            'email' => $row['email'],
            'salary'    => $row['salary'],
            'age'    => $row['age'],
            'job_title'    => $row['job_title'],
            'manager_id'    => $row['manager_id'],
        ]);
    }
}
