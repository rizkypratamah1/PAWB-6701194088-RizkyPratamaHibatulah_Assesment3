<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <?php if (session()->get('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Berhasil <?php session()->getFlashdata('message'); ?></strong>
        </div>
        <script>
            $(".alert").alert();
        </script>
    <?php endif; ?>



    <div class="card">
        <div class="card-body">

            <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                <i class="fa fa-plus"> Tambah Data Akun</i></button>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Akun</th>
                        <th>Email</th>
                        <th>Nama Lengkap</th>
                        <th>Usia</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat Lengkap</th>

                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($daftar as $row) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['usia'] ?></td>
                            <td><?= $row['jenis_kelamin'] ?></td>
                            <td><?= $row['alamat'] ?></td>




                            <td>
                                <button type="button" data-toggle="modal" data-target="#modalUbah" class="btn btn-sm btn-warning" id="btn-edit" data-id="<?= $row['id']; ?>" data-email="<?= $row['email']; ?>" data-nama="<?= $row['nama']; ?>" data-usia="<?= $row['usia']; ?>" data-jenis_kelamin="<?= $row['jenis_kelamin']; ?>" data-alamat="<?= $row['alamat']; ?>"><i class=" fa fa-edit"></i></button>
                                <button type="button" data-toggle="modal" data-target="#modalHapus" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button>
                            </td>

                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>

            </table>
        </div>
    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<div class="modal fade" id="modalTambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">Tambah <?= $judul; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('daftar/tambah'); ?>" method="post">
                    <div class="form-group mb-0">
                        <label for="id"></label>
                        <input type="text" name="id" id="id" class="form-control" placeholder="Masukan Id">
                    </div>
                    <div class="form-group mb-0">
                        <label for="email"> </label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email">
                    </div>
                    <div class="form-group mb-0">
                        <label for="nama"></label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan nama lengkap">
                    </div>
                    <div class="form-group mb-0">
                        <label for="usia"></label>
                        <input type="text" name="usia" id="usia" class="form-control" placeholder="Masukan usia ">
                    </div>
                    <div class="form-group mb-0">
                        <label for="jenis_kelamin"></label>
                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="Masukan jenis_kelamin ">
                    </div>
                    <div class="form-group mb-0">
                        <label for="alamat"></label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan alamat lengkap">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="tambah" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modalHapus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                Apakah anda ingin menghapus Akun ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="/daftar/hapus/<?= $row['id']; ?>" class="btn btn-primary"> Ya</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalUbah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah <?= $judul; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('daftar/ubah'); ?>" method="post">

                    <div class="form-group mb-0">
                        <label for="id"></label>
                        <input type="text" name="id" id="id" class="form-control" placeholder="Masukan Id Akun" value=<?= $row['id'] ?>>
                    </div>
                    <div class="form-group mb-0">
                        <label for="email"> </label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email" value=<?= $row['email'] ?>>
                    </div>
                    <div class="form-group mb-0">
                        <label for="nama"> </label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Lengkap" value=<?= $row['nama'] ?>>
                    </div>
                    <div class="form-group mb-0">
                        <label for="usia"> </label>
                        <input type="text" name="usia" id="usia" class="form-control" placeholder="Masukan Usia" value=<?= $row['usia'] ?>>
                    </div>
                    <div class="form-group mb-0">
                        <label for="jenis_kelamin"> </label>
                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="Masukan Jenis Kelamin" value=<?= $row['jenis_kelamin'] ?>>
                    </div>
                    <div class="form-group mb-0">
                        <label for="alamat"> </label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat Lengkap" value=<?= $row['alamat'] ?>>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>