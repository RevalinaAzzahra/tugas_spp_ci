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
                    <h1 class="h2">SPP</h1>
                </div>

                <section class="content">
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa fa-plus" >+Tambah Data</button>
             <br>
             <br>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>Id spp</th>
                        <th>Nominal</th>
                        <th>Tahun</th>
                        <th>Action</th>
                       
                    </tr>
                    <?php
                    foreach ($spp as $DataSpp) :
                    ?>
                        <tr>
                            <td><?= $DataSpp['id_spp'] ?></td>
                            <td><?= $DataSpp['nominal'] ?></td>
                            <td><?= $DataSpp['tahun'] ?> </td>
                            <td> <a href="<?= base_url() ?>index.php/admin/spp/edit" >Edit</a>  <a href="">Delete</a>  </td>
                        </td> 
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
<form  method="post"action=" <?php echo base_url().'spp/tambah_aksi'  ?>">


<div class="form-group">
  <label >Id Spp</label>
          <input type="text" name="id spp" class="form-control">
</div>

<div class="form-group">
  <label >Nominal</label>
          <input type="text" name="nominal" class="form-control">
</div>

<div class="form-group">
  <label >Tahun</label>
          <input type="text" name="tahun" class="form-control">
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