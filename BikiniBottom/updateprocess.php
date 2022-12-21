<?php

if (isset($_POST['simpan']))
{
    include('connect.php');
    $nama       = $_POST['nama'];
    $nisn       = $_POST['nisn'];
    $gender     = $_POST['gender'];
    $alamat     = $_POST['alamat'];
    $nohp     = $_POST['nohp'];
    $update     = mysqli_query($connect, "update siswa set
    
    nama        = '$nama',
    nisn        = '$nisn',
    gender      = '$gender',
    alamat      = '$alamat',
    nohp        = '$nohp'   
    where nisn  = '$nisn'")
        
    or die($mysqli_error());
    
    if($update)
    {
        echo "<h2>Data Updated Successfully</h2>";
        echo "<script>window.location = 'list.php'</script>";
    }
    
    else
    {
        echo "<h2>Failed to save data</h2>";
        echo "<a href ='update.php ?nisn = ".$nisn."'>kembali</a>";
    } 
}

else
{
        echo "<script>window.history.back()</script>";
}

?>