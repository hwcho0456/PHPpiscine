<?php
class MyException extends Exception {
public function error($errorMsg) {
    echo $errorMsg."\n";
    exit(-1);
  }
}
?>
