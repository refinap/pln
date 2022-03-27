<div class="accordion" id="accordionExample">
    <?php foreach ($apj as $key => $a) : ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?= $a->APJ_ID ?>">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $a->APJ_ID ?>" aria-expanded="true" aria-controls="collapse<?= $a->APJ_ID ?>">
                    <?= $a->APJ_NAMA ?>
                </button>
            </h2>
            <div id="collapse<?= $a->APJ_ID ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $a->APJ_ID ?>" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?php foreach ($a->gi as $g) : ?>
                        <span class="fw-bold fs-4"> GI <?php echo $g['GARDU_INDUK_NAMA']; ?></span>
                        <br>
                        <div class="card  border-dark mb-3">
                            <div class="card-body">
                                <?php foreach ($g['incoming'] as $income) : ?>
                                    <span class="fw-bold fs-5"><?php echo $income['NAMA_ALIAS_INCOMING']; ?></span>
                                    <div class="d-flex flex-row bd-highlight">
                                        <?php foreach ($income['cubicle'] as $cubic) : ?>
                                            <?php
                                            if ($cubic['SCB'] === '1') {
                                                $arr = array('danger', 'Close');
                                            } elseif ($cubic['SCB'] === '0') {
                                                $arr = array('success', 'Open');
                                            } elseif ($cubic['SCB'] === NULL) {
                                                $arr = array('warning', 'Cadangan');
                                            } else {
                                                $arr = array('dark', 'invalid');
                                            }
                                            ?>
                                            <div class="p-2 d-grid gap-2" style="min-width:120px;">
                                                <div class="d-flex justify-content-center">
                                                    <span class="fs-5"><?= $cubic['CUBICLE_NAME']; ?></span>
                                                </div>
                                                <!-- <button onclick="out(<?php echo $cubic['OUTGOING_ID']; ?>)" type="button" data-bs-toggle="modal" data-bs-target="#modalData" class="btn btn-<?= $arr[0]; ?>"><?= $arr[1]; ?></button></a> -->
                                                <button type="button" data-cubicle="<?php echo $cubic['OUTGOING_ID']; ?>" class="btn cubicle btn-<?= $arr[0]; ?>"><?= $arr[1]; ?></button></a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>