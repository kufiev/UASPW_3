<?php

    if(isset($_POST['add']))
    {
        include_once 'connect.php';
        $nama       = $_POST['nama'];
        $nisn       = $_POST['nisn'];
        $gender     = $_POST['gender'];
        $alamat     = $_POST['alamat'];
        $nohp     = $_POST['nohp'];
        
        $input  = mysqli_query($connect, "insert into siswa values
        ('$nama', '$nisn', '$gender', '$alamat', '$nohp')");
        
        if($input)
        {
            echo "<h3>Data added successfuly</h3>";
            echo "<script>window.location='list.php'</script>";
        }
        else
        {
            echo "Failed to add data";
            echo "<a href = 'add.php'>kembali</a>";
        }
        
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }


?>