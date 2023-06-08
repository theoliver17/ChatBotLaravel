<?php

namespace App\Imports;

use App\Models\Faq;
use Maatwebsite\Excel\Concerns\ToModel;

class FaqsImport implements ToModel
{
    public function model(array $row)
    {
        return new Faq([
            'question' => $row[0],
            'answer' => $row[1],
        ]);
    }
}