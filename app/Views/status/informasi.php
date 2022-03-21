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
                            <td><?php 'CUBICLE_NAME' ?></td> // Ia, IB, DST
                            <td><?= $c['IA, IB, IC, IN, IA2, IB2, IC2, IN2, VLL, KW, PF, IFA, IFB, IFC, IFN']; ?></td>
                            <td><?= $c['IA_TIME, IB_TIME, IC_TIME, IN_TIME, IA2_TIME, IB2_TIME, IC2_TIME, IN2_TIME, VLL_TIME, KW_TIME, PF_TIME, IFA_TIME, IFB_TIME, IFC_TIME, IFN_TIME']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>_
    </div>
</div>

<?= $this->endSection(); ?>