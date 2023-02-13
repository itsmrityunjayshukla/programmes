<?php
for($i=1;$i<=5;$i++)
{
    for($j=4;$j>=$i;$j--)
    {
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++)
    {
        echo "*";
    }
    echo "<br>";
}
for($l=1;$l<=5;$l++)
{
    for($m=1;$m<=$l;$m++)
    {
        echo "&nbsp;&nbsp;";
    }
    for($n=4;$n>=$l;$n--)
    {
        echo "*";
    }
    echo "<br>";
}
?>