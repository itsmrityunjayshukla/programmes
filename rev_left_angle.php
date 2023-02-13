<?php
for($i=1;$i<=5;$i++)
{
    for($j=2;$j<=$i;$j++)
    {
        echo "&nbsp;&nbsp;";
    }
    for($k=5;$k>=$i;$k--)
    {
        echo "*";
    }
    echo "<br>";
}

?>