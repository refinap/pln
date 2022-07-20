<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<button class="btn btn-dark openbtn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="position: fixed;top: 50%;"><i class="fa-solid fa-circle-info"></i></button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h3 class="offcanvas-title" id="offcanvasScrollingLabel">Keterangan</h3>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p><img width=60 src="<?php echo base_url() . '/image/openn.png'; ?> " alt="">Open</p>
        <p><img width=60 src="<?php echo base_url() . '/image/closee.png'; ?>" alt="">Close</p>
        <p><img width=60 src="<?php echo base_url() . '/image/cadangann.png'; ?>" alt="">Cadangan</p>
        <p><img width=60 src="<?php echo base_url() . '/image/invalidd.png'; ?>" alt="">Invalid</p>
        <p><img width=50 src="<?php echo base_url() . '/image/readyy.png'; ?>" alt="">Relay Ready</p>
        <p><img width=50 src="<?php echo base_url() . '/image/notreadyy.png'; ?>" alt="">Relay Not Ready</p>
        <p><img width=50 src="<?php echo base_url() . '/image/remotee.png'; ?>" alt="">Remote</p>
        <p><img width=50 src="<?php echo base_url() . '/image/lokall.png'; ?>" alt="">Local</p>
        <p><img width=50 src="<?php echo base_url() . '/image/rackinn.png'; ?>" alt="">CB Position Rack In</p>
        <p><img width=50 src="<?php echo base_url() . '/image/notgroundd.png'; ?>" alt="">Earth Switch Not Ground</p>
        <p><img width=50 src="<?php echo base_url() . '/image/groundd.png'; ?>" alt="">Earth Switch Ground</p>
    </div>
