<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-2">Monitoring Realtime SCADA</h1>
            <h2 class="text-center mt-2">Unit Pelaksana Pelayanan Pelanggan (UP3)</h2>

            <!-- UP3 Semarang -->
            <?php foreach ($apj as $a) : ?>
                <?php if ($a['APJ_ID'] === '1') : ?>
                    <a class="btn btn-primary mt-1" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                        <?= $a['APJ_NAMA']; ?></a>
                    <!-- Gardu Induk BSB -->
                    <td>
                        <h1><?php foreach ($gi as $g) : ?><?php  ?>
                            <?php if ($g['GARDU_INDUK_ID'] === '2') : ?><?php  ?>
                            <div class="btn-group-vertical" class="collapse multi-collapse" id="multiCollapseExample1">
                    <td>
                        <tr>
                            <div class="card card-body"></div>
                            <h2 class="fs-1">
                                <?= $g['GARDU_INDUK_NAMA']; ?>
                            </h2>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>

                <!-- Trafo01_BSB -->
                <?php foreach ($incoming as $i) : ?><?php  ?>
                <?php if ($i['INCOMING_ID'] === '4') : ?><?php  ?>
                <div class="btn-group-horizontal">
                    <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

        <!-- Penyulang BSB09_CAD -->
        <?php foreach ($cubicle as $c) : ?>
            <?php if ($c['OUTGOING_ID'] === '93') : ?>
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
                        <button type="button" class="btn btn-warning">Cadangan</button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>

        <!-- Penyulang BSB08_CAD -->
        <?php foreach ($cubicle as $c) : ?>
            <?php if ($c['OUTGOING_ID'] === '94') : ?>
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
                        <button type="button" class="btn btn-warning">Cadangan</button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>

        <!-- Penyulang BSB07 -->
        <?php foreach ($cubicle as $c) : ?>
            <?php if ($c['OUTGOING_ID'] === '95') : ?>
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
                        <button type="button" class="btn btn-warning">Cadangan</button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>

        <!-- Penyulang BSB06 -->
        <?php foreach ($cubicle as $c) : ?>
            <?php if ($c['OUTGOING_ID'] === '96') : ?>
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
                        <button type="button" class="btn btn-warning">Cadangan</button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>

        <!-- Penyulang BSB01 -->
        <?php foreach ($cubicle as $c) : ?>
            <?php if ($c['OUTGOING_ID'] === '97') : ?>
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
                        <button type="button" class="btn btn-warning">Cadangan</button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>

        <!-- Trafo02_BSB -->
        <?php foreach ($incoming as $i) : ?>
            <?php if ($i['INCOMING_ID'] === '6') : ?>
                <div class="btn-group-horizontal">
                    <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        <!-- Penyulang BSB04 -->
        <?php foreach ($cubicle as $c) : ?>
            <?php if ($c['OUTGOING_ID'] === '98') : ?>
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
                        <button type="button" class="btn btn-warning">Cadangan</button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
        <!-- Penyulang BSB10 -->
        <?php foreach ($cubicle as $c) : ?>
            <?php if ($c['OUTGOING_ID'] === '1122') : ?>
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
                        <button type="button" class="btn btn-warning">Cadangan</button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
        <!-- Penyulang BSB03 -->
        <?php foreach ($cubicle as $c) : ?>
            <?php if ($c['OUTGOING_ID'] === '99') : ?>
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
                        <button type="button" class="btn btn-warning">Cadangan</button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
        <!-- Penyulang BSB02 -->
        <?php foreach ($cubicle as $c) : ?>
            <?php if ($c['OUTGOING_ID'] === '100') : ?>
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
                        <button type="button" class="btn btn-warning">Cadangan</button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
        <!-- Penyulang BSB05 -->
        <?php foreach ($cubicle as $c) : ?>
            <?php if ($c['OUTGOING_ID'] === '101') : ?>
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
                        <button type="button" class="btn btn-warning">Cadangan</button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>


        <!-- Gardu Induk Weleri -->
        <?php foreach ($gi as $g) : ?>
            <?php if ($g['GARDU_INDUK_ID'] === '3') : ?><?php  ?>
            <div class="btn-group-vertical" class="collapse multi-collapse" id="multiCollapseExample1"></div>
            <div class="card card-body"></div>
            <h2 class="fs-1"><?= $g['GARDU_INDUK_NAMA']; ?></h2>
        <?php endif; ?>
    <?php endforeach; ?>

    <!-- Trafo01_Weleri -->
    <?php foreach ($incoming as $i) : ?><?php  ?>
    <?php if ($i['INCOMING_ID'] === '77') : ?><?php  ?>
    <div class="btn-group-horizontal">
        <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
    </div>
