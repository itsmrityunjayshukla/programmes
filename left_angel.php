<?php

for($i=1;$i<=7;$i++)
{
    for($j=6;$j>=$i;$j--)
    {
        echo "&nbsp;&nbsp;";
    }
    // echo "<br>";
    for($k=1;$k<=$i;$k++)
    {
        echo "*";
    }
    echo "<br>";
}

?>