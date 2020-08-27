<?php
include 'proses/koneksi.php';
$id = $_GET['id'];
$cetak = mysqli_query($koneksi, "SELECT * FROM biodata WHERE id_biodata='$id' ");
while ($data = mysqli_fetch_array($cetak)) {


    $content = '

    <h1>BIODATA ANGGOTA</h1>

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis kelamin</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">' . $data["nama"] . '</td>
                <td>' . $data["alamat"] . '</td>
                <td>' . $data["jenis_kelamin"] . '</td>
                <td><img src="upload/biodata/' . $data["foto"] . '"></td>
            </tr>
        </tbody>
    </table>
';
}


require_once "vendors/mpdf/vendor/autoload.php";
$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPage("P", "", "", "", "", "15", "15", "15", "15", "", "", "", "", "", "", "", "", "", "", "", "A4");
$mpdf->SetFont('Arial', 'B', 16);
$mpdf->WriteHTML($content);
$mpdf->Output();
