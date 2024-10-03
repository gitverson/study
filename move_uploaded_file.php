<?php  
  

 // Multiple file uploading
 $output = '';  
 if(is_array($_FILES))   
 {  
      foreach ($_FILES['files']['name'] as $name => $value)  
      {  
           $file_name = explode(".", $_FILES['files']['name'][$name]);  
           $allowed_ext = array("jpg", "jpeg", "png", "gif");  
           if(in_array($file_name[1], $allowed_ext))  
           {  
                $new_name = md5(rand()) . '.' . $file_name[1];  
                $sourcePath = $_FILES['files']['tmp_name'][$name];  
                $targetPath = "upload/".$new_name;  
                if(move_uploaded_file($sourcePath, $targetPath))  
                {  
                     $output .= '<img src="'.$targetPath.'" width="150px" height="180px" />&nbsp;';  
                }                 
           }            
      }  
      echo $output;  
 }  


 ##########################################################################################################


if(!empty($_FILES['ms_image']['name'])){

     $photo = trim(htmlentities(basename($_FILES['ms_image']['name'])));

     $allowed_image_extension = array("png","jpg","jpeg");

     $maxsize = 2 * 1024 * 1024;  

     $file_extension = pathinfo($_FILES["ms_image"]["name"], PATHINFO_EXTENSION); // Get image file extension

     // Validate file input to check if is not empty
     if (! file_exists($_FILES["ms_image"]["tmp_name"])) {
     $error.= "Choose image file to upload.<br>";
     }    
     // Validate file input to check if is with valid extension
     else if (! in_array($file_extension, $allowed_image_extension)){

     $error.= "Upload valid images. Only PNG and JPEG are allowed.<br>";
     $mimetype = mime_content_type($_FILES['file']['tmp_name']);

          if(in_array($mimetype, array('image/jpeg','image/png'))) {

          $error.= "Upload valid images. Only PNG and JPEG are allowed.<br>";

          }
     }    
     // Validate image file size
     else if (($_FILES["ms_image"]["size"] > $maxsize )) {
     $error.= "Image size exceeds 2MB<br>";
     }    
}
else {
     $error.= "Choose image file to upload.<br>";
}


if($error!='')
{         
$_SESSION['Valid_error']=$error; 

}
else {
     $imgExt = pathinfo($photo, PATHINFO_EXTENSION);
     $newImgName = date("YmdHis").'.'.$imgExt;
     $UploadImg = 'event_images/'.$newImgName;
     $ms_img_temp= $_FILES['ms_image']['tmp_name'];
     move_uploaded_file($ms_img_temp,$UploadImg);
     
} 



/// Get file extension
$imgExt = pathinfo($photo, PATHINFO_EXTENSION);


 ?>  