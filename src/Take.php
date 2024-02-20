<?php
namespace StringUtils;

function take(array $items, int $n=1){
    $result=[];
    if($items==[]){
        return [];
    }
    elseif (count($items) <= $n){
        return $items;
    }
    for ($i=0; $i<$n; $i++){
        $result[]=$items[$i];
    }
    return $result;
}
//var_dump(take(take([[1, 2], 3])));