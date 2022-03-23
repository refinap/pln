<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="position-relative">
                <h1 class="mt-3"> Informasi <?= $c['CUBICLE_NAME']; ?></h1>
                <a href="/status/index" button type="button" class="btn-close position-absolute top-0 end-0" aria-label="Close"></a></button>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>IA</td>
                            <td><?= $c['IA']; ?></td>
                            <td><?= $c['IA_TIME']; ?></td>
                        </tr>
                        <tr>
                            <td>IB</td>
                            <td><?= $c['IB']; ?></td>
                            <td><?= $c['IB_TIME']; ?></td>
                        </tr>
                        <tr>
                            <td>IC</td>
                            <td><?= $c['IC']; ?></td>
                            <td><?= $c['IC_TIME']; ?></td>
                        </tr>
                        <tr>
                            <td>IN</td>
                            <td><?= $c['IN']; ?></td>
                            <td><?= $c['IN_TIME']; ?></td>
                        </tr>
                        <tr>
                            <td>IA2</td>
                            <td><?= $c['IA2']; ?></td>
                            <td><?= $c['IA2_TIME']; ?></td>
                        </tr>
                        <tr>
                            <td>IB2</td>
                            <td><?= $c['IB2']; ?></td>
                            <td><?= $c['IB2_TIME']; ?></td>
                        </tr>
                        <tr>
                            <td>IC2</td>
                            <td><?= $c['IC2']; ?></td>
                            <td><?= $c['IC2_TIME']; ?></td>
                        </tr>
                        <tr>
                            <td>IN2</td>
                            <td><?= $c['IN2']; ?></td>
                            <td><?= $c['IN2_TIME']; ?></td>
                        </tr>
                        <tr>
                            <td>VLL</td>
                            <td><?= $c['VLL']; ?></td>
                            <td><?= $c['VLL_TIME']; ?></td>
                        </tr>
                        <tr>
                            <td>KW</td>
                            <td><?= $c['KW']; ?></td>
                            <td><?= $c['KW_TIME']; ?></td>
                        </tr>
                        <tr>
                            <td>PF</td>
                            <td><?= $c['PF']; ?></td>
                            <td><?= $c['PF_TIME']; ?></td>
                        </tr>
                        <tr>
                            <td>IFA</td>
                            <td><?= $c['IFA']; ?></td>
                            <td><?= $c['IFA_TIME']; ?></td>
                        </tr>
                        <tr>
                            <td>IFB</td>
                            <td><?= $c['IFB']; ?></td>
                            <td><?= $c['IFB_TIME']; ?></td>
                        </tr>
                        <tr>
                            <td>IFC</td>
                            <td><?= $c['IFC']; ?></td>
                            <td><?= $c['IFC_TIME']; ?></td>
                        </tr>
                        <tr>
                            <td>IFN</td>
                            <td><?= $c['IFN']; ?></td>
                            <td><?= $c['IFN_TIME']; ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="/status/index" class="btn btn-primary mb-3">Close</a><br>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>