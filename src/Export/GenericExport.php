<?php

namespace Yajra\DataTables\Export;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class GenericExport implements FromCollection {
    use Exportable;

    protected $data = [];

    public function collection()
    {
        return collect($this->data);
    }

    public function setArrayData(array $data) {
        $this->data = $data;
    }
}