<?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang WLR01_CAD -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '72') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang WLR12 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '73') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang WLR09 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '841') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KOPEL -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '842') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang WLI02 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '935') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang WLI10 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '692') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>


<!-- Trafo02_Weleri -->
<?php foreach ($incoming as $i) : ?><?php  ?>
<?php if ($i['INCOMING_ID'] === '79') : ?><?php  ?>
<div class="btn-group-horizontal">
    <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
</div>
<?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang WLI03 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '353') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang WLI05 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '355') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang WLI08 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '356') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang WLI06 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '230') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang WLI07 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '232') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang Kopel -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '233') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>














<!-- Gardu Induk Kaliwungu -->
<?php foreach ($gi as $g) : ?>
    <?php if ($g['GARDU_INDUK_ID'] === '4') : ?><?php  ?>
    <div class="btn-group-vertical" class="collapse multi-collapse" id="multiCollapseExample1"></div>
    <div class="card card-body"></div>
    <h2 class="fs-1"><?= $g['GARDU_INDUK_NAMA']; ?></h2>
<?php endif; ?>
<?php endforeach; ?>

<!-- Trafo01_Kaliqwungu -->
<?php foreach ($incoming as $i) : ?><?php  ?>
<?php if ($i['INCOMING_ID'] === '10') : ?><?php  ?>
<div class="btn-group-horizontal">
    <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
</div>
<?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KLU13 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '1038') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KLU09_Cadangan -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '1039') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KLU10 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '115') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KLU10 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '116') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KLU05 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '117') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KLU08 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '118') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KLU02 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '120') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KLU01 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '122') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KLU04 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '697') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KLU11 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '725') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>


<!-- Trafo02_Kaliqwungu -->
<?php foreach ($incoming as $i) : ?><?php  ?>
<?php if ($i['INCOMING_ID'] === '12') : ?><?php  ?>
<div class="btn-group-horizontal">
    <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
</div>
<?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KLU CAD -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '1040') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KLU03 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '119') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KLU09 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '121') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>


<!-- Gardu Induk Randugarut -->
<?php foreach ($gi as $g) : ?>
    <?php if ($g['GARDU_INDUK_ID'] === '5') : ?><?php  ?>
    <div class="btn-group-vertical" class="collapse multi-collapse" id="multiCollapseExample1"></div>
    <div class="card card-body"></div>
    <h2 class="fs-1"><?= $g['GARDU_INDUK_NAMA']; ?></h2>
<?php endif; ?>
<?php endforeach; ?>
<!-- Trafo01_Randugarut -->
<?php foreach ($incoming as $i) : ?><?php  ?>
<?php if ($i['INCOMING_ID'] === '41') : ?><?php  ?>
<div class="btn-group-horizontal">
    <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
</div>
<?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang RTD01 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '163') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang RTD02 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '164') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang RTD03 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '165') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang RTD04 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '166') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang RTD05 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '167') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang RTD06 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '168') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang RTD07 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '169') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang PS GI -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '170') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>



<!-- Trafo02_Randugarut -->
<?php foreach ($incoming as $i) : ?><?php  ?>
<?php if ($i['INCOMING_ID'] === '43') : ?><?php  ?>
<div class="btn-group-horizontal">
    <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
</div>
<?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang RTD08 CAD -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '611') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KOPEL -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '612') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang RTD10 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '171') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang RTD11 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '172') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang RTD12 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '173') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang RTD13 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '174') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang RTD09 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '175') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang RTD14 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '176') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang RTD15 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '990') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Gardu Induk Krapyak -->
<?php foreach ($gi as $g) : ?>
    <?php if ($g['GARDU_INDUK_ID'] === '7') : ?><?php  ?>
    <div class="btn-group-vertical" class="collapse multi-collapse" id="multiCollapseExample1"></div>
    <div class="card card-body"></div>
    <h2 class="fs-1"><?= $g['GARDU_INDUK_NAMA']; ?></h2>
