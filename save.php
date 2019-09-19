
<?php
 ini_set('max_execution_time', 3000);
 header("Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE, PUT');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With, X-CLIENT-ID, X-CLIENT-SECRET');
header('Access-Control-Allow-Credentials: true');
foreach(array('video') as $type) {
    if (isset($_FILES["${type}-blob"])) {

        echo 'uploads/';
          
	
        $fileName = $_POST["${type}-filename"];
		$directoryPath = "D:/xampp/htdocs/FaceWebApp2/". $fileName;
          mkdir($directoryPath, 0777, true);  
		   $fileName1 =$fileName . '.webm';
		   $uploadDirectory = 'D:/xampp/htdocs/FaceWebApp2/'.$fileName."/".$fileName1;
		  
       

        if (!move_uploaded_file($_FILES["${type}-blob"]["tmp_name"], $uploadDirectory)) {
            echo(" problem moving uploaded file");
        }

        echo($fileName);
    }
}
?>