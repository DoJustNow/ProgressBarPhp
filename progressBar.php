<?php
function progressBar($done, $total) 
{
    $percent = floor(($done / $total) * 100);
    echo "$percent% $done/$total\r";
}
