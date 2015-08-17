<?php
# change MIME type to text/xml
header("Content-Type: text/xml");
# echo header. must be echoed. otherwise, php will return a syntax error.
echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>";

?>
<rss version="0.91">
  <channel>
    <?php
    # rss items
    $items = array(
      array(
        'title' => 'Man Bites Dog',
        'link'  => 'http://www.example.com/dog.php',
        'desc'  => 'Ironic turnaround!'
      ),
      array(
        'title' => 'Medical Breakthrough!',
        'link'  => 'http://www.example.com/doc.php',
        'desc'  => 'Doctors announced a cure for me.'
      )
    );

    # echo contents
    foreach ($items as $item) {
      echo "<item>\n";
      echo "\t<title>{$item['title']}</title>\n";
      echo "\t<link>{$item['link']}</link>\n";
      echo "\t<description>{$item['desc']}</description>\n";
      echo "\t<language>en-us</language>\n";
      echo "</item>\n\n";
    }
    ?>
  </channel>
</rss>
