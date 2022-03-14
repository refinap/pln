$query_apj = "SELECT * FROM dc_apj";
      FOREACH($query_apj as $apj)
      {
            $query_gi = "SELECT * FROM dc_gardu_induk WHERE APJ_ID = $apj";
            FOREACH($query_gi as $ $gi)
            {
                   $query_inc = "SELECT * FROM dc_incoming WHERE GI_ID=$gi";
                  FOREACH($query_inc as $inc)
                  {
                        $query_cubicle = "SELECT * FROM dc_cubicle WHERE INC_ID=$inc";
                        FOREACH($query_cubicle as $cubicle)
                        {
                              $query_status = "SELECT * FROM dc_cubicle WHERE OUTGOING_ID = $cubicle"
                              $status = $query_status["SCB"];
                              IF($status==NULL)
                              {
                              echo "Cadangan";
                              }
                              ELSEIF($status==1)
                              {
                              echo "CLOSE";
                              }
                              ELSEIF($status==0)
                              {
                              echo "OPEN";
                              }
                              ELSE{
                              echo "Invalid";
                              }
                        }
                  }
            }
      }
}



====================================================================

$apj = "SELECT * FROM dc_apj";
      FOREACH($apj as $a)
      {
            $gi = "SELECT * FROM dc_gardu_induk WHERE APJ_ID = $a";
            FOREACH($gi as $ $g)
            {
                   $inc = "SELECT * FROM dc_incoming WHERE GARDU_INDUK_ID =$g";
                  FOREACH($incoming as $i)
                  {
                        $cubicle = "SELECT * FROM dc_cubicle WHERE INCOMING_ID=$i";
                        FOREACH($cubicle as $c)
                        {
                              $status = "SELECT * FROM dc_cubicle WHERE OUTGOING_ID = $c"
                              $status = $query_status["SCB"];
                              IF($status==NULL)
                              {
                              echo "Cadangan";
                              }
                              ELSEIF($status==1)
                              {
                              echo "CLOSE";
                              }
                              ELSEIF($status==0)
                              {
                              echo "OPEN";
                              }
                              ELSE{
                              echo "Invalid";
                              }
                        }
                  }
            }
      }
}



====================================================================
<?php $apj = "SELECT * FROM dc_apj" ?>
            <?php foreach ($apj as $a) : ?>                 
                    <?php  $gi = "SELECT * FROM dc_gardu_induk WHERE APJ_ID = $a" ?>
                    
                    <?php foreach ($gi as $g) : ?>
                        <?php $incoming = "SELECT * FROM dc_incoming WHERE GARDU_INDUK_ID = $g" ?>
                       
                        <?php foreach ($incoming as $i) : ?>
                            <?php $cubicle = "SELECT * FROM dc_cubicle WHERE OUTGOING_ID = $i"?>
                            <?php foreach ($cubicle as $c) : ?>

							<?php endforeach; ?>
                        <?php endforeach; ?> 
					<?php endforeach; ?> 
             <?php endforeach; ?



==============================================

<? $this->db->select('dc_upj , dc_gardu_induk, dc_incoming_feeder, dc_cubile') ?>
            <? $this->db->join ('upj', 'UPJ_ID' = 'gardu_induk')?>
            <? $this->db->join ('gardu_induk', 'GARDU_INDUK_ID' = 'gardu_induk')?>


============================
 <?php foreach ($a->$gi as $g) : ?>
                    <? $g['GARDU_INDUK_NAMA']; ?>
                    <?php foreach ($g->$incoming as $i) : ?>
                        <? $i['NAMA_ALIAS_INCOMING']; ?>
                        <?php foreach ($i->$cubicle as $c) : ?>
                            <? $c['CUBICLE_NAME']; ?>
                            <?php if ($c['SCB'] === '1') : ?>
                                <div class="btn-group-vertical">
                                    <p class="fs-5"><?= $c['CUBICLE_NAME']; ?></p>
                                    <button type="button" class="btn btn-danger">Close</button>
                                </div>
                            <?php elseif ($c['SCB'] === '0') : ?>
                                <div class="btn-group-vertical">
                                    <p class="fs-5"><?= $c['CUBICLE_NAME']; ?></p>
                                    <button type="button" class="btn btn-success">Open</button>
                                </div>
                            <?php elseif ($c['SCB'] === 'NULL') : ?>
                                <div class="btn-group-vertical">
                                    <p class="fs-5"><?= $c['CUBICLE_NAME']; ?></p>
                                    <button type="button" class="btn btn-success">Cadangan</button>
                                </div>

                            <?php else : ?>
                                <div class="btn-group-vertical">
                                    <p class="fs-5"><?= $c['CUBICLE_NAME']; ?></p>
                                    <button type="button" class="btn btn-daark">invalid</button>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>