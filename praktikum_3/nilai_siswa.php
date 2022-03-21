<?php
// Paling Atas File

    // fungsi nilai 
    require_once 'libfungsi.php';
    $_nilai = 100 ; 
    $hasil_ujian = kelulusan($_nilai);
    echo 'DINYATAKAN'.' '. $hasil_ujian;
    
    echo "<br>";

    // fungsi grade
    $_grade = grade($_nilai);
    echo 'GRADE SISWA ADALAH'. ' ' . $_grade;
 
    echo "<br>";

    // fungsi predikat
    $_predikat = predikat($_grade);
    echo 'Predikat Yang Didapatkan Siswa :'. ' '. $_predikat;

?>

<br>

<br>
<br>



<!-- 1) Mandiri: Modifikasi file nilai_siswa.php -->
<?php
 $Nilai_Siswa = 70;

 if ($Nilai_Siswa > 60  ) {
     echo "SISWA DINYATAKAN LULUS";
 } else {
     echo "SISWA BELUM BISA DINYATAKAN LULUS";
 }

?>

<br>
<!-- 2) Mandiri: Grade Nilai -->
<?php
    $nilai = 95;
    
    if ($nilai >= 85 and $nilai <= 100) {
        $grade = "A";
    } elseif ($nilai >= 70 and $nilai <= 84){
        $grade = "B";
    } elseif ($nilai >= 56 and $nilai <= 69){
        $grade = "C";
    } elseif ($nilai >= 36 and $nilai <= 55){
        $grade = "D";
    } elseif ($nilai >= 0 and $nilai <=35){
        $grade = "E";
    } else {
        $grade = "I";
    }

    echo $grade;
?>
<br>

<!-- 3) Mandiri: Predikat Nilai -->
<?php
    $grade = 'A';

    // Cara 2
    $grade = 'A';
    switch ($grade) {
        case 'A':
            $predikat = "Sangat Memuaskan";
            break;
        case 'B':
            $predikat = "Memuaskan";
            break;
        case 'C':
            $predikat = "Cukup";
            break;
        case 'D':
            $predikat = "Kurang";
            break;
        case 'E':
            $predikat = "Sangat Kurang";
            break;
        case 'I':
            $predikat = "Tidak Ada";
            break;
        default:
            $predikat = "GRADE TIDAK TERDETEKSI";
            break;
    }

    echo $predikat;
?>