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
    	$this->SetFont('Times','B',12);
    	// Move to the right
    	// $this->Cell(60);
    	// Title
        $this->Cell(200,8,'',0,1,'C');
        $this->Cell(200,8,'PEGAWAI KELURAHAN JATIJAJAR, KECAMATAN TAPOS',0,1,'C');
    	$this->Cell(200,8,'KOTA DEPOK',0,1,'C');
    	// Line break
    	$this->Ln(5);

        $this->SetFont('Times','BU',12);
        for ($i=0; $i < 10; $i++) {
            $this->Cell(308,0,'',1,1,'C');
        }

        $this->Ln(1);

        $this->Cell(200,8,'DATA PENGURUS RT & RW',0,1,'C');
        $this->Ln(2);

        $this->SetFont('Times','B',9.5);
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

// ambil dari url
$get_id_pengurus = $_GET['id_pengurus'];
// ambil dari database
$query = "SELECT * FROM pengurus WHERE id_pengurus = $get_id_pengurus";
$hasil = mysqli_query($db, $query);
$data_pengurus = array();
while ($row = mysqli_fetch_assoc($hasil)) {
  $data_pengurus[] = $row;
}


$pdf = new PDF('P', 'mm', [210, 330]);
$pdf->AliasNbPages();
$pdf->AddPage();

// set font
$pdf->SetFont('Times','',12);

// set penomoran
$nomor = 1;
$pdf->cell(50,7,'RT & RW',0,0,'L');
$pdf->cell(2,7,':',0,0,'L');
$pdf->cell(80, 7, strtoupper($data_pengurus[0]['rt_rw']), 0, 1, 'L');

$pdf->cell(50,7,'Nama Ketua RW',0,0,'L');
$pdf->cell(2,7,':',0,0,'L');
$pdf->cell(80, 7, substr(strtoupper($data_pengurus[0]['nama_ketua_rw']),0 , 17), 0, 1, 'L');

$pdf->cell(50,7,'Nama Wakil Ketua RW',0,0,'L');
$pdf->cell(2,7,':',0,0,'L');
$pdf->cell(80, 7, strtoupper($data_pengurus[0]['nama_wakil_rw']), 0, 1, 'L');

$pdf->cell(50,7,'Nama Sekretaris RW',0,0,'L');
$pdf->cell(2,7,':',0,0,'L');
$pdf->cell(80, 7, substr(strtoupper($data_pengurus[0]['nama_sekretaris_rw']), 0, 17), 0, 1, 'L');

$pdf->cell(50,7,'Nama Wakil Sekretaris RW',0,0,'L');
$pdf->cell(2,7,':',0,0,'L');
$pdf->cell(80, 7, substr(strtoupper($data_pengurus[0]['nama_wakil_sekretaris_rw']), 0, 17), 0, 1, 'L');

$pdf->cell(50,7,'Nama Bendahara RW',0,0,'L');
$pdf->cell(2,7,':',0,0,'L');
$pdf->cell(80, 7, substr(strtoupper($data_pengurus[0]['nama_bendahara_rw']), 0, 20), 0, 1, 'L');

$pdf->cell(50,7,'Nama Ketua RT',0,0,'L');
$pdf->cell(2,7,':',0,0,'L');
$pdf->cell(80, 7, substr(strtoupper($data_pengurus[0]['nama_ketua_rt']), 0, 20), 0, 1, 'L');

$pdf->cell(50,7,'Nama Wakil Ketua RT',0,0,'L');
$pdf->cell(2,7,':',0,0,'L');
$pdf->cell(80, 7, substr(strtoupper($data_pengurus[0]['nama_wakil_rt']), 0, 20), 0, 1, 'L');

$pdf->cell(50,7,'Nama Sekretaris RT',0,0,'L');
$pdf->cell(2,7,':',0,0,'L');
$pdf->cell(80, 7, substr(strtoupper($data_pengurus[0]['nama_sekretaris_rt']), 0, 20), 0, 1, 'L');

$pdf->cell(50,7,'Nama Wakil Sekretaris RT',0,0,'L');
$pdf->cell(2,7,':',0,0,'L');
$pdf->cell(80, 7, substr(strtoupper($data_pengurus[0]['nama_wakil_sekretaris_rt']), 0, 20), 0, 1, 'L');

$pdf->cell(50,7,'Nama Bendahara RT',0,0,'L');
$pdf->cell(2,7,':',0,0,'L');
$pdf->cell(80, 7, substr(strtoupper($data_pengurus[0]['nama_bendahara_rt']), 0, 20), 0, 1, 'L');

	$pdf->Ln(10);

$pdf->Output();
?>