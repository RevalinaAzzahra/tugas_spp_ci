<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>

  <?php $this->load->view("admin/_partials/navbar.php") ?>

  <div class="container-fluid">
    <div class="row">

      <?php $this->load->view("admin/_partials/sidebar.php") ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Siswa</h1>
        </div>

        <section class="content">
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa fa-plus" >+Tambah Data</button>
             <br>
             <br>

        <table class="table table-bordered table-responsive">
          <tr>
            <th>NISN</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>ID KELAS</th>
            <th>Alamat</th>
            <th>No telepon</th>
            <th>Id spp</th>
            <th>Id Login</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
          <?php
          foreach ($siswa as $DataSiswa) :
          ?>
            <tr>
              <td><?= $DataSiswa['nisn'] ?></td>
              <td><?= $DataSiswa['nis'] ?></td>
              <td><?= $DataSiswa['nama'] ?></td>
              <td><?= $DataSiswa['id_kelas'] ?></td>
              <td><?= $DataSiswa['alamat'] ?></td>
              <td><?= $DataSiswa['no_telp'] ?></td>
              <td><?= $DataSiswa['id_spp'] ?></td>
              <td><?= $DataSiswa['id_login'] ?></td>
              <td>
              
                <img src="<?= $DataSiswa['image'] ?>" style="width: 50%;" alt="">
              </td>
              
             
              <td> <a href="<?= base_url() ?>index.php/admin/siswa/edit" >Edit</a>  <a href="">Delete</a>  </td>
          </tr>
            
          <?php
          endforeach;
          ?>
        </table>

        </section>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="exampleModalLabel">Form Input Data Siswa</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form  method="post"action=" <?php echo base_url().'siswa/tambah_aksi'  ?>">


<div class="form-group">
  <label >NISN</label>
          <input type="text" name="nisn" class="form-control">
</div>

<div class="form-group">
  <label >NIS</label>
          <input type="text" name="nis" class="form-control">
</div>

<div class="form-group">
  <label >Nama Siswa</label>
          <input type="text" name="nama" class="form-control">
</div>

<div class="form-group">
  <label >Id Kelas</label>
          <input type="text" name="id kelas" class="form-control">
</div>

<div class="form-group">
  <label >Alamat</label>
          <input type="text" name="alamat" class="form-control">
</div>

<div class="form-group">
  <label >No Telepon</label>
          <input type="text" name="no telp" class="form-control">
</div>

<div class="form-group">
  <label >Id Spp</label>
          <input type="text" name="id spp" class="form-control">
</div>

<div class="form-group">
  <label >Id Login</label>
          <input type="text" name="id login" class="form-control">
</div>

<br>


<button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
<button type="submit" class="btn btn-primary">Simpan</button>

</form>
</div>

</div>
</div>
</div>

      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>