</div>
<div class="container possition-relative">
    <!-- <div class="container cubicle-wrapper"> -->

    <div id="main">
        <div class="row overflow-auto">
            <div class="col">
                <br>
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
                                <button class="accordion-button fs-5" data-acc="<?= $key ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $a->APJ_ID ?>" aria-expanded="true" aria-controls="collapse<?= $a->APJ_ID ?>">
                                    <?= $a->APJ_NAMA ?>
                                </button>
                            </h2>
                            <div id="collapse<?= $a->APJ_ID ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $a->APJ_ID ?>" data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    <!-- <a href="<?php echo base_url(); ?>/status/tambah" class="btn btn-primary mb-3">Tambah Data Cubicle</a><br> -->
                                    <div class="container">
                                        <?php foreach ($a->gi as $g) : ?>
                                            <span class="fs-4"> GI <?php echo $g['GARDU_INDUK_NAMA']; ?></span>
                                            <br>
                                            <div class="card  border-dark mb-3">
                                                <div class="card-body">
                                                    <div class="row mt-3">

                                                        <div class="col-md-12 text-center">
                                                            <?php foreach ($g['incoming'] as $income) : ?>
                                                                <span class=" fw-bold fs-5"><?php echo $income['NAMA_ALIAS_INCOMING']; ?></span>
                                                                <table id="" class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col" style="text-align:center" data-toggle="tooltip" data-placement="top" title="Beban Trafo IA"><strong role="" class="" data-incoming="<?php echo $income['INCOMING_ID']; ?>" data-incoming-name="IA">IA</strong><br> <?php echo $income['IA'] ?? 0 ?> </th>
                                                                            <th scope="col" style="text-align:center" data-toggle="tooltip" data-placement="top" title="Beban Trafo IB"><strong role="" class="" data-incoming="<?php echo $income['INCOMING_ID']; ?>" data-incoming-name="IB">IB</strong><br> <?php echo $income['IB'] ?? 0 ?> </th>
                                                                            <th scope="col" style="text-align:center" data-toggle="tooltip" data-placement="top" title="Beban Trafo IC"><strong role="" class="" data-incoming="<?php echo $income['INCOMING_ID']; ?>" data-incoming-name="IC">IC</strong><br> <?php echo $income['IC'] ?? 0 ?> </th>
                                                                            <th scope="col" style="text-align:center" data-toggle="tooltip" data-placement="top" title="Beban Trafo IG"><strong role="" class="" data-incoming="<?php echo $income['INCOMING_ID']; ?>" data-incoming-name="IG">IG</strong><br> <?php echo $income['IG'] ?? 0 ?> </th>
                                                                            <th scope="col" style="text-align:center" data-toggle="tooltip" data-placement="top" title="Beban Trafo KW"><strong role="" class="" data-incoming="<?php echo $income['INCOMING_ID']; ?>" data-incoming-name="KW">KW</strong><br> <?php echo $income['KW'] ?? 0 ?> </th>
                                                                            <th scope="col" style="text-align:center" data-toggle="tooltip" data-placement="top" title="Beban Trafo DAYA_REAKTIF_TRAFO"><strong role="" class="" data-incoming="<?php echo $income['INCOMING_ID']; ?>" data-incoming-name="DAYA_REAKTIF_TRAFO">DAYA TRAFO</strong><br> <?php echo $income['DAYA_REAKTIF_TRAFO'] ?? 0 ?> </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="text-center">
                                                                    </tbody>
                                                                </table>

                                                                <br>
                                                                <div class="row">
                                                                    <?php foreach ($income['cubicle'] as $cubic) : ?>
                                                                        <?php
                                                                        if ($cubic['SCB'] === '1') {
                                                                            $arr = array('primary', 'Detail');
                                                                        } elseif ($cubic['SCB'] === '0') {
                                                                            $arr = array('primary', 'Detail');
                                                                        } elseif ($cubic['SCB'] === NULL) {
                                                                            $arr = array('primary', 'Detail');
                                                                        } else {
                                                                            $arr = array('primary', 'Detail');
                                                                        }
                                                                        ?>

                                                                        <!-- 
                                                                        <div class="p-2 d-grid gap-2" style="min-width:120px;">
                                                                            <div class="d-flex justify-content-center">
                                                                                <span class="fs-5"><?= $cubic['CUBICLE_NAME']; ?></span>
                                                                            </div>
                                                                            <button type="button" data-cubicle="<?php echo $cubic['OUTGOING_ID']; ?>" data-name="<?php echo $cubic['CUBICLE_NAME']; ?>" class="btn cubicle btn-<?= $arr[0]; ?>"><?= $arr[1]; ?></button></a>
                                                                        </div> -->


                                                                        <div class="col-sm-6 col-md-6 col-lg-3  text-center">
                                                                            <div class="card my-2 text-center">
                                                                                <!-- <div class="card-header text-center card-header-color">
                                                                                    <h3 class="fs-5"><?= $cubic['CUBICLE_NAME']; ?></h3>
                                                                                </div> -->
                                                                                <button type="button" data-toggle="tooltip" data-placement="top" title="Informasi" class="card-header text-center card-header-color btn-secondary cubicle btn-<?= $arr[0]; ?>" data-cubicle="<?php echo $cubic['OUTGOING_ID']; ?>" data-name="<?php echo $cubic['CUBICLE_NAME']; ?>">
                                                                                    <h3 class="fs-5"><?= $cubic['CUBICLE_NAME']; ?></h3>
                                                                                </button>

                                                                                <div class="card-body">
                                                                                    <div class="wrapper-status position-relative">
                                                                                        <?php
                                                                                        $img = "open";
                                                                                        if ($cubic['SCB']  == '0') {
                                                                                            $img = 'open';
                                                                                        } elseif ($cubic['SCB'] == 1) {
                                                                                            $img = 'close';
                                                                                        } elseif ($cubic['SCB'] == null) {
                                                                                            $img = 'cadangan';
                                                                                        } else {
                                                                                            $img = 'invalid';
                                                                                        }
                                                                                        ?>

                                                                                        <!-- <img class="img-fluid" src="../image/<?php echo $img ?>.png" alt=""> -->
                                                                                        <img class="img-fluid" src="<?php echo base_url(); ?>/image/<?php echo $img ?>.png" alt="">


                                                                                        <!-- < ?php if ($cubic['SESW_INV'] == '1') {
                                                                                            echo $cubic['SESW'] ? '<img class="img-fluid position-absolute top-0 start-0" src="/image/ground.png" alt="">' : '<img class="img-fluid position-absolute top-0 start-0" src="/image/notground.png" alt="">';
                                                                                        } else {
                                                                                            echo '<img class="img-fluid position-absolute top-0 start-0" src="/image/ground.png" alt="">';
                                                                                        } ?> -->

                                                                                        <?php echo $cubic['SESW']  = 0 ? '<img class="img-fluid position-absolute top-0 start-0" src="' . base_url() . '/image/ground.png" alt="">' : '<img class="img-fluid position-absolute top-0 start-0" src="' . base_url() . '/image/notground.png" alt="">' ?>

                                                                                        <?php echo $cubic['SCBP']  ? '<img class="img-fluid position-absolute top-0 start-0" src="' . base_url() . '/image/rackin.png" alt="">' : null ?>

                                                                                        <?php echo $cubic['SLR']  ? '<img class="img-fluid position-absolute top-0 start-0" src="' . base_url() . '/image/remote.png" alt="">' : '<img class="img-fluid position-absolute top-0 start-0" src="' . base_url() . '/image/lokal.png" alt="">' ?>

                                                                                        <?php echo $cubic['SRNR']  ? '<img class="img-fluid position-absolute top-0 start-0" src="' . base_url() . '/image/ready.png" alt="">' : '<img class="img-fluid position-absolute top-0 start-0" src="' . base_url() . '/image/notready.png" alt="">' ?>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="card-footer py-0 text-muted">
                                                                                    <h6 class="" id="l"> Grafik Beban
                                                                                        <a href="<?php echo base_url(); ?>/status/beban" class="btn btn-default cubicle-chart" data-toggle="tooltip" data-placement="top" title="Grafik">
                                                                                            <img src="<?php echo base_url() . '/image/grafik.png'; ?>" width=20 alt="">
                                                                                        </a>
                                                                                    </h6>
                                                                                    <div class="row">
                                                                                        <div class="col-4 border border-dark" data-toggle="tooltip" data-placement="top" title="History IA"> <strong role="button" class="cubicle-history" data-cubicle="<?php echo $cubic['OUTGOING_ID']; ?>" data-name="IA"><u>IA</u></strong> <br> <?php echo $cubic['IA'] ?? 0 ?> </div>
                                                                                        <div class="col-4 border border-dark" data-toggle="tooltip" data-placement="top" title="History IB"> <strong role="button" class="cubicle-history" data-cubicle="<?php echo $cubic['OUTGOING_ID']; ?>" data-name="IB"><u>IB</u></strong> <br> <?php echo $cubic['IB'] ?? 0 ?> </div>
                                                                                        <div class="col-4 border border-dark" data-toggle="tooltip" data-placement="top" title="History IC"> <strong role="button" class="cubicle-history" data-cubicle="<?php echo $cubic['OUTGOING_ID']; ?>" data-name="IC"><u>IC</u></strong> <br> <?php echo $cubic['IC'] ?? 0 ?> </div>
                                                                                        <div class="col-4 border border-dark" data-toggle="tooltip" data-placement="top" title="History IN"> <strong role="button" class="cubicle-history" data-cubicle="<?php echo $cubic['OUTGOING_ID']; ?>" data-name="IN"><u>IN</u></strong> <br> <?php echo $cubic['IN'] ?? 0 ?> </div>
                                                                                        <div class="col-4 border border-dark" data-toggle="tooltip" data-placement="top" title="History VLL"> <strong role="button" class="cubicle-history" data-cubicle="<?php echo $cubic['OUTGOING_ID']; ?>" data-name="VLL"><u>VLL</u></strong> <br> <?php echo $cubic['VLL'] ?? 0 ?> </div>
                                                                                        <div class="col-4 border border-dark" data-toggle="tooltip" data-placement="top" title="History KW"> <strong role="button" class="cubicle-history" data-cubicle="<?php echo $cubic['OUTGOING_ID']; ?>" data-name="KW"><u>KW</u></strong> <br> <?php echo $cubic['KW'] ?? 0 ?> </div>
                                                                                    </div>
                                                                                </div>
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
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal informasi -->
    <div class="modal fade" id="modalData" tabindex="-1" aria-labelledby="modalDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="modalDataLabel">Informasi Realtime <span id="cb_name"></span></h2>
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
                    <button type="button" class="btn btn-danger" style="min-width:75px;" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal history -->
    <div class="modal fade" id="modalDataHistory" tabindex="-1" aria-labelledby="modalDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="modalDataHistLabel">Riwayat Beban
                        <span id="cb_history"></span> <span id="cb_name"></span>
                        <a href="<?php echo base_url(); ?>/status/chart" class="btn btn-default cubicle-chart" data-toggle="tooltip" data-placement="top" title="Grafik">
                            <img src="<?php echo base_url() . '/image/grafik.png'; ?>" width=25 alt="">
                        </a>
                    </h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- <div>
                        Start date:
                        <input type="text" id="min" name="min" style="width: 145px;">
                        End date:
                        <input type="text" id="max" name="max" style="width: 145px;">
                        <input type="button" name="search" id="search" value="Search" class="btn btn-secondary" style="width: 75px;">
                    </div> -->
                    <br>
                    <!-- <span id="id_cubicle"></span> -->
                    <table id="tableCubicleHistory" class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align:center">Nilai</th>
                                <th scope="col" style="text-align:center">Waktu</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-danger" style="min-width:75px;" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>

    <!-- Modal Trafo -->
    <div class="modal fade" id="modalDataTrafo" tabindex="-1" aria-labelledby="modalDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="modalDataLabel">Informasi Trafo <span id=""></span></h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <span id="id_cubicle"></span> -->
                    <table id="tableTrafoHistory" class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="col-6" style="text-align:center">Keterangan</th>
                                <th scope="col" class="col-6" style="text-align:center">Nilai</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" style="min-width:75px;" data-bs-dismiss="modal">Close</button>
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


        //js info
        $('.cubicle').click(function() {
            let outgoing_id = $(this).data('cubicle');
            let cb_name = $(this).data('name');
            $('#cb_name').html(cb_name);
            $('#outgoing_id').html(outgoing_id)

            $("a#edit").attr("href", `<?php echo base_url(); ?>/Status/edit/${outgoing_id}`);
            $('form#delete').attr('action', `<?php echo base_url(); ?>/Status/delete/${outgoing_id}`);

            table.clear();
            table.ajax.url(`<?php echo base_url(); ?>/status/getInformasi/${outgoing_id}`).load();
            setInterval(function() {
                console.log(1)
                table.ajax.reload();
            }, 4000);
            $('#modalData').modal('show')
        });

        //table info
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

        //js history
        $('.cubicle-history').click(function() {
            let outgoing_id = $(this).data('cubicle');
            let cb_history = $(this).data('name'); // ambil atribut data name
            let cb_name = $(this).data('nama');

            $('#cb_name').html(cb_name);
            $('#outgoing_id').html(outgoing_id);
            $('#cb_history').html(cb_history); //rewrite cb_history , history IA

            tableHistory.clear();
            tableHistory.ajax.url(`<?php echo base_url(); ?>/status/getHistory/${outgoing_id}/${cb_history}`).load();

            setInterval(function() { //refresh data tiap 1 menit
                console.log(1)
                tableHistory.ajax.reload();
            }, 60000);

            // set new atribut href with jquery
            $('a.cubicle-chart').attr('href', `<?php echo base_url(); ?>/status/chart?cubicle=${outgoing_id}&history=${cb_history}`);

            $('#modalDataHistory').modal('show')
        });

        //table history
        var tableHistory = $('#tableCubicleHistory').DataTable({
            "bDestroy": true,
            "autoWidth": true,
            "ordering": true,
            "paging": true,
            "bFilter": true,
            "processing": true,
            dom: 'lBfrtip',
            buttons: [
                'excel', 'print'
            ],
            order: [
                [1, 'desc']
            ],
            columns: [{
                    data: 'name'
                },
                {
                    data: 'time'
                }
            ]
        });

        //js trafo
        $('.trafo').click(function() {
            let outgoing_id = $(this).data('cubicle');
            let cb_history = $(this).data('name'); // ambil atribut data name
            let cb_name = $(this).data('nama');

            $('#cb_name').html(cb_name);
            $('#outgoing_id').html(outgoing_id);

            tableTrafoHistory.clear();
            tableTrafoHistory.ajax.url(`<?php echo base_url(); ?>/status/getInformasiTrafo/${outgoing_id}`).load();

            setInterval(function() { //refresh data tiap 1 menit
                console.log(1)
                tableTrafoHistory.ajax.reload();
            }, 60000);

            $('#modalDataTrafo').modal('show')
        });

        //table trafo history
        var tableTrafoHistory = $('#tableTrafoHistory').DataTable({
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
            ]
        });

        //js beban
        $('.cubicle-beban').click(function() {
            let outgoing_id = $(this).data('cubicle');
            let cb_history = $(this).data('name');

            $('#outgoing_id').html(outgoing_id);
            $('#cb_history').html(cb_history);

            tableHistory.clear();
            tableHistory.ajax.url(`<?php echo base_url(); ?>/status/getBeban/${outgoing_id}/${cb_history}`).load();

            setInterval(function() { //refresh data tiap 1 menit
                console.log(1)
                tableHistory.ajax.reload();
            }, 60000);

            $('a.cubicle-chart').attr('href', `<?php echo base_url(); ?>/status/chart?cubicle=${outgoing_id}&history=${cb_history}`);
        });



        var minDate, maxDate;
        // Custom filtering function which will search data in column four between two values
        $.fn.dataTable.ext.search.push(
            function(settings, data, dataIndex) {
                var min = minDate.val();
                var max = maxDate.val();
                var date = new Date(data[4]);

                if (
                    (min === null && max === null) ||
                    (min === null && date <= max) ||
                    (min <= date && max === null) ||
                    (min <= date && date <= max)
                ) {
                    return true;
                }
                return false;
                // table.draw();
            }
        );

        $('.cubicle-history').ready(function() {
            // Create date inputs
            minDate = new DateTime($('#min'), {
                format: 'MMMM Do YYYY'
            });
            maxDate = new DateTime($('#max'), {
                format: 'MMMM Do YYYY'
            });
            // DataTables initialisation
            var table = $('#example').DataTable();
            // Refilter the table
            $('#min, #max').on('change', function() {
                table.draw();
            });
        });
    </script>
    <?= $this->endSection(); ?>
</div>