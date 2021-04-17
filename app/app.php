<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>P.143</title>

</head>



<body>
    <?php
    $k = 3;
    $n = 5;
    $s = array(0, 0, 0, 0, 0);
    $l = 1;
    $x = 0;
    $r = 0;


    $r = init();
    echo '<br>', $r, '<br>';
    while ($x < 5) {
        echo $s[$x];
        $x++;
    }
    while ($r = 0) {
        while ($x < 5) {
            echo $s[$x];
            $x++;
        }
    }
    

    function init()
    {
        $k = 3;
        $n = 5;
        $l = 0;
        if (1 <= $k && $k <= $n) {
            if ($l <= $n) {
                if ($l <= $k) {
                    $s[$l] = 1;
                    $l++;
                    echo $l;
                } else {
                    $s[$l] = 0;
                    $l++;
                }
            }
            return 0;
        } else {
            return -1;
        }
    }
    ?>
</body>




</html>