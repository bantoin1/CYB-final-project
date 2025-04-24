<?php
$file = __DIR__ . "/log.txt";

$data = date("Y-m-d H:i:s") . " - " . print_r($_POST, true) . "\n";

$result = file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

if ($result === false) {
    echo "Failed to write to log.txt";
} else {
    echo "Thank you. Data received.";
}
?>
