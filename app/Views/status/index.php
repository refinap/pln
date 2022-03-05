<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-2">Monitoring Realtime SCADA</h1>
            <h2 class="text-center mt-2">Unit Pelaksana Pelayanan Pelanggan (UP3)</h2>

            <?php foreach ($apj as $a) : ?>
                <a class="btn btn-primary mt-1" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <?= $a['APJ_NAMA']; ?></a>
            <?php endforeach; ?>

            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <h2><?php foreach ($gi as $g) : ?>
                            <a class="btn btn-primary mt-1" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <?= $g['GARDU_INDUK_NAMA']; ?></a>
                        <?php endforeach; ?>
                    </h2>
                </div>
            </div>


            <div style="min-height: 120px;">
                <div class="collapse collapse-vertical" id="collapseWidthExample">
                    <div class="card card-body" style="width: 700px;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama_GI</th>
                                    <th scope="col">Nama_trafo</th>
                                    <th scope="col">Nama_PMT</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $i = 1; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>