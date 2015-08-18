<?php
function fillTemplate($template, $bindings = array(), $unhandled = 'delete') {
  // open and read the contents of the template.
  $template         = $_SERVER['DOCUMENT_ROOT'] . '/php-exercises/templating/templates/' . $template;
  $templateFile     = fopen($template, 'r');
  $templateContent  = '';
  if($templateFile) {
    $templateContent = fread($templateFile, filesize($template));
    fclose($templateFile);
  }

  // replace the markers with their values
  $markers = array_keys($bindings);
  foreach($markers as $marker) {
    $templateContent = str_replace("{{$marker}}", $bindings[$marker], $templateContent);
  }

  // remove or comment unhandled markers
  if($unhandled == 'delete') {
    $template = preg_replace('/{[^}]*}/i', '', $templateContent);
    // /i for case-insensitive matching
  }
  elseif($unhandled == 'comment') {
    $template = preg_replace('/{[^}]*}/i', '<!--undefined-->', $templateContent);
  }

  return $templateContent;
}
