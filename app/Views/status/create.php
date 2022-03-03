<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data</h2>
            <form action="/status/save" method="post">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Kode" name="Kode" autofocus>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="nama gi" class="col-sm-2 col-form-label">Nama GI</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama gi" name="nama_gi">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="nama trafo" class="col-sm-2 col-form-label">Nama Trafo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama trafo" name="nama_trafo">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="nama PMT" class="col-sm-2 col-form-label">Nama PMT</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama PMT" name="nama_pmt">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>