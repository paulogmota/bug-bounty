// Linux command execution. Must fork this 
<?php
    $command = 'INSERT COMMAND, PATH, SCRIPT HERE';
    $output = exec($command);
    // Print the output
    echo $output;
?>
