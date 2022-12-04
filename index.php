<html>
    <head>
        <title>TEST PHP</title>
        <link href="style.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="main__div">
        <div class="head__div">Таблиця Множення</div>
        <?php

        for ($item = 1; $item <= 10;$item+=1){
            $col = 'black';
            switch ($item){
                case 1:
                    $col = "#c7bfe6";
                    break;
                case 2:
                    $col = "#b5e51d";
                    break;
                case 3:
                    $col = "#fff100";
                    break;
                case 4:
                    $col = "#00a3eb";
                    break;
                case 5:
                    $col = "#f57981";
                    break;
                case 6:
                    $col = "#fccd03";
                    break;
                case 7:
                    $col = "#c2c2c2";
                    break;
                case 8:
                    $col = "#fa842d";
                    break;
                case 9:
                    $col = "#d1a4ff";
                    break;
                case 10:
                    $col = "#c79a7b";
                    break;

            }
           echo '<div class="child__div" style="background-color: '.$col.' ">';
           for ($i = 1; $i < 10; $i +=1){
               echo"$i x $item = ";
               echo $i * $item;
               echo '<br>';
           }
            echo'</div>';
        }
         ?>
        </div>
    </body>
</html>