<?php endif; ?>
<?php endforeach; ?>
<!-- Trafo01_Krapyak -->
<?php foreach ($incoming as $i) : ?><?php  ?>
<?php if ($i['INCOMING_ID'] === '15') : ?><?php  ?>
<div class="btn-group-horizontal">
    <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
</div>
<?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KPK13 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '129') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KPK10 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '130') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KPK06 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '132') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KPK11 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '133') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KPK14 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '923') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KPK08 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '759') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Trafo02_Krapyak -->
<?php foreach ($incoming as $i) : ?><?php  ?>
<?php if ($i['INCOMING_ID'] === '18') : ?><?php  ?>
<div class="btn-group-horizontal">
    <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
</div>
<?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KPK05 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '127') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KPK04 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '128') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang Kopel -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '925') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KPK15 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '948') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KPK16 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '965') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>


<!-- Trafo03_Krapyak -->
<?php foreach ($incoming as $i) : ?><?php  ?>
<?php if ($i['INCOMING_ID'] === '19') : ?><?php  ?>
<div class="btn-group-horizontal">
    <p class="fs-3"><?= $i['NAMA_ALIAS_INCOMING']; ?></p>
</div>
<?php endif; ?>
<?php endforeach; ?>

<!-- Penyulang KPK02 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '797') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KPK03 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '123') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KPK07 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '124') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KPK01 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '125') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<!-- Penyulang KPK12 -->
<?php foreach ($cubicle as $c) : ?>
    <?php if ($c['OUTGOING_ID'] === '131') : ?>
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
                <button type="button" class="btn btn-warning">Cadangan</button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<!-- Gardu Induk Kalisari -->
<?php foreach ($gi as $g) : ?>
    <?php if ($g['GARDU_INDUK_ID'] === '8') : ?><?php  ?>
    <div class="btn-group-vertical" class="collapse multi-collapse" id="multiCollapseExample1"></div>
    <div class="card card-body"></div>
    <h2 class="fs-1"><?= $g['GARDU_INDUK_NAMA']; ?></h2>
<?php endif; ?>
<?php endforeach; ?>
<!-- Trafo_1 Kalisari  7-->

<!-- Penyulang KLS04 178-->

<!-- Penyulang KLS05 179-->

<!-- Penyulang KLS06 180-->

<!-- Penyulang KLS02 181-->

<!-- Penyulang KLS01 183 -->

<!-- Penyulang KLS09 184-->

<!-- Penyulang KLSKopel 186-->



<!-- Trafo_2 Kalisari 9-->

<!-- Penyulang KLS03 177 -->

<!-- Penyulang KLS08 182 -->

<!-- Penyulang KLS07 185 -->

<!-- Penyulang KLS11 187 -->

<!-- Penyulang KLS12 188 -->

<!-- Penyulang KLS19 189 -->


<!-- Gardu Induk Simpanglima -->
<?php foreach ($gi as $g) : ?>
    <?php if ($g['GARDU_INDUK_ID'] === '9') : ?><?php  ?>
    <div class="btn-group-vertical" class="collapse multi-collapse" id="multiCollapseExample1"></div>
    <div class="card card-body"></div>
    <h2 class="fs-1"><?= $g['GARDU_INDUK_NAMA']; ?></h2>
<?php endif; ?>
<?php endforeach; ?>
<!-- Trafo_1 Simpanglima 56-->

<!-- Penyulang SPL01 79 -->

<!-- Penyulang SPL02 80 -->

<!-- Penyulang SPL03 81 -->

<!-- Penyulang SPL04 82 -->

<!-- Penyulang SPL05 83 -->

<!-- Penyulang SPL06 84 -->

<!-- Penyulang SPL07 967 -->


<!-- Trafo_2 Simpanglima 58-->

<!-- Penyulang SPL08 85 -->

<!-- Penyulang SPL KOPEL 86 -->

<!-- Penyulang SPL14 87 -->

<!-- Penyulang SPL13 88 -->

<!-- Penyulang SPL12 89 -->

<!-- Penyulang SPL11 90 -->

<!-- Penyulang SPL10 91 -->

<!-- Penyulang SPL09 92 -->



<!-- Gardu Induk Srondol -->
<?php foreach ($gi as $g) : ?>
    <?php if ($g['GARDU_INDUK_ID'] === '10') : ?><?php  ?>
    <div class="btn-group-vertical" class="collapse multi-collapse" id="multiCollapseExample1"></div>
    <div class="card card-body"></div>
    <h2 class="fs-1"><?= $g['GARDU_INDUK_NAMA']; ?></h2>
