<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="position-relative">
                <a href="/status/index" button type="button" class="btn-close position-absolute top-0 end-0" aria-label="Close"></a></button>
                <h2 class="my-3"> Ubah Data Cubicle</h2>

                <form action="/status/update/ <?= $cubicle['OUTGOING_ID']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="row mb-3">
                        <label for="area" class="col-sm-2 col-form-label">Area</label>
                        <div class="col-sm-10">
                            <select disabled class="form-select data-exting" aria-label="Default select example" id="area" name="area" autofocus>
                                <option selected></option>
                                <?php foreach ($apj as $a) : ?>
                                    <option <?= ($cubicle['APJ_ID'] == $a->APJ_ID) ? 'selected' : null; ?> value="<?php echo $a->APJ_ID; ?>"><?php echo $a->APJ_NAMA; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="trafo" class="col-sm-2 col-form-label">Trafo</label>
                        <div class="col-sm-10">
                            <select disabled class="form-select data-exting" aria-label="Default select example" id="trafo" name="trafo">
                                <option value="<?php echo $trafo['INCOMING_ID']; ?>"><?php echo $trafo['NAMA_ALIAS_INCOMING']; ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="APJ_ID" class="col-sm-2 col-form-label">APJ ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="APJ_ID" placeholder="" name="APJ_ID" value="<?= $cubicle['APJ_ID']; ?>">
                        </div>
                    </div>
                    <!-- <input type="hidden" class="" id="APJ_ID" name="APJ_ID"> -->

                    <div class="row mb-3">
                        <label for="INCOMING_ID" class="col-sm-2 col-form-label">INCOMING ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="INCOMING_ID" placeholder="" name="INCOMING_ID" value="<?= $cubicle['INCOMING_ID']; ?>">
                        </div>
                    </div>


                    <input type="hidden" class="form-control" id="INCOMING_ID" placeholder="" name="INCOMING_ID">

                    <div class="row mb-3">
                        <label for="CUBICLE_NAME" class="col-sm-2 col-form-label">CUBICLE NAME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="CUBICLE_NAME" placeholder="" name="CUBICLE_NAME" value="<?= $cubicle['CUBICLE_NAME']; ?>">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="CUBCILE_TYPE" class="col-sm-2 col-form-label">CUBCILE TYPE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " id="CUBCILE_TYPE" placeholder="" name="CUBCILE_TYPE" value="<?= $cubicle['CUBICLE_TYPE']; ?>">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="OPERATION_TYPE" class="col-sm-2 col-form-label">OPERATION TYPE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="OPERATION_TYPE" placeholder="" name="OPERATION_TYPE" value="<?= $cubicle['OPERATION_TYPE']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="KETERANGAN" class="col-sm-2 col-form-label">KETERANGAN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " id="KETERANGAN" placeholder="" name="KETERANGAN" value="<?= $cubicle['KETERANGAN']; ?>">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="RELAY" class="col-sm-2 col-form-label">RELAY</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="RELAY" placeholder="" name="RELAY" value="<?= $cubicle['RELAY']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="MERK_RELAY" class="col-sm-2 col-form-label">MERK RELAY</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="MERK_RELAY" placeholder="" name="MERK_RELAY" value="<?= $cubicle['MERK_RELAY']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="NO_SERI_RELAY" class="col-sm-2 col-form-label">NO SERI RELAY</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NO_SERI_RELAY" placeholder="" name="NO_SERI_RELAY" value="<?= $cubicle['NO_SERI_RELAY']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="METER" class="col-sm-2 col-form-label">METER</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="METER" placeholder="" name="METER" value="<?= $cubicle['METER']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="MERK_METER" class="col-sm-2 col-form-label">MERK METER</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="MERK_METER" placeholder="" name="MERK_METER" value="<?= $cubicle['MERK_METER']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="NO_SERI_METER" class="col-sm-2 col-form-label">NO SERI METER</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NO_SERI_METER" placeholder="" name="NO_SERI_METER" value="<?= $cubicle['NO_SERI_METER']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="MERK_IO" class="col-sm-2 col-form-label">MERK IO</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="MERK_IO" placeholder="" name="MERK_IO" value="<?= $cubicle['MERK_IO']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="NO_SERI_IO" class="col-sm-2 col-form-label">NO SERI IO</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NO_SERI_IO" placeholder="" name="NO_SERI_IO" value="<?= $cubicle['NO_SERI_IO']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="MERK_INTERFACE" class="col-sm-2 col-form-label">MERK INTERFACE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="MERK_INTERFACE" placeholder="" name="MERK_INTERFACE">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="NO_SERI_INTERFACE" class="col-sm-2 col-form-label">NO SERI INTERFACE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NO_SERI_INTERFACE" placeholder="" name="NO_SERI_INTERFACE">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="MERK_PS" class="col-sm-2 col-form-label">MERK PS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="MERK_PS" placeholder="" name="MERK_PS" value="<?= $cubicle['MERK_PS']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="SETTING_CT" class="col-sm-2 col-form-label">SETTING CT</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="SETTING CT" placeholder="" name="SETTING_CT" value="<?= $cubicle['SETTING_CT']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="SETTING_PT" class="col-sm-2 col-form-label">SETTING PT</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="SETTING_PT" placeholder="" name="SETTING_PT">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="MERK" class="col-sm-2 col-form-label">MERK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="MERK" placeholder="" name="MERK" value="<?= $cubicle['MERK']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="MERK_CUBICLE" class="col-sm-2 col-form-label">MERK CUBICLE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="MERK_CUBICLE" placeholder="" name="MERK_CUBICLE">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="NO_SERI" class="col-sm-2 col-form-label">NO SERI</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NO_SERI" placeholder="" name="NO_SERI">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="DIMENSI" class="col-sm-2 col-form-label">DIMENSI</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="DIMENSI" placeholder="" name="DIMENSI">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="RNR" class="col-sm-2 col-form-label">RNR</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="RNR" placeholder="" name="RNR">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="TAHUN_OPERASI" class="col-sm-2 col-form-label">TAHUN OPERASI</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="TAHUN_OPERASI" placeholder="" name="TAHUN_OPERASI" value="<?= $cubicle['TAHUN_OPERASI']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="OCR_TD" class="col-sm-2 col-form-label">OCR TD</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="OCR_TD" placeholder="" name="OCR_TD" value="<?= $cubicle['OCR_TD']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="OCR_TMS_TD" class="col-sm-2 col-form-label">OCR TMS TD</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="OCR_TMS_TD" placeholder="" name="OCR_TMS_TD" value="<?= $cubicle['OCR_TMS_TD']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="OCR_CURVA" class="col-sm-2 col-form-label">OCR CURVA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="OCR_CURVA" placeholder="" name="OCR_CURVA" value="<?= $cubicle['OCR_CURVA']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="OCR_INST" class="col-sm-2 col-form-label">OCR INST</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="OCR_INST" placeholder="" name="OCR_INST">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="OCR_T_INST<" class="col-sm-2 col-form-label">OCR T INST</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="OCR_T_INST" placeholder="" name="OCR_T_INST">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="GFR_TD" class="col-sm-2 col-form-label">GFR TD</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="GFR_TD" placeholder="" name="GFR_TD" value="<?= $cubicle['GFR_TD']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="GFR_TMS_TD" class="col-sm-2 col-form-label">GFR TMS TD</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="GFR_TMS_TD" placeholder="" name="GFR_TMS_TD" value="<?= $cubicle['GFR_TMS_TD']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="GFR_CURVA" class="col-sm-2 col-form-label">GFR CURVA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="GFR_CURVA" placeholder="" name="GFR_CURVA" value="<?= $cubicle['GFR_CURVA']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="GFR_INST" class="col-sm-2 col-form-label">GFR INST</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="GFR_INST" placeholder="" name="GFR_INST">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="GFR_T_INST" class="col-sm-2 col-form-label">GFR T INST</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="GFR_T_INST" placeholder="" name="GFR_T_INST">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="UPJ_ID" class="col-sm-2 col-form-label">UPJ ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="UPJ ID" placeholder="" name="UPJ_ID" value="<?= $cubicle['UPJ_ID']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="UPJ_ID2" class="col-sm-2 col-form-label">UPJ ID2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="UPJ_ID2" placeholder="" name="UPJ_ID2" value="<?= $cubicle['UPJ_ID2']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="OCR_HS1" class="col-sm-2 col-form-label">OCR HS1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="OCR_HS1" placeholder="" name="OCR_HS1" value="<?= $cubicle['OCR_HS1']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="OCR_T_HS1" class="col-sm-2 col-form-label">OCR T HS1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="OCR_T_HS1" placeholder="" name="OCR_T_HS1" value="<?= $cubicle['OCR_T_HS1']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="OCR_HS2" class="col-sm-2 col-form-label">OCR HS2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="OCR_HS2" placeholder="" name="OCR_HS2" value="<?= $cubicle['OCR_HS2']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="OCR_T_HS2" class="col-sm-2 col-form-label">OCR T HS2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="OCR_T_HS2" placeholder="" name="OCR_T_HS2" value="<?= $cubicle['OCR_T_HS2']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="GFR_HS1" class="col-sm-2 col-form-label">GFR HS1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="GFR_HS1" placeholder="" name="GFR_HS1" value="<?= $cubicle['GFR_HS1']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="GFR_T_HS1" class="col-sm-2 col-form-label">GFR T HS1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="GFR_T_HS1" placeholder="" name="GFR_T_HS1" value="<?= $cubicle['GFR_T_HS1']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="GFR_HS2" class="col-sm-2 col-form-label">GFR HS2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="GFR_HS2" placeholder="" name="GFR_HS2" value="<?= $cubicle['GFR_HS2']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="GFR_T_HS2" class="col-sm-2 col-form-label">GFR T HS2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="GFR_T_HS2" placeholder="" name="GFR_T_HS2" value="<?= $cubicle['GFR_T_HS2']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="USER_UPDATE" class="col-sm-2 col-form-label">USER UPDATE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="USER_UPDATE" placeholder="" name="USER_UPDATE" value="<?= $cubicle['USER_UPDATE']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="LAST_UPDATE" class="col-sm-2 col-form-label">LAST UPDATE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="LAST_UPDATE" placeholder="" name="LAST_UPDATE" value="<?= $cubicle['LAST_UPDATE']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IA" class="col-sm-2 col-form-label">IA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IA" placeholder="" name="IA">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IA_TIME" class="col-sm-2 col-form-label">IA TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IA_TIME" placeholder="" name="IA_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IB" class="col-sm-2 col-form-label">IB</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IB" placeholder="" name="IB">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IB_TIME" class="col-sm-2 col-form-label">IB TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IB_TIME" placeholder="" name="IB_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IC" class="col-sm-2 col-form-label">IC</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IC" placeholder="" name="IC">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IC_TIME" class="col-sm-2 col-form-label">IC TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IC_TIME" placeholder="" name="IC_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IN" class="col-sm-2 col-form-label">IN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IN" placeholder="" name="IN">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IN_TIME" class="col-sm-2 col-form-label">IN TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IN_TIME" placeholder="" name="IN_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IA2" class="col-sm-2 col-form-label">IA2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IA2" placeholder="" name="IA2">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IA2_TIME" class="col-sm-2 col-form-label">IA2 TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IA2_TIME" placeholder="" name="IA2_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IB2" class="col-sm-2 col-form-label">IB2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IB2" placeholder="" name="IB2">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IB2_TIME" class="col-sm-2 col-form-label">IB2 TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IB2_TIME" placeholder="" name="IB2_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IC2" class="col-sm-2 col-form-label">IC2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IC2" placeholder="" name="IC2">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IC2_TIME" class="col-sm-2 col-form-label">IC2 TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IC2_TIME" placeholder="" name="IC2_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IN2" class="col-sm-2 col-form-label">IN2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IN2" placeholder="" name="IN2">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IN2_TIME" class="col-sm-2 col-form-label">IN2 TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IN2_TIME" placeholder="" name="IN2_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="VLL" class="col-sm-2 col-form-label">VLL</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="VLL" placeholder="" name="VLL">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="VLL_TIME" class="col-sm-2 col-form-label">VLL TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="VLL TIME" placeholder="" name="VLL TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="KW" class="col-sm-2 col-form-label">KW</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="KW" placeholder="" name="KW">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="KW_TIME" class="col-sm-2 col-form-label">KW TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="KW_TIME" placeholder="" name="KW_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="PF" class="col-sm-2 col-form-label">PF</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="PF" placeholder="" name="PF">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="PF_TIME" class="col-sm-2 col-form-label">PF TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="PF_TIME" placeholder="" name="PF_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IFA" class="col-sm-2 col-form-label">IFA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IFA" placeholder="" name="IFA">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IFA_TIME" class="col-sm-2 col-form-label">IFA TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IFA_TIME" placeholder="" name="IFA_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IFB" class="col-sm-2 col-form-label">IFB</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IFB" placeholder="" name="IFB">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IFB_TIME" class="col-sm-2 col-form-label">IFB TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IFB_TIME" placeholder="" name="IFB_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IFC" class="col-sm-2 col-form-label">IFC</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IFC" placeholder="" name="IFC">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IFC_TIME" class="col-sm-2 col-form-label">IFC TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IFC_TIME" placeholder="" name="IFC_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IFN" class="col-sm-2 col-form-label">IFN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IFN" placeholder="" name="IFN">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="IFN_TIME" class="col-sm-2 col-form-label">IFN TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="IFN_TIME" placeholder="" name="IFN_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="SCB" class="col-sm-2 col-form-label">SCB</label>
                        <div class="col-sm-10">
                            <input type="int" class="form-control" id="SCB" placeholder="" name="SCB">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="SCB_TIME" class="col-sm-2 col-form-label">SCB TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="SCB_TIME" placeholder="" name="SCB_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="SLR" class="col-sm-2 col-form-label">SLR</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="SLR" placeholder="" name="SLR">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="SLR_TIME" class="col-sm-2 col-form-label">SLR TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="SLR_TIME" placeholder="" name="SLR_TIME">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="SRNR" class="col-sm-2 col-form-label">SRNR</label>
                        <div class="col-sm-10">
                            <input type="int" class="form-control" id="SRNR" placeholder="" name="SRNR">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="SRNR_TIME" class="col-sm-2 col-form-label">SRNR TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="SRNR_TIME" placeholder="" name="SRNR_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="SESW" class="col-sm-2 col-form-label">SESW</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="SESW" placeholder="" name="SESW">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="SESW_TIME" class="col-sm-2 col-form-label">SESW TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="SESW_TIME" placeholder="" name="SESW_TIME">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="SCBP" class="col-sm-2 col-form-label">SCBP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="SCBP" placeholder="" name="SCBP">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="SCBP_TIME" class="col-sm-2 col-form-label">SCBP TIME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="SCBP_TIME" placeholder="" name="SCBP_TIME">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>