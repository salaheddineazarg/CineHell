<?php

header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');


echo json_encode($test,JSON_PRETTY_PRINT)
?>