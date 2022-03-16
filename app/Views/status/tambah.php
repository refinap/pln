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
                        <select class="form-select area" aria-label="Default select example" id="area" name="area" autofocus>
                            <option selected></option>
                            <option value="ikan"> oke </option>
                            <option value="penyu"> oke 1 </option>
                            <!-- iki loop kota -->
                            <!-- foreeach(){ 
                                    <option value="3">Three</option>

                                } -->
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gardu_induk" class="col-sm-2 col-form-label">Gardu Induk</label>
                    <div class="col-sm-10">
                        <select class="form-select data-exting" aria-label="Default select example" id="gi" name="gi" autofocus>
                            <option selected></option>
                            ...
                            <option value="lainnya">Lainnya.. </option>
                        </select>

                        <div class="input-group  data-added mb-3" style="display: none;">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="btl-gi-lainnya">Batal</button>
                        </div>

                        <input type="text" style="display: none;" class="form-control data-added" id="gardu induk" name="gardu_induk">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="trafo" class="col-sm-2 col-form-label">Trafo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="trafo" name="trafo">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">Cubicle</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" name="cubicle">
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
        let id_area = $(this).val();

        if (id_area === 'lainnya') {
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
    $("#btl-gi-lainnya").click(function() {

        $('.data-gi-exting').show()
        $('.data-gi-added').hide()
    });
</script>
<?= $this->endSection(); ?>