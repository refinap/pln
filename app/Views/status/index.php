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
                            <button class="accordion-button fw-bold fs-5" data-acc="<?= $key ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $a->APJ_ID ?>" aria-expanded="true" aria-controls="collapse<?= $a->APJ_ID ?>">
                                <?= $a->APJ_NAMA ?>
                            </button>
                        </h2>
                        <div id="collapse<?= $a->APJ_ID ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $a->APJ_ID ?>" data-bs-parent="#accordionExample">

                            <div class="accordion-body">
                                <!-- <a href="/status/tambah" class="btn btn-primary mb-3">Tambah Data Cubicle</a><br> -->
                                <div class="container">
                                    <?php foreach ($a->gi as $g) : ?>
                                        <span class="fw-bold fs-4"> GI <?php echo $g['GARDU_INDUK_NAMA']; ?></span>
                                        <br>
                                        <div class="card  border-dark mb-3">
                                            <div class="card-body">
                                                <div class="row mt-3">

                                                    <!-- 
                                                        .:. Struktur data :
                                                        note:
                                                        data nilai bolean bersitar true = 1 / true / !NULL
                                                        data nilai bolean bersitar false = 0 / false / NULL
                                                        
                                                        incoming = [
                                                            NAMA_ALIAS_INCOMING: isian nama,
                                                            cubicle: [
                                                                OUTGOING_ID: isian id,
                                                                CUBICLE_NAME: isian nama
                                                                status: [
                                                                    grounding: 0,
                                                                    relay: 1,
                                                                    rack: 0,
                                                                    local_remote: 0,
                                                                    OC: 1
                                                                ]
                                                            ]
                                                        ]
                                                    -->

                                                    <div class="col-md-12 text-center" 6>
                                                        <?php foreach ($g['incoming'] as $income) : ?>
                                                            <span class="fw-bold fs-5"><?php echo $income['NAMA_ALIAS_INCOMING']; ?></span>
                                                            <br>
                                                            <div class="row">
                                                                <?php foreach ($income['cubicle'] as $cubic) : ?>
                                                                    <?php
                                                                    if ($cubic['SCB'] === '1') {
                                                                        $arr = array('primary', 'detail');
                                                                    } elseif ($cubic['SCB'] === '0') {
                                                                        $arr = array('primary', 'detail');
                                                                    } elseif ($cubic['SCB'] === NULL) {
                                                                        $arr = array('primary', 'detail');
                                                                    } else {
                                                                        $arr = array('primary', 'detail');
                                                                    }
                                                                    ?>

                                                                    <!-- 
                                                                    <div class="p-2 d-grid gap-2" style="min-width:120px;">
                                                                        <div class="d-flex justify-content-center">
                                                                            <span class="fs-5"><?= $cubic['CUBICLE_NAME']; ?></span>
                                                                        </div>
                                                                        <button type="button" data-cubicle="<?php echo $cubic['OUTGOING_ID']; ?>" data-name="<?php echo $cubic['CUBICLE_NAME']; ?>" class="btn cubicle btn-<?= $arr[0]; ?>"><?= $arr[1]; ?></button></a>
                                                                    </div> -->


                                                                    <div class="col-md-3  text-center">
                                                                        <div class="card my-2 text-center">
                                                                            <div class="card-body px-0 pb-0">
                                                                                <p class="fs-5"><?= $cubic['CUBICLE_NAME']; ?></p>
                                                                                <button type="button" data-cubicle="<?php echo $cubic['OUTGOING_ID']; ?>" data-name="<?php echo $cubic['CUBICLE_NAME']; ?>" class="btn cubicle btn-<?= $arr[0]; ?>"><?= $arr[1]; ?></button></a>

                                                                                <div class="wrapper-status position-relative">
                                                                                    <img class="img-fluid" src="/image/close.png" alt="">
                                                                                    <!-- < ?php echo $cubic['status']['grounding'] ? '<img class="img-fluid position-absolute top-0 start-0" src="/image/groundd.png" alt="">' : null ?> -->
                                                                                    <?php echo true ? '<img class="img-fluid position-absolute top-0 start-0" src="/image/ground.png" alt="">' : null ?>
                                                                                    <img class="img-fluid position-absolute top-0 end-0" src="/image/lokal.png" alt="">
                                                                                    <img class="img-fluid position-absolute top-0 start-50 translate-middle-x" src="/image/rackin.png" alt="">
                                                                                    <img class="img-fluid position-absolute top-0 start-0" src="/image/ready.png" alt="">
                                                                                </div>
                                                                                <div class="d-flex flex-row w-100  bd-highlight">
                                                                                    <div class="p-2 bd-highlight border border-dark">IA =</div>
                                                                                    <div class="p-2 bd-highlight border border-dark">IB =</div>
                                                                                    <div class="p-2 bd-highlight border border-dark">IC =</div>
                                                                                    <div class="p-2 bd-highlight border border-dark">IN =</div>
                                                                                </div>
                                                                                <div class="d-flex flex-row w-100  bd-highlight">
                                                                                    <div class="p-2 bd-highlight border border-dark">VLL =</div>
                                                                                    <div class="p-2 bd-highlight border border-dark">KW =</div>
                                                                                    <div class="p-2 bd-highlight border border-dark">PF =</div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- <div class="card-footer text-muted">
                                                                                2 days ago
                                                                            </div> -->
                                                                        </div>


                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
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
                                <th scope="col" style="text-align:center">Keterangan</th>
                                <th scope="col" style="text-align:center">Nilai</th>
                                <th scope="col" style="text-align:center">Waktu</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">

                    <!-- <a id="edit" class="btn btn-warning" style="min-width:75px;">Edit</a>
                <form id="delete" method="post" class="d-inline">
                    < ?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" style="min-width:75px;" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                </form> -->
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