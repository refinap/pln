<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3"> Tambah Data</h2>
            <form action="/status/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="area" class="col-sm-2 col-form-label">Area</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" id="area" name="area" autofocus>
                            <option selected></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gardu_induk" class="col-sm-2 col-form-label">Gardu Induk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="gardu induk" name="gardu_induk">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="trafo" class="col-sm-2 col-form-label">Trafo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="trafo" name="trafo">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">Cubicle</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" name="cubicle">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>