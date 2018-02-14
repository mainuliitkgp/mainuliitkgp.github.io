header("Content-Type: application/octet-stream");

$file = $_GET["Sk Mainul Islam"] .".pdf";
header("Content-Disposition: attachment; filename=Sk Mainul Islam.pdf" . urlencode($file));   
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Description: File Transfer");            
header("Content-Length: " . filesize($file));
flush(); // this doesn't really matter.
$fp = fopen($file, "r");
while (!feof($fp))
{
    echo fread($fp, 65536);
    flush(); // this is essential for large downloads
} 
fclose($fp);
