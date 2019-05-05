<?php
function back ($str) {
    $text = [
        " " => "_",
];
    return strtr($str, $text);
}
echo back("Probel probel probel");