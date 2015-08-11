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
    

// trim
$str2 = "\n\t\t***DON'T LOSE YOUR WAAAAY***\t\t\n";
print('<br/>');
print(trim($str2) . '<br/>');
print(ltrim($str2, "\n") . '<br/>');
print(rtrim($str2, "\n\t*") . '<br/>');

// addcsslashes() and stripcslashes()
$str3 = 'Butter Coconut';
print(addcslashes($str3, 'u'));
print(stripcslashes($str3));

?>
</body>
</html>