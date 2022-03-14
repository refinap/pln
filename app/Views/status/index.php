<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-2">Monitoring Realtime SCADA</h1>
            <h2 class="text-center mt-2">Unit Pelaksana Pelayanan Pelanggan (UP3)</h2>

            <?php foreach ($apj as $key => $a) : ?>
                <button class="btn btn-primary mb-1" type="button" data-bs-toggle="collapse" data-bs-target="#data-<?= $key + 1 ?>" aria-expanded="false" aria-controls="data-<?= $key + 1 ?>"> <?= $a->APJ_NAMA ?></button>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="collapse" id="data-<?= $key + 1 ?>">
                            <div class="card card-body">
                                <?php foreach ($a->gi as $g) : ?>
                                    <?php echo $g['GARDU_INDUK_NAMA'] . "<br>"; ?>
                                    <ul>
                                        <?php foreach ($g['incoming'] as $income) : ?>
                                            <li><?php echo $income['NAMA_ALIAS_INCOMING']; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>