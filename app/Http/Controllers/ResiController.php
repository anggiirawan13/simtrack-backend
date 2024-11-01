<?php

namespace App\Http\Controllers;

class ResiController extends Controller
{
    public function show($noResi)
    {
        $data = [
            '12345' => [
                'noResi' => '12345',
                'kotaTujuan' => 'Jakarta',
                'perusahaan' => 'PT. Anugrah Express',
                'tanggalDiterima' => '2023-11-01',
                'status' => 'Delivered',
            ],
            '67890' => [
                'noResi' => '67890',
                'kotaTujuan' => 'Bandung',
                'perusahaan' => 'PT. Fast Delivery',
                'tanggalDiterima' => '2023-10-15',
                'status' => 'In Transit',
            ],
        ];

        $resi = $data[$noResi] ?? [
            'noResi' => $noResi,
            'kotaTujuan' => 'Surabaya',
            'perusahaan' => 'PT. ABC',
            'tanggalDiterima' => now()->format('d-m-Y'),
            'status' => 'In Transit',
        ];

        return view('resi.show', compact('resi'));
    }
}
