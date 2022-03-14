<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-2">Monitoring Realtime SCADA</h1>
            <h2 class="text-center mt-2">Unit Pelaksana Pelayanan Pelanggan (UP3)</h2>

            <?php foreach ($apj as $a) : ?>
                <button class="btn btn-primary mb-1"> <?= $a->APJ_NAMA ?></button>
                <br>
                <?php foreach ($a->gi as $g) : ?>
                    <?php echo $g['GARDU_INDUK_NAMA'] . "<br>"; ?>

                    <?php foreach ($gi as $g) : ?>
                        <?php foreach ($g->incoming as $i) : ?>
                            <?php echo $i['NAMA_ALIAS_INCOMING'] . "<br>"; ?>


                            <!-- // iki agre di lengkappi :) -->
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>

            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>