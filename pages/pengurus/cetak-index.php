<?php
require_once("../../assets/lib/fpdf/fpdf.php");
require_once("../../config/koneksi.php");

class PDF extends FPDF
{
    // Page header
    function Header()
    {
      // Logo
      $this->Image('../../assets/img/logo-depok.jpg',20,10);

    	// Arial bold 15
    	$this->SetFont('Times','B',15);
    	// Move to the right
    	// $this->Cell(60);
    	// Title
        $this->Cell(308,8,'',0,1,'C');
        $this->Cell(308,8,'PEGAWAI KELURAHAN JATIJAJAR, KECAMATAN TAPOS',0,1,'C');
    	$this->Cell(308,8,'KOTA DEPOK',0,1,'C');
    	// Line break
    	$this->Ln(5);

        $this->SetFont('Times','BU',12);
        for ($i=0; $i < 10; $i++) {
            $this->Cell(308,0,'',1,1,'C');
        }

        $this->Ln(1);

        $this->Cell(308,8,'LAPORAN DATA PENGURUS RT & RW',0,1,'C');
        $this->Ln(2);

        $this->SetFont('Times','B',9.5);

        // header tabel
        $this->cell(7,7,'No',1,0,'C');
        $this->cell(27,7,'RT & RW',1,0,'C');

    }

    // Page footer
    function Footer()
    {
    	// Position at 1.5 cm from bottom
    	$this->SetY(-15);
    	// Arial italic 8
    	$this->SetFont('Arial','I',8);
    	// Page number
    	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// ambil dari database
$query = "SELECT *, TIMESTAMPDIFF(YEAR, `tanggal_lahir_warga`, CURDATE()) AS usia_warga FROM warga";
$hasil = mysqli_query($db, $query);
$data_warga = array();
while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}


$pdf = new PDF('L', 'mm', [210, 330]);
$pdf->AliasNbPages();
$pdf->AddPage();

// set font
$pdf->SetFont('Times','',9);

// set penomoran
$nomor = 1;

foreach ($data_warga as $warga) {
    $pdf->cell(7, 7, $nomor++ . '.', 1, 0, 'C');
    $pdf->cell(27, 7, strtoupper($warga['nik_warga']), 1, 0, 'C');
    $pdf->cell(40, 7, substr(strtoupper($warga['nama_warga']),0 , 17), 1, 0, 'L');
    $pdf->cell(35, 7, strtoupper($warga['tempat_lahir_warga']), 1, 0, 'L');
    $pdf->cell(20, 7, ($warga['tanggal_lahir_warga'] != '0000-00-00') ? date('d-m-Y', strtotime($warga['tanggal_lahir_warga'])) : '', 1, 0, 'C');
    $pdf->cell(8, 7, substr(strtoupper($warga['jenis_kelamin_warga']), 0, 1), 1, 0, 'C');
    $pdf->cell(8, 7, strtoupper($warga['usia_warga']), 1, 0, 'C');
    $pdf->cell(50, 7, substr(strtoupper($warga['alamat_warga']), 0, 100), 1, 0, 'L');
    $pdf->cell(7, 7, strtoupper($warga['rt_warga']), 1, 0, 'C');
    $pdf->cell(7, 7, strtoupper($warga['rw_warga']), 1, 0, 'C');
    $pdf->cell(20, 7, strtoupper($warga['agama_warga']), 1, 0, 'C');
    $pdf->cell(26, 7, strtoupper($warga['status_perkawinan_warga']), 1, 0, 'C');
    $pdf->cell(16, 7, strtoupper($warga['pendidikan_terakhir_warga']), 1, 0, 'C');
    $pdf->cell(22, 7, strtoupper($warga['pekerjaan_warga']), 1, 0, 'C');
    $pdf->cell(20, 7, strtoupper($warga['status_warga']), 1, 1, 'C');
}

	$pdf->Ln(10);

$pdf->Output();
?>
