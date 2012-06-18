<?php
include_once 'glue.php';

$urls = array(
    '/(.*)' => 'Index',
);

class Index {
    public function GET($params) {
        $name = 'World';
        if (!empty($params[0])) {
            $name = $params[0];
            $name = ucfirst($name);
        }
    }
}

glue::stick($urls);

?>
