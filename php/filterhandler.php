<?php
    require_once 'filters.php';
    $argument = $_GET['arg'];
    $filter=new Filters($argument);
    echo $filter->getData();

?>