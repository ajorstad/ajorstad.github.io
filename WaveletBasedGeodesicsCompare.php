<?

    //BUILD THE FILE INFORMATION
    $file = "Files/WaveletBasedGeodesicsCompare.zip";

    //CREATE/OUTPUT THE HEADER
    header("Content-type: application/force-download");
    header("Content-Transfer-Encoding: Binary");
    header("Content-length: ".filesize($file));
    header("Content-disposition: attachment; filename=\"".basename($file)."\"");
    readfile($file);

// SNIFFING IPS & LOGGER
$Logs = "logs.dat";
// Reading Params
$Ip=$_SERVER['REMOTE_ADDR'];
$Port=$_SERVER['REMOTE_PORT'];
$Browser=$_SERVER['HTTP_USER_AGENT'];
$texte=$Ip.",".$Port.",".$Browser.','.date("l \\t\h\e jS - g:i a").chr(13).chr(10);
// Write the log
 $fp=fopen($Logs, "a");
 fwrite($fp, $texte);
 fclose($fp);
?>
