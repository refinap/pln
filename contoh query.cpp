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