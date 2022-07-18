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
      <a class="nav-link active" aria-current="page" href="#">Data Mahasiswa</a>
      <a class="nav-link" href="data.php">
        Data
        <span class="badge bg-light text-dark rounded-pill align-text-bottom">27</span>
        <a class="nav-link" href="f_insert.php">Tambah Data</a>
      </a>
    </nav>
  </div>

  <main class="container">
    <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
      <div class="lh-1">
        <h1 class="h6 mb-0 text-white lh-1">Data Mahasiswa</h1>
      </div>
    </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
      <h6 class="border-bottom pb-2">Recent Data</h6>
      <a href="f_insert.php"><button type="button" class="btn btn-primary">Add</button></a>
      <div class="bd-example-snippet bd-code-snippet">
        <div class="bd-example">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $nomor=1;
            $ambil=$koneksi->query("SELECT * FROM datamhs");
            while($d = $ambil -> fetch_assoc()){ ?>
              <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['tl']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                  <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn-warning btn">
                    <img src="https://cdn-icons-png.flaticon.com/512/4770/4770778.png" class="iconnn"></a>
                  <a href="delete.php?id=<?php echo $d['id']; ?>" class="btn-danger btn">
                    <img src="https://cdn-icons-png.flaticon.com/512/3096/3096687.png" class="iconnn"></a>
                </td>
              </tr>
              <?php $nomor++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>

  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-muted">&copy; 2022 Company, Inc</p>
      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="data.php" class="nav-link px-2 text-muted">Data</a></li>
      </ul>
    </footer>
  </div>
  <script src="assets/main.js"></script>
</body>

</html>

<script src="assets/js/bootstrap.bundle.min.js"></script>


<!--
        Edit Modal
        <div class="modal fade" id="editmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"      aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post">
                <div class="mb-3">
                  <label class="form-label">Nama</label>
                  <input type="text" class="form-control" id="no">  
                </div>
                <div class="mb-3">
                  <label class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="no">  
                </div>
                <div class="mb-3">
                  <label class="form-label">Alamat</label>
                  <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat" required></textarea>  
                </div>
                <div class="modal-footer">
              <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button name="save" class="btn btn-primary">Submit</button>
            </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    -->