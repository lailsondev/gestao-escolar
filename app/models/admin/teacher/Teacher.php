<?php

namespace App\Models\admin\teacher;

use AcarajeTech\DataSave\DataSave;

class Teacher extends DataSave
{
    protected string $table = 'teachers';
    private string $data = '';

    public function isGreaterThanOne(array $request): bool
    {
        return (count($request) > 1) ? true : false;
    }

    public function iteratorData(array $request): string
    {
        foreach ($request['discipline'] as $discipline) {
            $this->data .= "{$discipline},";
        }

        $this->data= substr_replace(trim($this->data), '', -1);

        return $this->data;
    }

}