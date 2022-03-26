<?php

function myfun($i,$j)
{
    
    $k="";
    
    echo"{$i}\n{$j}\n";
    
    while($i <= 10000 && $j <= 10000 && $k <= 10000){
    
        $k = $i + $j ;
        
        echo"{$k}\n";
        
        
        $i = $j + $k;
        
        echo"{$i}\n";
        
        
        $j = $i + $k ;
        
        echo"{$j}\n";
        
    }
    
    return $i;
    return $j;
    return $k;
}

myfun(0,1);