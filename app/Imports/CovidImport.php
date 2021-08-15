<?php

namespace App\Imports;

use App\Models\ClaimCovid;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CovidImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return ClaimCovid::updateOrCreate(['nim_nip' => $row['nim_nip']],[
            'id_user' => null,
            'gambar_hasiltest' => null,
            'gambar_pcr' => null,
            'keterangan' => $row['keterangan'],
            'tanggal_confirmed' => $row['tanggal'],
            'status_verified' => $row['status'],
            'sembuh' => $row['sembuh']
        ]);
    }
}
