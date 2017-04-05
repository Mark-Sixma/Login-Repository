<?php

    $inputWords = addslashes($_REQUEST['inputs']);

    $response = strtoupper($inputWords);

    echo $response;  

?>