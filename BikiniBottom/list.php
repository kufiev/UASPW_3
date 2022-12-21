<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bikini Bottom</title>
    <link rel="icon" href="./assets/images/bb.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style1.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- Navbar !-->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="list.php">Bikini Bottom</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#facility">Facility</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#siswa">Students List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
            </div>
        </div>
    </nav>

    <section id="siswa" class="section-padding">
            <div class="container">
                <div class="col-lg-12 text-center mt-5 mb-5" data-aos="fade-down" data-aos-delay="150">
                    <h3 class="display-4 fw-semibold">Students List</h3>
                    <a href="add.php"><h4>Add Students</h4></a>
                    <table class="table table-hover" style="text-align: center">
                    <thead class="table-dark">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Gender</th>
                        <th>Alamat</th>
                        <th>No. Hp</th>
                        <th>Opsi</th>
                    </thead>
                </div>
                
    <!--Data Siswa-->
                
                <?php
                  include_once 'connect.php';
                    $no=1;
                    $data=mysqli_query($connect, "select * from siswa");
                    while ($d=mysqli_fetch_array($data)){
                    ?>
                
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['nisn']; ?></td>
                        <td><?php echo $d['gender']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['nohp']; ?></td>
                        <td>
                            <a href="update.php ?nisn=<?php echo $d['nisn'];?>">update</a>
                            <a href="delete.php ?nisn=<?php echo $d['nisn'];?>">delete</a>
                        </td>
                    </tr>
                    
                    <?php
                }
                ?>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>