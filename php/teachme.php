        <?php
            $knowledge = 'knowledge.txt';
            if ( !empty($_POST['input'])) {
                $user_input = $_POST['input'];
                echo "you just taught me: " . $user_input;
                $input_processed = $user_input . PHP_EOL; // end of line
                file_put_contents($knowledge, $input_processed, FILE_APPEND);
            }

    // tombbe tesszuk a fajlokat
            $tomb = array();
                $tomb[1] = "knowledge.txt";
                $tomb[2] = "knowledge2.txt";
            
            $task = $tomb[array_rand($tomb)]; // veletlenszeru value a tombbol

            $item = file_get_contents($task); //read the file
            $item_out = explode("\n", $item); //create array separate by new line
        
            $print_item = $item_out[array_rand($item_out)]; // veletlenszeru value a tombbol
        ?>