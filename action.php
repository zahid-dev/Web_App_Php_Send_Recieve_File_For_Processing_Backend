<html>
<body>

<?php

    session_start();
$filefolder=$_SESSION['filename1'];
ini_set('max_execution_time', 3000);
$pyscript = 'D://xampp//htdocs//FaceWebApp2//Converted_Code.py';
$python = 'C://ProgramData//Anaconda3//python.exe';

$filePath = 'D:/xampp/htdocs/FaceWebApp2/'.$filefolder;

$cmd = "$python $pyscript $filePath";

#`$cmd` 
exec("$cmd", $output);
echo '<img src="image.php?file=D:/xampp/htdocs/FaceWebApp2/'.$filefolder.'/center.jpg"/>';
echo '<img src="image.php?file=D:/xampp/htdocs/FaceWebApp2/'.$filefolder.'/left.jpg"/>';
echo '<img src="image.php?file=D:/xampp/htdocs/FaceWebApp2/'.$filefolder.'/right.jpg" />';

?>

</body>
</html>
