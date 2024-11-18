<?php

  namespace App\Exports;

  use DB;

  use Maatwebsite\Excel\Concerns\FromCollection;

  use Maatwebsite\Excel\Concerns\WithHeadings;



class ExportReport implements FromCollection{

protected $data;
public function __construct($data)
{
     $this->data = $data;
}

   public function collection(){ return collect($this->data); }

}