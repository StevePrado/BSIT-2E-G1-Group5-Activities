<?php

function printItem($qty, $desc, $amt)
{
    $total = $qty * $amt;

    printf("(%d) %-8s %6d %8d\n", $qty, $desc, $amt, $total);

    return $total;
}

echo "QTY  DESC        AMT     Total\n";
echo "--------------------------------------\n";

$overall = 0;

$overall += printItem(2, "ITEM 1", 100);
$overall += printItem(7, "ITEM 2", 35);
$overall += printItem(1, "ITEM 3", 350);
$overall += printItem(2, "ITEM 4", 20);

echo "--------------------------------------\n";

printf("%-20s %10s %5d\n", "Overall Total", "Php", $overall);

?>
