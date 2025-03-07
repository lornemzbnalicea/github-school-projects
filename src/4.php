<?php

function getRandomCode() {
    $code = mt_rand(100000, 999999);
    return $code;
}

echo getRandomCode();

?>
