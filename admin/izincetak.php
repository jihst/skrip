<?php

    include "../admin/koneksi.php";
    require('../fpdf17/fpdf.php');
    require('../admin/koneksi.php');
//Select the Products you want to show in your PDF file
//$result=mysql_query("SELECT * FROM daily_bbri where date like '%$periode%' ");

    $result = mysqli_query($connection, "SELECT * FROM perizinan left join mahasiswa on perizinan.NIM = mahasiswa.NIM left join matakuliah on perizinan.Kode_Matkul = matakuliah.Kode_Matkul ORDER BY Id_izin ASC") or die(mysql_error());

//Initialize the 3 columns and the total
    $column_nama = "";
    $column_matkul = "";
    $column_tanggal = "";
    $column_alasan = "";
    //$column_bukti = "";



//For each row, add the field to the corresponding column
    while ($row = mysqli_fetch_array($result)) {
        $nama = $row["Nama_Mhs"];
        $matkul = $row["Nama_Matkul"];
        $tanggal = $row["Tanggal"];
        $alasan = $row["Alasan"];
        //$bukti = $row["Bukti_Izin"];



        $column_nama = $column_nama . $nama . "\n";
        $column_matkul = $column_matkul . $matkul . "\n";
        $column_tanggal = $column_tanggal . $tanggal . "\n";
        $column_alasan = $column_alasan . $alasan . "\n";
        //$column_bukti = $column_bukti . $bukti . "\n";



//mysql_close();
//Create a new PDF file
        $pdf = new FPDF('P', 'mm', array(310, 276)); //L For Landscape / P For Portrait
        $pdf->AddPage();
        //$pdf->images('..//gambar//'.$bukti,10,10,10,10,$connection);

        //$pdf->Image('../img/BUHLOG.png', 10, 10, -175);
//$pdf->Image('../images/BBRI.png',190,10,-200);
        $pdf->SetFont('Arial', 'B', 13);
        $pdf->Cell(80);
        $pdf->Cell(95, 10, 'DATA PERIZINAN', 0, 0, 'C');
        $pdf->Ln();
        $pdf->Cell(80);
        $pdf->Cell(95, 10, 'PRODI TEKNOLOGI INFORMASI', 0, 0, 'C');
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
    $pdf->SetX(5);
    $pdf->Cell(60, 8, 'Nama Mahasiswa', 1, 0, 'C', 1);

    $pdf->SetX(65);
    $pdf->Cell(125, 8, 'Nama Matakuliah', 1, 0, 'C', 1);

    $pdf->SetX(190);
    $pdf->Cell(40, 8, 'Tanggal Izin', 1, 0, 'C', 1);

    $pdf->SetX(230);
    $pdf->Cell(40, 8, 'Alasan', 1, 0, 'C', 1);

//    $pdf->SetX(270);
//    $pdf->Cell(30, 8, 'Bukti Izin', 1, 0, 'C', 1);

    $pdf->Ln();

//Table position, under Fields Name
    $Y_Table_Position = 38;

//Now show the columns
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetY($Y_Table_Position);
    $pdf->SetX(5);
    $pdf->MultiCell(60, 6, $column_nama, 1, 'L');

    $pdf->SetY($Y_Table_Position);
    $pdf->SetX(65);
    $pdf->MultiCell(125, 6, $column_matkul, 1, 'L');

    $pdf->SetY($Y_Table_Position);
    $pdf->SetX(190);
    $pdf->MultiCell(40, 6, $column_tanggal, 1, 'L');

    $pdf->SetY($Y_Table_Position);
    $pdf->SetX(230);
    $pdf->MultiCell(40, 6, $column_alasan, 1, 'L');

//    $pdf->SetY($Y_Table_Position);
//    $pdf->SetX(270);
//    $pdf->MultiCell(30, 6, $column_bukti, 1, 'L');

    $pdf->Output();

?>