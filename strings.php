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
print('<br/>');

// soundex & metaphone
$known = 'Fred';
$query = 'Phred';

$soundex_known = soundex($known);
$soundex_query = soundex($query);

$metaphone_known = metaphone($known);
$metaphone_query = metaphone($query);

print("$soundex_known $soundex_query<br/>"); 
print("$metaphone_known $metaphone_query<br/>");

// substr_replace()
$str4 = 'Rise and shine, Mr. Freeman';
$str4 = substr_replace($str4, 's-shine', 9, 5);
print("$str4<br/>");

// explode()
$str5 = 'donut, chocolate, pancake, cupcake, pretzel';
var_dump(explode(', ', $str5)); print('<br/>');
var_dump(explode(', ', $str5, 3)); // get only the first two,
                                  // and the rest of the string
print('<br/>');

// implode()
$animals = array('cat', 'dog', 'turtle', 'rabbit');
var_dump(implode(' | ', $animals));
print('<br/>');

// strtok()
$token = strtok($str5, ', ');
while($token !== false) {
    print("{$token}<br/>");
    $token = strtok(', ');
}

// sscanf()
$info = 'Daitan, R Bonifacio - 21';
var_dump(sscanf($info, "%[^','], %s %s - %d")); print('<br/>');
// %[^','] would accept any character except ','. using %s would 
// accept any string even if it includes a comma. because of this,
// parsing other tokens would fail.
// https://support.microsoft.com/en-us/kb/38335

sscanf($info, "%[^','], %s %s - %d", $lastname, $firstname, $middlename, $age);
printf("His name is %s %s %s. He is %d years old.<br/>", $firstname, $middlename, $lastname, $age);
    
?>
</body>
</html>