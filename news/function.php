<?php
    function insertion($data){
        global $db;
        extract($data);

        $image = isset($_FILES['image']) ? upload_file($_FILES['image'], "img/", ["jpg", "jpeg", "png"]) : "";

        $sql = "INSERT INTO media (title, content, img) VALUES (:title, :content, :image)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':content', $content, PDO::PARAM_STR);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);

        if($stmt->execute())
		{
			return true;
		}
		return false;
    }

    function upload_file($file, $targetDirectory, $allowedExtensions) {
		$fileName = basename($file["name"]);
		$targetFile = $targetDirectory . $fileName;
		$fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
	  
		if (!in_array($fileExtension, $allowedExtensions)) {
		  return ""; 
		}

		if (move_uploaded_file($file["tmp_name"], $targetFile)) {
		  return $targetFile;
		}
	  
		return "";
	}

	function get_content()
	{
		global $db;
		$sql = "SELECT * FROM media";
		$stmt = $db->prepare($sql);
		if($stmt->execute())
		{
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		return false;
	}
?>