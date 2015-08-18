<?php
function noDouble($str) {
  if(preg_match('/(.)\1/', $str)) {
    trigger_error("Double letters in {$str}", E_USER_NOTICE);
  }
  else {
    echo "All is good.";
  }
}

noDouble("yahallo");
