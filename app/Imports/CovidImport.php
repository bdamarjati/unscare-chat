<?php

namespace App\Imports;

use App\Models\ClaimCovid;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use App\Models\UserData;
use App\Models\User;
// use App\Models\ClaimCovid;
use App\Models\ClaimCovidHistory;

class CovidImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // if($row->status)
        ClaimCovid::updateOrCreate(['nim_nip' => $row['nim_nip']],[
            'id_user' => null,
            'gambar_hasiltest' => null,
            'gambar_pcr' => null,
            'keterangan' => $row['keterangan'],
            'tanggal_confirmed' => $row['tanggal'],
            'status_verified' => $row['status'],
            'sembuh' => $row['sembuh']
        ]);

        return ClaimCovidHistory::updateOrCreate(['nim_nip' => $row['nim_nip']],[
            // 'id_user' => null,
            // 'gambar_hasiltest' => null,
            // 'gambar_pcr' => null,
            // 'keterangan' => $row['keterangan'],
            // 'tanggal_confirmed' => $row['tanggal'],
            // 'status_verified' => $row['status'],
            'sembuh' => $row['sembuh']
        ]);
    }
}
