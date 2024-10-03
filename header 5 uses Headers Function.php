

<?php


header function Uses:

1.Change page location
2.Set caching control
3.Initiate force download
4.Send HTTP Status   //header("HTTP/1.1 200 OK");
5.header authenticaion
headers_list() - Returns a list of response headers sent (or ready to send)

1.header() is used to redirect from one page to another: header("Location: index.php");
2.header() is used to send an HTTP status code: header("HTTP/1.0 this Not Found");
3.header() is used to send a raw HTTP header: header('Content-Type: application/json');


// The below example helps to prevent caching by sending header information which override browser setting to not-cache.
  
// Set a past date
header("Expires: Sun, 25 Jul 1997 06:02:34 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("HTTP/1.0 404 Not Found");
?>
  
<html>
    <body>
        <p>Hello World!</p>
      
        <!-- PHP program to display
        header list -->
        <?php
            print_r(headers_list());
			
        ?>
    </body>
</html>


Example 1:




<?php
// This will change location of header, i.e. redirect to the URL

// Redirect the browser
header("Location: http://www.geeksforgeeks.org");
  
// The below code does not get executed 
// while redirecting
exit;
  
?>


Example 2:
<?php
// The below example helps to prevent caching by sending header information which override browser setting to not-cache.
  
// Set a past date
header("Expires: Sun, 25 Jul 1997 06:02:34 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
?>
  
<html>
    <body>
        <p>Hello World!</p>
      
        <!-- PHP program to display header list -->
        <?php
            print_r(headers_list());
        ?>
    </body>
</html>

Example 3:

//If you want the user to be prompted to save the data you are sending, such as a generated PDF file, you can use the » Content-Disposition header to supply a recommended filename and force the browser to display the save dialog.

<?php
// We'll be outputting a PDF
header('Content-Type: application/pdf');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="downloaded.pdf"');

// The PDF source is in original.pdf
readfile('original.pdf');



Example:4
//Set HTTP Status in the header response.

header("HTTP/1.0 404 Not Found");


#How to add 301 redirects in PHP?
#You can add 301 redirect in PHP by adding below code snippet in your file.

header("HTTP/1.1 301 Moved Permanently"); 
header("Location: /option-a"); 
exit();

?>



