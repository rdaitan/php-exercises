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

?>
</body>
</html>