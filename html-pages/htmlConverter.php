<?php
    // Define the source and destination directories
    $source_dir = '../pages'; // The directory path where your PHP files are located
    $dest_dir = '.';
    // if (!is_dir($dest_dir)) {
    //     //0777 is the permission code it means give read write and execute to all the users
    //     mkdir($dest_dir, 0777, true);
    //   }
    // Get all the PHP files in the source directory
    //The glob function returns an array of file names or directories that match a specified pattern 1
    $files = glob($source_dir . '/*.php');
    //this will return an array with elements like: pages/index.php etc
    // Loop through each file
    foreach ($files as $file){
        // Get the file name with extension
        //basename return a file name from a given path. it can take one or two parameters, the first is the file name and the second is the suffix if you add the second it will drope the suffix.
        $filename = basename($file, '.php');
        //let's convert with ob_start();
        ob_start();
        //Include the file we want to convert from the array.
        include $file;
        //end output buffering and get the buffer content:
        //ob_get_clean() return the content of the buffer and delete it and turn of ob_start. Now we saved the content of the buffer in $content
        $bufferContent = ob_get_clean();
        //save the buffer content to an HTML file in the destination directory
        file_put_contents($dest_dir . '/' . $filename . '.html', $bufferContent);
    }
?>