<?php endif; ?>
<?php endforeach; ?>
<!-- Trafo_1 Srondol 63-->


<!-- Penyulang SRL10 134 -->

<!-- Penyulang SRL10 135-->

<!-- Penyulang SRL10 136-->

<!-- Penyulang SRL10 733 -->

<!-- Penyulang SRL10 734-->



<!-- Trafo_2 Srondol 66-->

<!-- Penyulang SRL05 137 -->

<!-- Penyulang SRL04 138 -->

<!-- Penyulang SRL03 139 -->

<!-- Penyulang SRL09 698 -->

<!-- Penyulang SRL06 699 -->




<!-- Gardu Induk Pudakpayung -->
<?php foreach ($gi as $g) : ?>
    <?php if ($g['GARDU_INDUK_ID'] === '11') : ?><?php  ?>
    <div class="btn-group-vertical" class="collapse multi-collapse" id="multiCollapseExample1"></div>
    <div class="card card-body"></div>
    <h2 class="fs-1"><?= $g['GARDU_INDUK_NAMA']; ?></h2>
<?php endif; ?>
<?php endforeach; ?>
<!-- Trafo_1 Pudakpayung 29-->

<!-- Penyulang PDP01 190-->

<!-- Penyulang PDP02 191-->

<!-- Penyulang PDP03 192-->

<!-- Penyulang PDP04 193-->

<!-- Penyulang PDP06 194-->

<!-- Penyulang PDP05 710-->

<!-- Penyulang PDP07 735-->



<!-- Gardu Induk Tambaklorok -->
<?php foreach ($gi as $g) : ?>
    <?php if ($g['GARDU_INDUK_ID'] === '12') : ?><?php  ?>
    <div class="btn-group-vertical" class="collapse multi-collapse" id="multiCollapseExample1"></div>
    <div class="card card-body"></div>
    <h2 class="fs-1"><?= $g['GARDU_INDUK_NAMA']; ?></h2>
<?php endif; ?>
<?php endforeach; ?>
<!-- Trafo_1 Tambaklorok 70-->

<!-- Penyulang TBL03 140-->

<!-- Penyulang TBL04 141-->

<!-- Penyulang TBL06 142-->

<!-- Penyulang TBL07 143-->

<!-- Penyulang TBL12 144-->



<!-- Trafo_2 Tambaklorok 73-->

<!-- Penyulang TBL13 784-->

<!-- Penyulang TBL09 CAD 145-->

<!-- Penyulang TBL01 146-->

<!-- Penyulang PS PLTU 02 147-->

<!-- Penyulang TBL10 148-->

<!-- Penyulang TBL15 149-->

<!-- Penyulang TBL05 150-->

<!-- Penyulang TBL02 151-->

<!-- Penyulang TBL16 938-->

<!-- Penyulang TBL17 982-->


<!-- Trafo_3 Tambaklorok null 188-->



<!-- Gardu Induk Pandeanlamper -->
<?php foreach ($gi as $g) : ?>
    <?php if ($g['GARDU_INDUK_ID'] === '13') : ?><?php  ?>
    <div class="btn-group-vertical" class="collapse multi-collapse" id="multiCollapseExample1"></div>
    <div class="card card-body"></div>
    <h2 class="fs-1"><?= $g['GARDU_INDUK_NAMA']; ?></h2>
<?php endif; ?>
<?php endforeach; ?>
<!-- Trafo_1 Pandeanlamper 23-->

<!-- Penyulang PDL06 785-->

<!-- Penyulang PDL14 786-->

<!-- Penyulang KOPEL 927-->

<!-- Penyulang PDL19 945-->

<!-- Penyulang PDL16 951-->

<!-- Penyulang PDL02 203-->

<!-- Penyulang PDL03 206-->


<!-- Trafo_2 Pandeanlamper 25-->

<!-- Penyulang PDL11 199-->

<!-- Penyulang PDL12 202-->

<!-- Penyulang PDL01 204-->

<!-- Penyulang PDL13 205-->

<!-- Penyulang PDL15 208-->


<!-- Trafo_3 Pandeanlamper 27-->

<!-- Penyulang PDL10 690-->

<!-- Penyulang PDL04 209-->

<!-- Penyulang PDL08 210-->

<!-- Penyulang PDL05 211-->

<!-- Penyulang PDL07 212-->

<!-- Penyulang PDL09 213-->











<!-- Trafo03_Weleri -->
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