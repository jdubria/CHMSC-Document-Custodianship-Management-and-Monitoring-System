<?php
    // ang amo ni nga code gn copy paste ko lang halin net amo ni mag download file halin sa folder nga gna butangan uploads
	$filePath=urldecode($_REQUEST['file']);

    if(file_exists($filePath)) {
        $fileName = basename($filePath);
        $fileSize = filesize($filePath);

        header("Cache-Control: private");
        header("Content-Type: application/stream");
        header("Content-Length: ".$fileSize);
        header("Content-Disposition: attachment; filename=".$fileName);

        readfile ($filePath);                   
        exit();
    }
    else {
        die('The provided file path is not valid.');
    }
?>
