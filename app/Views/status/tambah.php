<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3"> Tambah Data Cubicle</h2>
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

                    </div>
                </div>


                <div class="row mb-3">
                    <label for="gardu_induk" class="col-sm-2 col-form-label">Gardu Induk</label>
                    <div class="col-sm-10">
                        <select class="form-select data-exting" aria-label="Default select example" id="gi" name="gi" autofocus>
                            <option selected></option>
                            <!-- < ? php foreach ($incoming as $i) : ?>
                                <option value="< ? echo $i->GARDU_INDUK_ID; ?>">< ?php echo $a->GARDU_INDUK_NAMA; ?></option>
                            < ? php endforeach  -->
                        </select>

                    </div>
                </div>


                <div class="row mb-3">
                    <label for="trafo" class="col-sm-2 col-form-label">Trafo</label>
                    <div class="col-sm-10">
                        <select class="form-select data-exting" aria-label="Default select example" id="trafo" name="trafo" autofocus>
                            <option selected></option>
                            <!-- <div class="input-group  data-added mb-3" style="display: none;">
                                <input type="text" style="display: none;" class="form-control data-added" placeholder="Incoming Baru" id="trafo" name="trafo" aria-describedby="button-addon2">
                                <button class="btn btn-danger" type="button" id="btl-trafo-lainnya">Batal</button>
                            </div>
                            <input type="text" style="display: none;" class="form-control data-added" id="trafo" name="trafo"> -->
                        </select>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">APJ ID</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">SUPPLY APJ</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">INCOMING_ID</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">CUBICLE NAME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">CUBCILE TYPE</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">OPERATION TYPE</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">KETERANGAN</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">RELAY</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">MERK RELAY</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">NO SERI RELAY</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">METER</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">MERK METER</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">NO SERI METER</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">MERK IO</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">NO SERI IO</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">MERK INTERFACE</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">NO SERI INTERFACE</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">MERK PS</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">SETTING CT</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">SETTING PT</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">MERK</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">MERK CUBICLE</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">NO SERI</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">DIMENSI</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">RNR</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">TAHUN OPERASI</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">OCR TD</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">OCR TMS TD</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">OCR CURVA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">OCR INST</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">OCR T INST</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">GFR TD</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">GFR TMS TD</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">GFR CURVA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">GFR INST</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">GFR T INST</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">UPJ ID</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">UPJ ID2</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">OCR HS1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">OCR T HS1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">OCR HS2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">OCR T HS2</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">GFR HS1</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">GFR T HS1</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">GFR HS2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">GFR T HS2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">USER UPDATE</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">LAST UPDATE</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IA</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IA TIME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IB</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IB TIME</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IC</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IC TIME</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IN</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IN TIME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IA2</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IA2 TIME</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IB2</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IB2 TIME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IC2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IC2 TIME</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IN2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IN2 TIME</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">VLL</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">VLL TIME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">KW</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">KW TIME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">PF</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">PF TIME</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IFA</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IFA TIME</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IFB</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IFB TIME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IFC</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IFC TIME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IFN</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">IFN TIME</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">SCB</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">SCB TIME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">SLR</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">SLR TIME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">SRNR</label>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">SRNR TIME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">SESW</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">SESW TIME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">SCBP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cubicle" class="col-sm-2 col-form-label">SCBP TIME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cubicle" placeholder="" name="cubicle">
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
        let $APJ_ID = $(this).val();
        $.ajax({
            url: `http://localhost:8080/status/cekstatus/${$APJ_ID}`,
            success: function(result) {
                var result = [...result.gi];

                // golek looping sing pas nggo array, loop array using js
                for (const child of result) {
                    $('#gi option:first').after($('<option />', {
                        "value": child.GARDU_INDUK_ID,
                        text: child.GARDU_INDUK_NAMA
                    }));
                }
            }
        });
    });

    $("#gi").change(function() {
        let $GARDU_INDUK_ID = $(this).val();

        console.log($GARDU_INDUK_ID)
        $.ajax({
            url: `http://localhost:8080/status/getTrafo/${$GARDU_INDUK_ID}`,
            success: function(result) {
                var result = [...result.trafo];
                console.log(result)

                // golek looping sing pas nggo array, loop array using js
                for (const child of result) {
                    $('#trafo option:first').after($('<option />', {
                        "value": child.INCOMING_ID,
                        text: child.NAMA_ALIAS_INCOMING
                    }));
                }
            }
        })
    });



    $("#btl-area-lainnya").click(function() {

        $('.data-area-exting').show()
        $('.data-area-added').hide()
    });

    $("#btl-gi-lainnya").click(function() {

        $('.data-gi-exting').show()
        $('.data-gi-added').hide()
    });

    $("#btl-incoming-lainnya").click(function() {

        $('.data-incoming-exting').show()
        $('.data-incoming-added').hide()
    });

    $("#btl-cubicle-lainnya").click(function() {

        $('.data-cubicle-exting').show()
        $('.data-cubicle-added').hide()
    });
</script>
<?= $this->endSection(); ?>