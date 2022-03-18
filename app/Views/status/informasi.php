<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2"> Informasi </h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($cubicle as $c) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>IA</td>
                            <td><?= $c['IA']; ?></td>
                            <td><?= $c['IA_TIME']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>IB</td>
                            <td><?= $c['IB']; ?></td>
                            <td><?= $c['IB_TIME']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>IC</td>
                            <td><?= $c['IC']; ?></td>
                            <td><?= $c['IC_TIME']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>IN</td>
                            <td><?= $c['IN']; ?></td>
                            <td><?= $c['IN_TIME']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>IA2</td>
                            <td><?= $c['IA2']; ?></td>
                            <td><?= $c['IA2_TIME']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>IB2</td>
                            <td><?= $c['IB2']; ?></td>
                            <td><?= $c['IB2_TIME']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>IC2</td>
                            <td><?= $c['IC2']; ?></td>
                            <td><?= $c['IC2_TIME']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>IN2</td>
                            <td><?= $c['IN2']; ?></td>
                            <td><?= $c['IN2_TIME']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>VLL</td>
                            <td><?= $c['VLL']; ?></td>
                            <td><?= $c['VLL_TIME']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>KW</td>
                            <td><?= $c['KW']; ?></td>
                            <td><?= $c['KW_TIME']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>PF</td>
                            <td><?= $c['PF']; ?></td>
                            <td><?= $c['PF_TIME']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>IFA</td>
                            <td><?= $c['IFA']; ?></td>
                            <td><?= $c['IFA_TIME']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>IFB</td>
                            <td><?= $c['IFB']; ?></td>
                            <td><?= $c['IFB_TIME']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>IFC</td>
                            <td><?= $c['IFC']; ?></td>
                            <td><?= $c['IFC_TIME']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>IFN</td>
                            <td><?= $c['IFN']; ?></td>
                            <td><?= $c['IFN_TIME']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>