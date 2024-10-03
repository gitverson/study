<?php

#Sql Injection or Second order sql Injection

$stmt = $conn->prepare("Select * from tableName where id ?";
$stmt->bind_param('i',$id);
$stmt->execute();
$stmt_res = mysqli_stmt_get_result($stmt);


try {
$dbcon = new PDO('mysql:host=localhost;dbname=digital_latest','root',"");
}
catch(PDOException $e) {
    echo 'Server Busy.. Try Later...';
    die();
}
$Select_query = "SELECT * FROM t_milestone WHERE Event_status IN (1,2)";
$stmt = $dbcon->prepare($Select_query);
$stmt->execute();
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($arr as $list )
{
print_r($list);
}


############################################################################################################
Cross-Site Scripting , use xss cleaning method , validation properly

We have to use both method  htmlspecialchars(); and htmlentities(); 

#Cross-Site Scripting: Self  (JavaScript)

<script language="javascript">

/* Self Details Remove Special Character in Text Box*/

function clearname() {
   document.registration0.name.value=filterNum(document.registration0.name.value)
    function filterNum(str) {
      re = /\$|,|@|#|~|`|\%|\*|\^|\&|\(|\)|\+|\=|\[|\-|\_|\]|\[|\}|\{|\;|\:|\'|\"|\<|\>|\?|\||\\|\!|\$|\./g;
        return str.replace(re, "");
     }
}

</script>


//html 
<form name='registration0' method='post' action='./?0306' autocomplete='off' onsubmit='return validation();'>
<input type="text" name="name" value=''  onchange='return clearname(this)' style='float:right;'  maxlength='30' class='input' >
</form>


#Cross-Site Scripting: Poor Validation (php)

$RmVChAr=array('<script'=>'','</script>'=>'','<%'=>'','$_'=>'','<jsp'=>'','<asp'=>'','javascript'=>'','onmouseover'=>'');

$RmV_SpC_ChAr=array('$_'=>'','<%'=>'','<script'=>'','<jsp'=>'','</script>'=>'','alert('=>'','='=>'','javascript:'=>'','&amp;'=>'&','<asp'=>'','onmouseover'=>'');

$str=strtr(trim($str),$RmVChAr);

$matter=sanitizedoc($matter); 



############################################################################################################

$str =$_GET['str' ]; if ($str == "")  {	$str=$_POST['str'  ]; }
$pat="/'/";
$conv="&#39;";
$str=preg_replace($pat,$conv,$str);


############################################################################################################

$descp_heading_only=array(
chr(0)=>'', chr(1)=>'', chr(2)=>'', chr(3)=>'', chr(4)=>'', chr(5)=>'',
chr(6)=>'', chr(7)=>'', chr(8)=>'', chr(9)=>'',chr(10)=>'',chr(11)=>'',
chr(12)=>'',chr(13)=>'',chr(14)=>'',chr(15)=>'',chr(16)=>'',chr(17)=>'',
chr(18)=>'',chr(19)=>'',chr(20)=>'',chr(21)=>'',chr(22)=>'',chr(23)=>'',
chr(24)=>'',chr(25)=>'',chr(26)=>'', chr(27)=>'',chr(28)=>'',chr(29)=>'',
chr(30)=>'',chr(31)=>'',chr(33)=>'&#33;',chr(34)=>'',chr(36)=>'',chr(37)=>'',
chr(42)=>'',chr(43)=>'',chr(64)=>'',chr(92)=>'',chr(94)=>'',chr(96)=>'',
chr(123)=>'',chr(124)=>'',chr(125)=>'',chr(126)=>'',chr(127)=>'');

$pcap=strtr($_POST['pcap'],$descp_heading_only);  

############################################################################################################

$name=strip_tags(htmlspecialchars(mysqli_real_escape_string($_POST['name'])));
$name=preg_replace('/[^A-Za-z0-9 _,.@(--)]/', '', $name);
$name=str_replace("'"," ",$name);
 
 
############################################################################################################
 
 //error_reporting(0);

$name = htmlspecialchars($_GET['name']);

die;

############################################################################################################

Access-Control-Allow-Origin is a CORS (Cross-Origin Resource Sharing) header.

When Site A tries to fetch content from Site B, Site B can send an Access-Control-Allow-Origin response header to tell the browser that the content of this page is accessible to certain origins. (An origin is a domain, plus a scheme and port number.) By default, Site B's pages are not accessible to any other origin; using the Access-Control-Allow-Origin header opens a door for cross-origin access by specific requesting origins.

For each resource/page that Site B wants to make accessible to Site A, Site B should serve its pages with the response header:

Access-Control-Allow-Origin: http://siteA.com
Modern browsers will not block cross-domain requests outright. If Site A requests a page from Site B, the browser will actually fetch the requested page on the network level and check if the response headers list Site A as a permitted requester domain. If Site B has not indicated that Site A is allowed to access this page, the browser will trigger the XMLHttpRequest's error event and deny the response data to the requesting JavaScript code.


header('Access-Control-Allow-Origin: *');
#this effectively disables CORS protection, and leaves your users exposed to attack.


<Directory />
    AllowOverride none
    Require all denied

<IfModule mod_headers.c>
   Header set Access-Control-Allow-Origin "none"
 </IfModule>

</Directory>


########################################################################################################### 

#   Cross-Site Request Forgery

step 1 

$pageToken = md5(uniqid(rand(), true));
$_SESSION['pageToken'] = $pageToken;

step 2 

<input type="hidden" name="csrf_token" value="<?php echo htmlentities($pageToken);?>" />


step3

if( $_REQUEST['csrf_token'] == $_SESSION['pageToken'] ) {

//DATABASE INSERT/UPDATE QUERY 

}


//Faileure to invalidate the session token
$ok = @session_start();
if(!$ok){
  session_start(); 
}
session_regenerate_id(true);

//Missing HttpOnly Attribute in Session Cookie 

ini_set( 'session.cookie_httponly', 1 );
$ok = @session_start();
if(!$ok){
  session_start(); 
}
session_regenerate_id(true);

//in wordpress setting
$ok = @session_start();
if(!$ok){
  session_start(); 
}
session_regenerate_id(true);
header("Set-Cookie: PHPSESSID=".session_id()."; httpOnly ");


## Disable Editing in Dashboard
define(‘DISALLOW_FILE_EDIT’, true);


## Disable Editing in Dashboard
define( 'DISALLOW_UNFILTERED_HTML', TRUE );

File Upload Permission
0644  (rw-r--r--)


#Email
<span class="blog-card-fa"><i class="fa fa-envelope"></i> <?php echo str_replace(".","[dot]",str_replace("@","[at]", get_post_meta(get_the_ID(), 'author_email', true)));?></span>



#How to disable directory listing in Apache

Options -Indexes +FollowSymLinks

Step 1

#wp_login.php comment this code
// Set a cookie now to see if they are supported by the browser.
/* $secure = ( 'https' === parse_url( wp_login_url(), PHP_URL_SCHEME ) );
setcookie( TEST_COOKIE, 'WP Cookie check', 0, COOKIEPATH, COOKIE_DOMAIN, $secure,true );

if ( SITECOOKIEPATH !== COOKIEPATH ) {
	setcookie( TEST_COOKIE, 'WP Cookie check', 0, SITECOOKIEPATH, COOKIE_DOMAIN, $secure, true );
} */

Step 2

$ok = @session_start();
if(!$ok){
  session_start(); 
}
session_regenerate_id(true);
header("Set-Cookie: PHPSESSID=".session_id()."; httpOnly");


<Directory />
    AllowOverride none
    Require all denied

<IfModule mod_headers.c>
   Header set Access-Control-Allow-Origin "none"
 </IfModule>

</Directory>


#disable the ‘copy’ and ‘paste’ option

<input type="text" name="log" id="user_login"<?php echo $aria_describedby_error; ?> class="input" value="<?php echo esc_attr( $user_login ); ?>" size="20" autocapitalize="off"  oncut="return false" oncopy="return false" onpaste="return false"  />


#The insecure HTTP methods are enabled in the application – Insecure HTTP Methods
<IfModule mod_rewrite.c>
RewriteCond %{REQUEST_METHOD} !^(GET|POST|HEAD)
RewriteRule .* - [R=405,L]
</IfModule>
 

# An attacker can gain server-side information like Server names– Server Finger Printing.
 #>>Server : Apache
 Comment ServerTokens
 #ServerTokens Prod
 
 
 
 ###########################################################################################################
 
 #Path Traversal
 
 $pdfFileArray = explode('/',$_POST['Doc']);
 $pdfFileName = validateFilePath($pdfFileArray[0]);
 $pdfFolderName = validateFileName($pdfFileArray[1]);
 
 
 funtion validateFileName($filename) {
	 return (!empty ($filename)) ? basename(trim(($filename)) :"";
 }
 
 funtion validateFilePath($filename) {
	 return (file_exists ($filename)) ? true : false;
 }
 
 
  #########################################################################################################
  
  //Session Hijacking
  
  //step1 add this code in header.php common file
  ini_set('session.user_only_cookies',true);
  ini_set('session.cookies_httponly',true);
  
  //step 2  add this code in header.php common file 
  session_start(); 
  session_regenerate_id(true);
  
  //step3 on logout session will destroy
  session_unset();
  session_destroy();
  
  
  #########################################################################################################
  
  //Impproper session Termination
  
  photo taken by mobile
  
  
  
  
  #########################################################################################################
  
  //How to Prevent Clickjacking in PHP
  
  The SAMEORIGIN X-Frame-Options allows only the same site to frame the content
  
  Header always set X-Frame-Options "SAMEORIGIN" 
  
  Header set X-Frame-Options "DENY"
  

 <?php header('X-Frame-Options: DENY'); ?>
  
#########################################################################################################

 CSV Injection || Preventions :

Below listed are some ways to prevent CSV Injection Attacks from cyber attackers:

=> Monitor the usage of Input Validation Operators. Operators such as equal to (=), Addition Operator (+), Subtraction Operator (-), and @ Operator should be strictly monitored, and if the unnecessary blockage of these operators must be performed.

=> Perform Encoding of CSV Files. The CSV files should be encoded to prevent any manipulation, this can be done by prepending the CSV values with appropriate characters such as space, etc.


HTTPS | SSL 

Implementing SSL secures any data transmitted between server and browser during a users session interacting with your site. 


# HTML Injection also known as Cross Site Scripting.


# asymetric or symetric  security in php 
  symmetric encryption is faster as it uses a single key for encryption and decryption.
  asymmetric encryption is slower as it uses two different keys for encryption and decryption
