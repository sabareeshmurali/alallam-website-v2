<?php

  namespace App\Exports;

  use DB;

  use Maatwebsite\Excel\Concerns\FromCollection;

  use Maatwebsite\Excel\Concerns\WithHeadings;



class ExportUsers implements FromCollection, WithHeadings {




   public function headings(): array {




    // according to users table




    return [

        "User Id",

        "Name",

        "Email Address",

        "Phone No.",

        "Gender",

        "User Type",

        "Registered At"

       ];

    }




   public function collection(){

       $usersData = DB::table('users')->get();
 

       return collect($usersData);

   }

}