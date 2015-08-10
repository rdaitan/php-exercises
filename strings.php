<html>
<body>
<?php

// heredoc
$str1 = <<< EOF
    The quick brown fox
    jumps over the lazy dog.
EOF;

echo "<p>$str1</p>";

// echo example
echo '<p>';
echo 'heyo', 'yo';
echo '</p>';

//echo ('yo', 'heyo');


// printf()
$str_format = "%'&+8.2d";
printf($str_format, 1984);


// string offset
$alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
for($i = 1; $i <= 26; $i = $i << 1)
    printf("%s ", $alphabet{$i - 1});
    

?>
</body>
</html>