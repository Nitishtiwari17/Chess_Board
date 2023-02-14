
//1st Method
<table style="margin:auto">
    <?php
       for($row=1;$row<=8;$row++){
      echo "<tr>";
        for($col=1;$col<=8;$col++){
            if($col%2==0){
                $color='#fff';
            }else{
                $color='#000';
            }

            if($row%2==0){
                if($col%2==0){
                    $color='#000';
                }else{
                    $color='#fff';
               }  
            }
            echo "<td style='border:1px solid;height:60px;width:60px;background-color:".$color."'></td>";
        }
        echo "</tr>";
       }
    ?>
</table>

//2nd Method
<table style="margin:auto">
    <?php
    for($i=1;$i<=8;$i++){
        echo "<tr>";
        for($j=1;$j<=8;$j++){
            $tr_cell=$i+$j;
            if($tr_cell%2==0){
                  echo "<td style='border:1px solid;height:60px;width:60px;background-color:#fff'></td>";
            }else{
              echo "<td style='border:1px solid;height:60px;width:60px;background-color:#000'></td>";

            }
        }
    }
    ?>
    </table>
