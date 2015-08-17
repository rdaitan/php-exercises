<?php
class BookList {
  const FIELD_TYPE_SINGLE     = 1;
  const FIELD_TYPE_ARRAY      = 2;
  const FIELD_TYPE_CONTAINER  = 3;

  var $parser;
  var $record;
  var $currentField;
  var $fieldType;
  var $endsRecord;
  var $records;

  function __construct($filename) {
    $this->parser = xml_parser_create();
    xml_set_object($this->parser, $this);
    xml_set_element_handler($this->parser, 'elementStarted', 'elementEnded');
    xml_set_character_data_handler($this->parser, 'handleCdata');

    $this->fieldType = array(
      'title'   => self::FIELD_TYPE_SINGLE,
      'author'  => self::FIELD_TYPE_ARRAY,
      'isbn'    => self::FIELD_TYPE_SINGLE,
      'comment' => self::FIELD_TYPE_SINGLE
    );

    $this->endsRecord = array('book' => true);

    $xml = implode('', file($filename));
    xml_parse($this->parser, $xml);

    xml_parser_free($this->parser);
  }

  function elementStarted($parser, $element, &$attributes) {
    $element = strtolower($element);

    if (isset($this->fieldType[$element])) {
      $this->currentField = $element;
    }
    else {
      $this->currentField = '';
    }
  }

  function elementEnded($parser, $element) {
    $element = strtolower($element);

    if(isset($this->endsRecord[$element])) {
      $this->records[]  = $this->record;
      $this->record     = array();
    }

    $this->currentField = '';
  }

  function handleCdata($parser, $text) {
    $fieldType = array_key_exists($this->currentField, $this->fieldType) ? $this->fieldType[$this->currentField] : '';
    if ($fieldType == self::FIELD_TYPE_SINGLE) {
      isset($this->record[$this->currentField]) or $this->record[$this->currentField] = '';
      $this->record[$this->currentField] .= $text;
      // print_r($this->record);
    }
    elseif ($fieldType == self::FIELD_TYPE_ARRAY) {
      $this->record[$this->currentField][] = $text;
    }
  }

  function showMenu() {
    echo "<table>\n";

    foreach ($this->records as $book) {
      echo "<tr>\n";
      echo "\t<th>\n";
      echo "\t\t<a href=\"{$_SERVER['PHP_SELF']}?isbn={$book['isbn']}\">";
      echo "\t\t\t{$book['title']}";
      echo "\t\t</a>";
      echo "<td>" . join(', ', $book['author']) . "</td>\n";
      echo "\t</th>\n";
      echo "</tr>\n";
    }
  }

  function showBook($isbn) {
    foreach ($this->records as $book) {
      // print_r($book);
      if ($book['isbn'] !== $isbn) continue;

      echo "<p><b>{$book['title']}</b> by " . implode(', ', $book['author']) . "</br>";
      echo "ISBN: {$book['isbn']}<br/>";
      echo "Comment: {$book['comment']}</p>\n";
    }

    echo "<p>Back to the <a href=\"{$_SERVER['PHP_SELF']}\"> list of books </a><p>\n";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Library</title>
</head>
<body>
<?php
$library = new BookList("books.xml");

if (isset($_GET['isbn'])) {
  $library->showBook($_GET['isbn']);
}
else {
  $library->showMenu();
}
?>
</body>
</html>
