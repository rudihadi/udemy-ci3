<?php $this->load->view('includes/header'); ?>

<br>
<br>



<div class="container">
    <!-- Modal Start-->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Nama Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- From Start-->
                    <form method="post" action="<?= site_url('CrudController/create') ?>">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                            <input type="text" class="form-control" name="nama_depan" aria-describedby="emailHelp" placeholder="Nama Depan">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control" name="nama_belakang" aria-describedby="emailHelp" placeholder="Nama Belakang">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kontak</label>
                            <input type="text" class="form-control" name="kontak" aria-describedby="emailHelp" placeholder="Kontak">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Biodata</label>
                            <input type="text" class="form-control" name="biodata" aria-describedby="emailHelp" placeholder="Biodata">
                        </div>

                        <button type="submit" class="btn btn-primary" value="save">Submit</button>
                    </form>
                    <!-- Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <br><br>

    <!-- Table -->
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Nama Depan</th>
                <th scope="col">Nama Belakang</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Kontak</th>
                <th scope="col">Biodata</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Foreach -->
            <?php foreach ($result as $row) { ?>
                <tr>
                    <th scope="row"><?= $row->id; ?></th>
                    <td><?= $row->nama_depan; ?></td>
                    <td><?= $row->nama_belakang; ?></td>
                    <td><?= $row->tanggal_lahir; ?></td>
                    <td><?= $row->kontak; ?></td>
                    <td><?= $row->biodata; ?></td>
                    <td>
                        <a href="<?php echo site_url('CrudController/edit'); ?>/<?php echo $row->id; ?>">
                            <button type="button" class="btn btn-warning">Ubah</button>
                        </a>
                        <a href="<?php echo site_url('CrudController/delete'); ?>/<?php echo $row->id; ?>">
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </a>
                    </td>
                <?php } ?>
        </tbody>
    </table>
</div>
</body>

</html>