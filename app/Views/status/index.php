<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-2">Monitoring Realtime SCADA</h1>
            <h2 class="text-center mt-2">Unit Pelaksana Pelayanan Pelanggan (UP3)</h2>

            <a href="/status/tambah" class="btn btn-primary mb-3">Tambah Data</a><br>
            <?php foreach ($apj as $key => $a) : ?>
                <button class="btn btn-primary mb-1" data-bs-toggle="collapse" data-bs-target="#data-<?= $key + 1 ?>" style="min-width:150px;" aria-expanded="false" aria-controls="data-<?= $key + 1 ?>" class="p-2 d-grid gap-2" style="min-width:120px;"> <?= $a->APJ_NAMA ?></button>
                <div class="collapse multi-collapse" class="btn-group" id="data-<?= $key + 1 ?>">
                    <div class="card card-body">
                        <?php foreach ($a->gi as $g) : ?>
                            <span class="fw-bold fs-4"><?php echo $g['GARDU_INDUK_NAMA']; ?></span>
                            <ul>
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
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-<?= $arr[0]; ?>"><?= $arr[1]; ?></button>

                                                <!-- The Modal -->
                                                <div class="modal fade" id="myModal">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Informasi</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body">

                                                                <div class="container mt-3">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Keterangan</th>
                                                                                <th>Nilai</th>
                                                                                <th>Waktu</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>IA</td>
                                                                                <td>84</td>
                                                                                <td>2022-03-02 15:34:00</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>IB</td>
                                                                                <td>95</td>
                                                                                <td>2022-03-02 15:34:00</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>IC</td>
                                                                                <td>124</td>
                                                                                <td>2022-03-02 15:34:00</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endforeach; ?>
                            </ul>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>