<?php
require 'glue.php';

$urls = array(
  '/([a-z]*)' => 'Index',
);

class Index {
  public function GET($name) {
    if (empty($name)) {
      $name = 'World';
    } else {
      $name = ucfirst($name);
    }

    echo "Hello, $name!";
  }
}

glue::stick($urls);

?>
