
<?php

function srednia($a, $b) {
    return ($a + $b) / 2;
}

function srednia_wazona($a, $b) {
    return ($a * 7 + $b * 3) / 10;
}

echo srednia(4, 6);
echo "\n";
echo srednia_wazona(4, 6);
