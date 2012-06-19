<?php
include_once 'glue.php';

$urls = array(
    '/([a-z]*)' => 'Index',
);

class Index {
    public function GET($params) {
        $name = 'World';
        if (!empty($params[0])) {
            $name = $params[0];
            $name = ucfirst($name);
        }

        echo "Hello, $name!";
    }
}

glue::stick($urls);

?>
