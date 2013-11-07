<?php

function sortArrayByArray($array, $sortArray) {
    $sort = array_fill_keys($sortArray, '0');
    return array_replace($sort, $array);
}

function sortArrayByDelimitedList($array, $sortString, $delimiter) {
    $sort = array_fill_keys(explode($delimiter, $sortString), '0');
    return array_replace($sort, $array);
}