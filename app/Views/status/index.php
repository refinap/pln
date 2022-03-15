<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
< <div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-2">Monitoring Realtime SCADA</h1>
            <h2 class="text-center mt-2">Unit Pelaksana Pelayanan Pelanggan (UP3)</h2>
            <?php foreach ($apj as $key => $a) : ?>
                <button class="btn btn-primary mb-1" type="button" data-bs-toggle="collapse" data-bs-target="#data-<?= $key + 1 ?>" aria-expanded="false" aria-controls="data-<?= $key + 1 ?>"> <?= $a->APJ_NAMA ?></button>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="collapse" class="btn-group" id="data-<?= $key + 1 ?>">
                            <div class="card card-body">
                                <?php foreach ($a->gi as $g) : ?>
                                    <p class="fw-bold fs-4"><?php echo $g['GARDU_INDUK_NAMA'] . "<br>"; ?></p>
                                    <ul>
                                        <?php foreach ($g['incoming'] as $income) : ?>
                                            <li>
                                                <p class="fw-bold fs-5"><?php echo $income['NAMA_ALIAS_INCOMING']; ?></p>
                                            </li>
                                            <?php foreach ($income['cubicle'] as $cubic) : ?>
                                                <?php if ($cubic['SCB'] === '1') : ?>
                                                    <div class="btn-group-vertical">
                                                        <p class="fs-5"><?= $cubic['CUBICLE_NAME']; ?></p>
                                                        <button type="button" class="btn btn-danger">Close</button>
                                                    </div>
                                                <?php elseif ($cubic['SCB'] === '0') : ?>
                                                    <div class="btn-group-vertical">
                                                        <p class="fs-5"><?= $cubic['CUBICLE_NAME']; ?></p>
                                                        <button type="button" class="btn btn-success">Open</button>
                                                    </div>
                                                <?php elseif ($cubic['SCB'] === NULL) : ?>
                                                    <div class="btn-group-vertical">
                                                        <p class="fs-5"><?= $cubic['CUBICLE_NAME']; ?></p>
                                                        <button type="button" class="btn btn-warning">Cadangan</button>
                                                    </div>
                                                <?php else : ?>
                                                    <div class="btn-group-vertical">
                                                        <p class="fs-5"><?= $cubic['CUBICLE_NAME']; ?></p>
                                                        <button type="button" class="btn btn-dark">invalid</button>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
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