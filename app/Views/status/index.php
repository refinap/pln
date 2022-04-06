<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container cubicle-wrapper">

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

    setInterval(function() {
        // prob = pass data opo sing kanggo
        $('.cubicle-wrapper').load(`/status/cIndexStatus?open=${item}`);
    }, 1000);

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