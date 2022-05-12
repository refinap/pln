<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<button class="openbtn" onclick="openNav()" id="menu-btn">i</button>
<div class="container possition-relative">
    <!-- <div class="container cubicle-wrapper"> -->

    <div id="mySidebar" class="sidebar overflow-auto">
        <div class="title-bar navbar navbar-expand-l text-black overflow-auto" style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
            <h3 class="mb-0" style="height: 64.792px;">Keterangan
                <button class="btn btn-white fs-3" onclick="closeNav()">&times;</button>
            </h3>
        </div>
        <p><img width=40 src="/image/readyy.png" alt="">Ready</p>
        <p><img width=40 src="/image/notreadyy.png" alt="">Not Ready</p>
        <p><img width=40 src="/image/remotee.png" alt="">Remote</p>
        <p><img width=40 src="/image/lokall.png" alt="">Local</p>
        <p><img width=40 src="/image/rackinn.png" alt="">Rack In</p>
        <p><img width=40 src="/image/notgroundd.png" alt="">Not Ground</p>
        <p><img width=40 src="/image/groundd.png" alt="">Ground</p>
    </div>

    <div id="main">
        <div class="row overflow-auto">
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
                                <button class="accordion-button fs-5" data-acc="<?= $key ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $a->APJ_ID ?>" aria-expanded="true" aria-controls="collapse<?= $a->APJ_ID ?>">
                                    <?= $a->APJ_NAMA ?>
                                </button>
                            </h2>
                            <div id="collapse<?= $a->APJ_ID ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $a->APJ_ID ?>" data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    <!-- <a href="/status/tambah" class="btn btn-primary mb-3">Tambah Data Cubicle</a><br> -->
                                    <div class="container">
                                        <?php foreach ($a->gi as $g) : ?>
                                            <!-- <div id="bs-canvas-right" class="bs-canvas bs-canvas-anim bs-canvas-right position-fixed bg-light h-100"></div>
                                            <button class="btn btn-primary btn-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">i</button>
                                            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                                <div class="offcanvas-header">
                                                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Keterangan</h5>
                                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body">
                                                    <p><img width=50 src="/image/readyy.png" alt="">Ready</p>
                                                    <p><img width=50 src="/image/notreadyy.png" alt="">Not Ready</p>
                                                    <p><img width=50 src="/image/remotee.png" alt="">Remote</p>
                                                    <p><img width=50 src="/image/lokall.png" alt="">Local</p>
                                                    <p><img width=50 src="/image/rackinn.png" alt="">Rack In</p>
                                                    <p><img width=50 src="/image/notgroundd.png" alt="">Not Ground</p>
                                                    <p><img width=50 src="/image/groundd.png" alt="">Ground</p>
                                                </div>
                                            </div> -->
                                            <span class="fs-4"> GI <?php echo $g['GARDU_INDUK_NAMA']; ?></span>
                                            <br>
                                            <div class="card  border-dark mb-3">
                                                <div class="card-body">
                                                    <div class="row mt-3">

                                                        <div class="col-md-12 text-center">
                                                            <?php foreach ($g['incoming'] as $income) : ?>
                                                                <span class="fw-bold fs-5"><?php echo $income['NAMA_ALIAS_INCOMING']; ?></span>
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
                                                                                <button type="button" class="card-header text-center card-header-color btn-secondary cubicle btn-<?= $arr[0]; ?>" data-cubicle="<?php echo $cubic['OUTGOING_ID']; ?>" data-name="<?php echo $cubic['CUBICLE_NAME']; ?>">
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
                                                                                        <img class="img-fluid" src="/image/<?php echo $img ?>.png" alt="">
                                                                                        <?php echo $cubic['SESW'] ? '<img class="img-fluid position-absolute top-0 start-0" src="/image/ground.png" alt="">' : '<img class="img-fluid position-absolute top-0 start-0" src="/image/notground.png" alt="">' ?>

                                                                                        <?php echo $cubic['SCBP'] ? '<img class="img-fluid position-absolute top-0 start-0" src="/image/rackin.png" alt="">' : null ?>

                                                                                        <?php echo $cubic['SLR'] ? '<img class="img-fluid position-absolute top-0 start-0" src="/image/remote.png" alt="">' : '<img class="img-fluid position-absolute top-0 start-0" src="/image/lokal.png" alt="">' ?>

                                                                                        <?php echo $cubic['SRNR'] ? '<img class="img-fluid position-absolute top-0 start-0" src="/image/ready.png" alt="">' : '<img class="img-fluid position-absolute top-0 start-0" src="/image/notready.png" alt="">' ?>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-footer py-0 text-muted">
                                                                                    <div class="row">
                                                                                        <div class="col-4 border border-dark"> <strong><u>IA</u></strong> <br> <?php echo $cubic['IA'] ?? 0 ?> </div>
                                                                                        <div class="col-4 border border-dark"> <strong><u>IB</u></strong> <br> <?php echo $cubic['IB'] ?? 0 ?> </div>
                                                                                        <div class="col-4 border border-dark"> <strong><u>IC</u></strong> <br> <?php echo $cubic['IC'] ?? 0 ?> </div>
                                                                                        <div class="col-4 border border-dark"> <strong><u>IN</u></strong> <br> <?php echo $cubic['IN'] ?? 0 ?> </div>
                                                                                        <div class="col-4 border border-dark"> <strong><u>VLL</u></strong> <br> <?php echo $cubic['VLL'] ?? 0 ?> </div>
                                                                                        <div class="col-4 border border-dark"> <strong><u>KW</u></strong> <br> <?php echo $cubic['KW'] ?? 0 ?> </div>
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
        // $('#navigator').click(function() {
        //     $('div.sidenav').toggleClass('on');
        // });

        /* Atur lebar sidebar menjadi 250px dan margin kiri konten halaman menjadi 250px */
        function openNav() {
            document.getElementById("mySidebar").style.width = "200px";
            document.getElementById("main").style.marginLeft = "200px";
        }

        /* Atur lebar sidebar menjadi 0 dan margin kiri konten halaman menjadi 0 */
        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }

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
</div>