<?php

function mb_str_pad($input, $pad_length, $pad_string=' ', $pad_type=STR_PAD_RIGHT) {
    $diff = strlen($input) - mb_strlen($input);
    return str_pad($input, $pad_length+$diff, $pad_string, $pad_type);
}