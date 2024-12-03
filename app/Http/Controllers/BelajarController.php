<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BelajarController extends Controller
{
    public function enkripsi(Request $request)
    {
        $string = "Saya suka makan nasi goreng";
        $enkripsi = Crypt::encryptString($string);
        $dekripsi = Crypt::decryptString($enkripsi);

        echo "String : " . $string . "<br><br>";
        echo "Hasil Enkripsi : " . $enkripsi . "<br><br>";
        echo "Hasil Dekripsi : " . $dekripsi . "<br><br>";

        $params = [
            'nama' => 'Zahlul Fuadi',
            'hobi' => 'Membaca',
            'makanan_favortr' => 'Nasi Goreng',
        ];

        $params = Crypt::encrypt($params);

        echo "<a href=" . route('enkripsi-detail', ['params' => $params]) . ">Klik Disini</a>";
    }

    public function enkripsi_detail(Request $request, $params)
    {
        $params = Crypt::decrypt($params);
        dd($params);
    }
}
