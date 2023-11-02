<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Welcome extends BaseController
{
    public function index()
    {
        echo 'Ini adalah halaman utama';
    }
    public function about()
    {
        echo 'Ini adalah halaman tentang kami';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Mahasiswa</h1>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Program Studi</th>
    </tr>
    <tr>
        <td>1</td>
        <td>John</td>
        <td>123456</td>
        <td>Teknik Informatika</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Barudak</td>
        <td>789012</td>
        <td>Sistem Informasi</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Johnson</td>
        <td>345678</td>
        <td>Teknik Elektro</td>
    </tr>
</table>
</body>
</html>
