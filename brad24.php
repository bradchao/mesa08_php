
<table border="1" width="100%">
    <?php
        for ($j=0; $j<10; $j++){
            echo '<tr>';
            for ($i=1; $i<=10; $i++){
                $v = $j*10 + $i;

                $isp = true;
                for ($k=2; $k<$v/2; $k++){
                    if ($v % $k == 0){
                        $isp = false;
                        break;
                    }
                }

                if ($v == 1) $isp = false;

                if ($isp){
                    echo '<td bgcolor="yellow">';
                }else{
                    echo '<td>';
                }

                echo $v;
                echo '</td>';
            }
            echo '</tr>';
        }
    ?>

</table>