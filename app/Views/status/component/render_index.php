<?php
$url = parse_url($_SERVER['REQUEST_URI']);
parse_str($url['query'], $params);

$item_open = $params['open'];
?>

<div class="row">
      <div class="col">
            <h1>data open <?php $item_open ?></h1>
            <h1 class="text-center mt-2">Monitoring Realtime SCADA</h1>
            <h2 class="text-center mt-2">Unit Pelaksana Pelayanan Pelanggan (UP3)</h2>
            <?php if (session()->getFlashdata('pesan')) : ?>
                  <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                  </div>
            <?php endif; ?>

            <div class="accordion" id="accordionExample">
                  <?php foreach ($apj as $key => $a) : ?>
                        <div class="accordion-item">
                              <h2 class="accordion-header" id="heading<?= $a->APJ_ID ?>">
                                    <button class="accordion-button" data-acc="<?= $key ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $a->APJ_ID ?>" aria-expanded="true" aria-controls="collapse<?= $a->APJ_ID ?>">
                                          <?= $a->APJ_NAMA ?>
                                    </button>
                              </h2>
                              <div id="collapse<?= $a->APJ_ID ?>" class="accordion-collapse collapse <?= ($key == $item_open) ? 'show' : null ?> " aria-labelledby="heading<?= $a->APJ_ID ?>" data-bs-parent="#accordionExample">

                                    <div class="accordion-body">
                                          <a href="/status/tambah" class="btn btn-primary mb-3">Tambah Data Cubicle</a><br>
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
                                                                                    <!-- <button onclick="out(< ?php echo $cubic['OUTGOING_ID']; ?>)" type="button" data-bs-toggle="modal" data-bs-target="#modalData" class="btn btn-<?= $arr[0]; ?>"><?= $arr[1]; ?></button></a> -->
                                                                                    <button type="button" data-cubicle="<?php echo $cubic['OUTGOING_ID']; ?>" data-name="<?php echo $cubic['CUBICLE_NAME']; ?>" class="btn cubicle btn-<?= $arr[0]; ?>"><?= $arr[1]; ?></button></a>
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
      </div>
</div>