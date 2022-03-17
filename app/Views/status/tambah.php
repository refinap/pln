<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3"> Tambah Data</h2>
            <form action="/status/save" method="post">
                <?= csrf_field(); ?>

                <div class="row mb-3">
                    <label for="area" class="col-sm-2 col-form-label">Area</label>
                    <div class="col-sm-10">
                        <select class="form-select data-exting" aria-label="Default select example" id="area" name="area" autofocus>
                            <option selected></option>
                            <?php foreach ($apj as $a) : ?>
                                <option value="<?php echo $a->APJ_ID; ?>"><?php echo $a->APJ_NAMA; ?></option>
                            <?php endforeach ?>

                        </select>
                        <div class="input-group  data-added mb-3" style="display: none;">
                            <input type="text" style="display: none;" class="form-control data-added" placeholder="UP3 Baru" id="area" name="area" aria-describedby="button-addon1">
                            <button class="btn btn-danger" type="button" id="btl-area-lainnya">Batal</button>
                        </div>
                        <input type="text" style="display: none;" class="form-control data-added" id="area" name="area">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="GARDU_INDUK_NAMA">

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="gardu_induk" class="col-sm-2 col-form-label">Gardu Induk</label>
                    <div class="col-sm-10">
                        <select class="form-select data-exting" aria-label="Default select example" id="gi" name="gi" autofocus>
                            <option selected></option>
                            <option selected></option>
                            <option value="GARDU_INDUK_ID">Bukit Semarang</option>
                            <option value="lainnya">Lainnya.. </option>
                        </select>
                        <div class="input-group  data-added mb-3" style="display: none;">
                            <input type="text" style="display: none;" class="form-control data-added" placeholder="Gardu Induk Baru" id="gardu_induk" name="gardu_induk" aria-describedby="button-addon2">
                            <button class="btn btn-danger" type="button" id="btl-gi-lainnya">Batal</button>
                        </div>
                        <input type="text" style="display: none;" class="form-control data-added" id="gardu induk" name="gardu_induk">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="trafo" class="col-sm-2 col-form-label">Trafo</label>
                    <div class="col-sm-10">
                        <select class="form-select data-exting" aria-label="Default select example" id="trafo" name="trafo" autofocus>
                            <option selected></option>
                            <option value="INCOMING_ID"> Trafo01_BSB </option>
                            <option value="lainnya">Lainnya.. </option>
                        </select>
                        <div class="input-group  data-added mb-3" style="display: none;">
                            <input type="text" style="display: none;" class="form-control data-added" placeholder="Incoming Baru" id="trafo" name="trafo" aria-describedby="button-addon2">
                            <button class="btn btn-danger" type="button" id="btl-trafo-lainnya">Batal</button>
                        </div>
                        <input type="text" style="display: none;" class="form-control data-added" id="trafo" name="trafo">

                    </div>
                </div>


                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">Cubicle</label>
                    <div class="col-sm-10">
                        <select class="form-select data-exting" aria-label="Default select example" id="cubicle" name="cubicle" autofocus>
                            <option selected></option>
                            <option value="lainnya">Lainnya.. </option>
                        </select>
                        <div class="input-group  data-added mb-3" style="display: none;">
                            <input type="text" class="form-control" placeholder="Outgoing Baru" aria-label="Recipient's username" aria-describedby="button-addon1">
                            <button class="btn btn-danger" type="button" id="btl-cubicle-lainnya">Batal</button>
                        </div>
                        <input type="text" style="display: none;" class="form-control data-added" id="cubicle" name="cubicle">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script>
    $("#area").change(function() {
        let id_area = $(this).val();

        // ajax kui wis maen type data array / JSON
        // ora dolan view
        $.ajax({
            url: `http://localhost:8080/status/cekstatus/${id_area}`,
            success: function(result) {
                console.log(result)

                // golek looping sing pas nggo array, loop array using js
                for (const child of result) {
                    $('#gi option:first').after($('<option />', {
                        "value": child.id,
                        text: child.nama
                    }));
                }
            }
        });
    });

    $("#gi").change(function() {
        let id_gi = $(this).val();

        if (id_gi === 'lainnya') {
            console.log('cahnged')
            $('.data-exting').hide()
            $('.data-added').show()
            return;
        }


        // ajax kui wis maen type data array / JSON
        // ora dolan view
        $.ajax({
            url: "url/area/{id_area}",
            success: function(result) {
                console.log(result)
                result.data.forEach(items => {
                    $('#gi option:first').after($('<option />', {
                        "value": items.id,
                        text: items.nama_gardu
                    }));
                });
            }
        });
    });

    $("#btl-area-lainnya").click(function() {

        $('.data-area-exting').show()
        $('.data-area-added').hide()
    });

    $("#btl-gi-lainnya").click(function() {

        $('.data-gi-exting').show()
        $('.data-gi-added').hide()
    });

    $("#btl-trafo-lainnya").click(function() {

        $('.data-trafo-exting').show()
        $('.data-trafo-added').hide()
    });

    $("#btl-cubicle-lainnya").click(function() {

        $('.data-cubicle-exting').show()
        $('.data-cubicle-added').hide()
    });
</script>
<?= $this->endSection(); ?>