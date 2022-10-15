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
                    <h1 class="h2">Kelas</h1>
                </div>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>Id kelas</th>
                        <th>Nama Kelas</th>
                        <th>Kompetensi keahlian</th>
                        <th>Action</th>

                    </tr>
                    <?php
                    foreach ($kelas as $DataKelas) :
                    ?>
                        <tr>
                            <td><?= $DataKelas['id_kelas'] ?></td>
                            <td><?= $DataKelas['nama_kelas'] ?></td>
                            <td><?= $DataKelas['nama_kk'] ?></td>
                            <td> <a href="" >Edit</a>  <a href="">Delete</a>  </td>

                            <!-- <td><a href="" class="btn btn-danger">Hapus</a>
                            <a href="" class="btn btn-warning">Detail</a>
                            <a href="" class="btn btn-primary">Ubah</a>
                        </td> -->
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </table>

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>