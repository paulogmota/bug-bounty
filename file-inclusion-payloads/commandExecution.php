<?php
    $command = 'ls /root';
    $output = exec($command);
    // Print the output
    echo $output;
?>
