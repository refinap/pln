<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-2">Monitoring Realtime SCADA</h1>
            <h2 class="text-center mt-2">Unit Pelaksana Pelayanan Pelanggan (UP3)</h2>


            <?php foreach ($apj as $a) : ?>
                <?php if ($a['APJ_ID'] === '1') : ?>
                    <a class="btn btn-primary mt-1" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                        <?= $a['APJ_NAMA']; ?></a>
                    <h1><?php foreach ($gi as $g) : ?><?php  ?>
                        <?php if ($g['GARDU_INDUK_ID'] === '2') : ?><?php  ?>
                        <div class="btn-group-vertical" class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                <h2 class="fs-1">
                                    <?= $g['GARDU_INDUK_NAMA']; ?></h2>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php foreach ($incoming as $i) : ?><?php  ?>
                        <?php if ($i['INCOMING_ID'] === '4') : ?><?php  ?>
                        <div class="btn-group-horizontal">
                            <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>


                <?php foreach ($cubicle as $c) : ?>
                    <?php if ($c['SCB'] === '1') : ?><?php  ?>
                    <div class="btn-group-vertical">
                        <p class="fs-5"><?= $c['CUBICLE_NAME']; ?></p>
                        <button type="button" class="btn btn-danger">Close</button>
                    </div>
                <?php elseif ($c['SCB'] === '0') : ?>
                    <div class="btn-group-vertical">
                        <p class="fs-5"><?= $c['CUBICLE_NAME']; ?></p>
                        <button type="button" class="btn btn-success">Open</button>
                    </div>
                <?php else : ?>
                    <div class="btn-group-vertical">
                        <p class="fs-5"><?= $c['CUBICLE_NAME']; ?></p>
                        <button type="button" class="btn btn-warning">Warning</button>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>


            <?php foreach ($incoming as $i) : ?>
                <?php if ($i['INCOMING_ID'] === '6') : ?>
                    <div class="btn-group-horizontal">
                        <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php foreach ($cubicle as $c) : ?>
                <?php if ($c['SCB'] === '1') : ?>
                    <div class="btn-group-vertical">
                        <p class="fs-5"><?= $c['CUBICLE_NAME']; ?></p>
                        <button type="button" class="btn btn-danger">Close</button>
                    </div>
                <?php elseif ($c['SCB'] === '0') : ?>
                    <div class="btn-group-vertical">
                        <p class="fs-5"><?= $c['CUBICLE_NAME']; ?></p>
                        <button type="button" class="btn btn-success">Open</button>
                    </div>
                <?php else : ?>
                    <div class="btn-group-vertical">
                        <p class="fs-5"><?= $c['CUBICLE_NAME']; ?></p>
                        <button type="button" class="btn btn-warning">Warning</button>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>



            <?php foreach ($gi as $g) : ?>
                <?php if ($g['GARDU_INDUK_ID'] === '3') : ?><?php  ?>
                <div class="btn-group-vertical" class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        <h2 class="fs-1"><?= $g['GARDU_INDUK_NAMA']; ?></h2>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php foreach ($incoming as $i) : ?><?php  ?>
                <?php if ($i['INCOMING_ID'] === '77') : ?><?php  ?>
                <div class="btn-group-horizontal">
                    <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
                </div>
            <?php endif; ?>

        <?php endforeach; ?>
        <?php foreach ($incoming as $i) : ?><?php  ?>
        <?php if ($i['INCOMING_ID'] === '79') : ?><?php  ?>
        <div class="btn-group-horizontal">
            <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
        </div>
    <?php endif; ?>

<?php endforeach; ?>
<?php foreach ($incoming as $i) : ?><?php  ?>
<?php if ($i['INCOMING_ID'] === '155') : ?><?php  ?>
<div class="btn-group-horizontal">
    <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
</div>
<?php endif; ?>



<?php endforeach; ?>
<?php endif; ?>
<?php endforeach; ?>

                    </div>
                </div>
                <?= $this->endSection(); ?>


                <!-- <div style=" min-height: 120px;"> -->
                <!-- <div class="collapse collapse-vertical" id="collapseWidthExample"> -->
                <!-- <div class="card card-body" style="width: 700px;"> -->
                <!-- <table class="table"> -->
                <!-- <thead> -->
                <!-- <tr> -->
                <!-- <th scope="col">No</th> -->
                <!-- <th scope="col">Kode</th> -->
                <!-- <th scope="col">Nama_GI</th> -->
                <!-- <th scope="col">Nama_trafo</th> -->
                <!-- <th scope="col">Nama_PMT</th> -->
                <!-- <th scope="col">Status</th> -->
                <!-- <th scope="col">Detail</th> -->
                <!-- <th scope="col">Opsi</th> -->
                <!-- </tr> -->
                <!-- </thead> -->
                <!-- <tbody> -->
                <!-- <tr> -->
                <!-- <?php $i = 1; ?> -->
                <!-- </tbody> -->
                <!-- </table> -->
                <!-- </div> -->
                <!-- </div> -->
                <!-- </div> -->