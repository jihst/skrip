<?php

    include "../admin/koneksi.php";
    require('../fpdf17/fpdf.php');
    require('../admin/koneksi.php');
//Select the Products you want to show in your PDF file
//$result=mysql_query("SELECT * FROM daily_bbri where date like '%$periode%' ");

    $result = mysqli_query($connection, "SELECT matakuliah.Kode_Matkul, matakuliah.Nama_Matkul, mahasiswa.NIM, mahasiswa.Nama_Mhs, perizinan.Tanggal, perizinan.Alasan, perizinan.Bukti_Izin, COUNT(perizinan.Kode_Matkul) AS total FROM perizinan "
                                        . "LEFT JOIN matakuliah on perizinan.Kode_Matkul = matakuliah.Kode_Matkul LEFT JOIN mahasiswa on perizinan.NIM = mahasiswa.NIM  GROUP BY Kode_Matkul, NIM") or die(mysql_error());

//Initialize the 3 columns and the total
    $column_nama = "";
    $column_matkul = "";
    $column_totalizin = "";



//For each row, add the field to the corresponding column
    while ($row = mysqli_fetch_array($result)) {
        $nama = $row["Nama_Mhs"];
        $matkul = $row["Nama_Matkul"];
        $total = $row["total"];



        $column_nama = $column_nama . $nama . "\n";
        $column_matkul = $column_matkul . $matkul . "\n";
        $column_totalizin = $column_totalizin . $total . "\n";



//mysql_close();
//Create a new PDF file
        $pdf = new FPDF('P', 'mm', array(250,235)); //L For Landscape / P For Portrait
        $pdf->AddPage();
        $pdf->SetMargins(1.5,1,1); 
        
        
        //$pdf->Image('../img/BUHLOG.png', 10, 10, -175);
//$pdf->Image('../images/BBRI.png',190,10,-200);
        $pdf->SetFont('Arial', 'B', 13);
        $pdf->Cell(35);
        $pdf->Cell(150, 10, 'DATA PERIZINAN', 0, 0, 'C');
        $pdf->Ln();
        $pdf->Cell(43);
        $pdf->Cell(150, 10, 'PRODI TEKNOLOGI INFORMASI', 0, 0, 'C');
        $pdf->Ln();
    }

//Fields Name position
    $Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
    $pdf->SetFillColor(110, 180, 230);
//Bold Font for Field Name
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetY($Y_Fields_Name_position);
    $pdf->SetX(20);
    $pdf->Cell(50, 8, 'Nama Mahasiswa', 1, 0, 'C', 1);

    $pdf->SetX(70);
    $pdf->Cell(100, 8, 'Nama Matakuliah', 1, 0, 'C', 1);

    $pdf->SetX(170);
    $pdf->Cell(40, 8, 'Total Izin', 1, 0, 'C', 1);

    $pdf->Ln();

//Table position, under Fields Name
    $Y_Table_Position = 38;

//Now show the columns
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetY($Y_Table_Position);
    $pdf->SetX(20);
    $pdf->MultiCell(50, 6, $column_nama, 1, 'L');

    $pdf->SetY($Y_Table_Position);
    $pdf->SetX(70);
    $pdf->MultiCell(100, 6, $column_matkul, 1, 'L');

    $pdf->SetY($Y_Table_Position);
    $pdf->SetX(170);
    $pdf->MultiCell(40, 6, $column_totalizin, 1, 'L');
    
    $pdf->Output();

?>