<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Delete - BikiniBottom</title>
        <link rel="icon" href="./assets/images/bb.jpg">
    </head>
    
    <?php
        if(isset($_GET['nisn']))
        {
            include('connect.php');
            $nisn    = $_GET['nisn'];
            $cek    = mysqli_query($connect, "select nisn from siswa where nisn = '$nisn'") or die($mysqli_error());
            
            if(mysqli_num_rows($cek)==0)
            {
                echo "<script>window.history.back()</script>";
            }
            else
            {
                $del = mysqli_query($connect, "delete from siswa where nisn = '$nisn'");
                if ($del)
                {
                    echo "<h3>Data Deleted Successfully</h3>";   
                    echo "<script>window.location = 'list.php';</script>";    
                }
                else
                {
                    echo "<h2>Failed to Delete Data</h2>";
                    echo "<a href = 'list.php'>Kembali </a>";
                }
            }
        }
    
        else
        {
            echo "<script>window.history.back()</script>";
        }
    ?>
    
    <body>
        
    </body>
</html>