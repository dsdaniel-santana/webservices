<?php

header("Content-type: Application/json");

$msg = array(
    "msg" => "API Senac Lapa Tito",
    "versao" => "1.0"
);
echo json_encode($msg);