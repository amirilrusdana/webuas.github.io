<?php 
include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.98.0">
  <title> Data Portfolio Amiril </title>

<!-- Link Css -->

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/style.css" rel="stylesheet">

</head>
<body class="bg-light">
    
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Portfolio Amiril</a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="data.php">Data</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="nav-scroller bg-body shadow-sm">
  <nav class="nav" aria-label="Secondary navigation">
    <a class="nav-link active" aria-current="page" href="data.php">Data Mahasiswa</a>
    <a class="nav-link">
      Edit data
    </a>
  </nav>
</div>

<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Edit Data Mahasiswa</h1>
    </div>
  </div>
<?php
  include 'koneksi.php' ;
  $id = $_GET['id'];
  $data = mysqli_query($koneksi, "select * from datamhs where id='$id'");
  while($d = mysqli_fetch_array($data)){
?>
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2">Edit Data</h6>
    <form action="update.php" method="post">
      <div class="mb-3">
        <label class="form-label">ID</label>
        <input type="text" class="form-control" name="id" value="<?php echo $d['id']; ?>" readonly='true'>  
      </div>
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>">  
      </div>
      <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tl" value="<?php echo $d['tl']; ?>">  
      </div>
      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat" required><?php echo $d['alamat']; ?></textarea>  
      </div>
      <div class="modal-footer">
        <a href="data.php"><button type="reset" class="btn btn-secondary">Cancel</button></a>&nbsp;
        <button name="save" class="btn btn-primary">Edit</button>
      </div>
    </form>
    <?php
    }
    ?>
  </div>
</main>

<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2022 Company, Inc</p>
    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Data</a></li>
    </ul>
  </footer>
</div>
      <script src="assets/main.js"></script>
  </body>
</html>

    <script src="assets/js/bootstrap.bundle.min.js"></script>