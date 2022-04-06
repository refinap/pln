<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <!-- <div class="container cubicle-wrapper"> -->
    <div class="row">
        <div class="col">
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
                        <div id="collapse<?= $a->APJ_ID ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $a->APJ_ID ?>" data-bs-parent="#accordionExample">

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

</div>

<!-- Modal -->
<div class="modal fade" id="modalData" tabindex="-1" aria-labelledby="modalDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modalDataLabel">Informasi <span id="cb_name"></span></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <span id="id_cubicle"></span> -->
                <table id="tableCubicle" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">

                <a id="edit" class="btn btn-warning" style="min-width:75px;">Edit</a>
                <form id="delete" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" style="min-width:75px;" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                </form>
                <button type="button" class="btn btn-secondary" style="min-width:75px;" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script>
    // sample
    let item = 0;
    $('.accordion-item').click(function() {
        item = $(this).data('acc');
        console.log(item)
    });

    // setInterval(function() {
    //     // prob = pass data opo sing kanggo
    //     $('.cubicle-wrapper').load(`/status/cIndexStatus?open=${item}`);
    // }, 5000);

    $('.cubicle').click(function() {
        let id_cubicle = $(this).data('cubicle');
        let cb_name = $(this).data('name');
        $('#cb_name').html(cb_name);
        $('#id_cubicle').html(id_cubicle)

        $("a#edit").attr("href", `Status/edit/${id_cubicle}`);
        $('form#delete').attr('action', `Status/delete/${id_cubicle}`);


        table.clear();
        table.ajax.url(`http://localhost:8080/status/getInformasi/${id_cubicle}`).load();
        setInterval(function() {
            console.log(1)
            table.ajax.reload();
        }, 4000);
        $('#modalData').modal('show')
    });

    var table = $('#tableCubicle').DataTable({
        "bDestroy": true,
        "autoWidth": false,
        "ordering": false,
        "paging": false,
        "bFilter": false,
        "info": false,
        "lengthMenu": [
            [-1],
            ["All"]
        ],
        columns: [{
                data: 'name'
            },
            {
                data: 'nilai'
            },
            {
                data: 'time'
            }
        ]
    });
</script>
<?= $this->endSection(); ?>