<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
      <div class="row">
            <div class="col">
                  <div class="position-relative">
                        <h1 class="mt-3"> History Beban </h1>
                        <a href="/status/index" button type="button" class="btn-close position-absolute top-0 end-0" aria-label="Close"></a></button>
                        <table class="table table-bordered">
                              <thead>
                                    <tr>
                                          <th scope="col">Keterangan</th>
                                          <th scope="col">Nilai</th>
                                          <th scope="col">Waktu</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                          <td>IA</td>
                                          <td><?= $h['IA']; ?></td>
                                          <td><?= $h['IA_TIME']; ?></td>
                                    </tr>
                                    <tr>
                                          <td>IB</td>
                                          <td><?= $h['IB']; ?></td>
                                          <td><?= $h['IB_TIME']; ?></td>
                                    </tr>
                                    <tr>
                                          <td>IC</td>
                                          <td><?= $h['IC']; ?></td>
                                          <td><?= $h['IC_TIME']; ?></td>
                                    </tr>
                                    <tr>
                                          <td>IN</td>
                                          <td><?= $h['IN']; ?></td>
                                          <td><?= $h['IN_TIME']; ?></td>
                                    </tr>

                                    <tr>
                                          <td>VLL</td>
                                          <td><?= $h['VLL']; ?></td>
                                          <td><?= $h['VLL_TIME']; ?></td>
                                    </tr>
                                    <tr>
                                          <td>KW</td>
                                          <td><?= $h['KW']; ?></td>
                                          <td><?= $h['KW_TIME']; ?></td>
                                    </tr>
                                    <tr>
                                          <td>PF</td>
                                          <td><?= $h['PF']; ?></td>
                                          <td><?= $h['PF_TIME']; ?></td>
                                    </tr>
                                    <tr>
                                          <td>IFA</td>
                                          <td><?= $h['IFA']; ?></td>
                                          <td><?= $h['IFA_TIME']; ?></td>
                                    </tr>
                                    <tr>
                                          <td>IFB</td>
                                          <td><?= $h['IFB']; ?></td>
                                          <td><?= $h['IFB_TIME']; ?></td>
                                    </tr>
                                    <tr>
                                          <td>IFC</td>
                                          <td><?= $h['IFC']; ?></td>
                                          <td><?= $h['IFC_TIME']; ?></td>
                                    </tr>
                                    <tr>
                                          <td>IFN</td>
                                          <td><?= $h['IFN']; ?></td>
                                          <td><?= $h['IFN_TIME']; ?></td>
                                    </tr>
                              </tbody>
                        </table>
                        <a href="/status/index" class="btn btn-primary mb-3">Close</a><br>
                  </div>
            </div>
      </div>
</div>

<?= $this->endSection(); ?>