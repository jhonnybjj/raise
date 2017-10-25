<?php 
/*header('Content-type: application/json');
$tmp_name = $_FILES["image"]["tmp_name"];
$name = $_FILES["image"]["name"];
move_uploaded_file($tmp_name, "./avatar/" . $name);


print json_encode($_FILES);
  */ ?>


<?php 
    ////////THE PROBLEM AREA I THNK//////////
    if ($_REQUEST['image']) {

            // convert the image data from base64
            $imgData = base64_decode($_REQUEST['image']);

            // set the image paths
            $file = '/avatar/' . md5(date('Ymdgisu')) . '.jpg';
            $url = '/home/hostplas/public_html/raise' . $file; 
		
		
            // delete the image if it already exists
            if (file_exists($file)) { unlink($file); }
 
            // write the imgData to the file
           $fp = fopen($url, 'w+');
            fwrite($fp, $imgData);
            fclose($fp);
		
		
		
		
    }

    echo "<h1>Page is online</h1>";
    echo "<p>Nothing special just a first go at phonegap! </p>";
    echo "<h2>Contents of uploaded_files Folder to show iphone upload</h2>";

    $dir = '/home/hostplas/public_html/raise/avatar';

    if ($handle = opendir($dir)) {
        while (false !== ($file = readdir($handle))) { 
            if ($file != "." && $file != "..") { 
                echo "$file\n";
                echo "<br>";
            } 
        }
        closedir($handle); 
    }
   ?>