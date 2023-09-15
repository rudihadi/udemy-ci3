<?php $this->load->view('includes/header'); ?>

<br><br>

<body>
    <div class="container">
        <!-- From Start-->
        <form method="post" action="<?php echo site_url('CrudController/update'); ?>/<?php echo $row->id; ?>">
            <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                <input type="text" class="form-control" name="nama_depan" value="<?php echo $row->nama_depan; ?>" aria-describedby="emailHelp" placeholder="Nama Depan">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                <input type="text" class="form-control" name="nama_belakang" value="<?php echo $row->nama_belakang; ?>" aria-describedby="emailHelp" placeholder="Nama Belakang">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $row->tanggal_lahir; ?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kontak</label>
                <input type="text" class="form-control" name="kontak" value="<?php echo $row->kontak; ?>" aria-describedby="emailHelp" placeholder="Kontak">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Biodata</label>
                <input type="text" class="form-control" name="biodata" value="<?php echo $row->biodata; ?>" aria-describedby="emailHelp" placeholder="Biodata">
            </div>

            <button type="submit" class="btn btn-primary" value="save">Submit</button>
            <a href="<?= site_url('CrudController'); ?>">
                <button type="button" class="btn btn-danger">Cancel</button>
            </a>
        </form>
        <!-- Form End -->
    </div>
</body>

</html>