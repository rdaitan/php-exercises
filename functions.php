<html>
    <head>
        <title>Functions</title>
    </head>
    <body>
        <h1>functions</h1>
        <?php function column() { ?>
            <td>column</td>
        <?php } ?>
        <?php
            for ($i = 0; $i < 10 ; $i++)
                column();
        ?>        
    </body>
</html>

<?php
// nested function
function before($str_b4) {
    echo "1 $str_b4 ";
    function after($str_af) {
        echo "3 $str_b4 ";
        echo "4 $str_af ";
    }
    echo "2 TWO ";
}

//after("HEYO");
//before("FOO");

//before("YO");
//echo "  STOP!  ";
//after("SUP");
//
//after("OH");
//before("MY");
        
// global variable

$yo = 'yo';

function hey() {
    global $yo;
    echo $yo . '!';
}

hey();

// static

function heyo() {
    static $str = 'hey';
    $str .= 'o';
    echo "<br/>$str";
}

for ($i = 0; $i < 4; $i++)
    heyo();
