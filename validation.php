<?php


function address_string($input)
{
	
	if(preg_match('/^[ -.,0-9A-Za-z]*$/',$input) )
    {
		return true;
	}
    else
    {
	  return false;
    }
}



function name_input_with_space($input)
{
	/*Discription*****************************
	1. input contain letter and space only
    2. input must contain atleast one letter
	*****************************************/
	
	if(preg_match('/^[a-zA-Z ]+$/',$input) )
    {
	  $data=str_replace(' ','',$input);
	  if(ctype_alpha($data))
	  {
		  return true;
	  }
	  else
	  {
		  return false;
	  }
    }
    else
    {
	  return false;
    }
}



function digit_input_with_space($input)
{
	/*Discription*****************************
	1. input contain digit and space only
    2. input must contain atleast one digit
	*****************************************/
	
	if(preg_match('/^[0-9 ]+$/',$input) )
    {
	  $data=str_replace(' ','',$input);
	  if(ctype_digit($data))
	  {
		  return true;
	  }
	  else
	  {
		  return false;
	  }
    }
    else
    {
	  return false;
    }
}


function alphanum_input_with_space($input)
{
	/*Discription*****************************
	1. input contain letter , number and space only
    2. input must contain atleast one letter
	*****************************************/
	
	if(preg_match('/^[a-zA-Z0-9 ]+$/',$input) )
    {
	  return true;
	}
    else
    {
	  return false;
    }
}



function digits_only($input)
{
	/*Discription*****************************
	1. input must contain 0123456789 digits only.
    2. space,dot and (+,-) will not allowed.
	*****************************************/
	if(ctype_digit($input))
	{
		return true;
	}
	else
	{
		return false;
	}
}


function numeric_only($input)
{
	/*Discription*****************************
	1. input must contain .+-0123456789  only.
	1. dot(.) and operator(+-) will be allowed.
    2. space will not allowed.
	*****************************************/
	if(is_numeric($input))
	{
		return true;
	}
	else
	{
		return false;
	}
}



function alpha_num_only($input)
{
	/*Discription*****************************
	1. input must contain Alpha Num   only.
	1. dot(.) and operator(+-) will be allowed.
    2. space will be allowed.
	*****************************************/
	if(ctype_alnum($input))
	{
		return true;
	}
	else
	{
		return false;
	}
}






function dropdown_with_num($input,$num)
{
	//input contain empty '' and number only
	if(empty($input) || !ctype_digit($input) || $input>$num)
	{
		return false;
	}
	else
	{
		return true;
	}
}





function dropdown_with_dob($dd,$mm,$yy,$dd_len,$yy_range1 ,$yy_range2)
{
	$month=array('jan','feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dec');
	if(empty($dd) || empty($mm) || empty($yy) || !ctype_digit($dd) || !ctype_digit($yy) || !ctype_alpha($mm) || $dd>$dd_len  || ($yy>$yy_range1) || ($yy<$yy_range2) || !in_array($mm,$month) )
	{
		return false;
	}
	else
	{
		return true;
	}
}


function email_validate($input,$max_len)
{
	//Validate email by triming the space
	if(filter_var(trim($input), FILTER_VALIDATE_EMAIL) && strlen($input)<=$max_len)
	{
		return true;
	}
	else
	{
		return false;
	}
}


function minimum_number($input,$num)
{
	$input=trim($input);
	//input contain minimum number only
	if(empty($input) || !preg_match('/^[0-9.]+$/',$input) || $input<$num || !is_numeric($input))
	{
		return false;
	}
	else
	{
		return true;
	}
}

function validate_captcha($input)
{
	//Validating captcha
	if(isset($_SESSION["code"]) && !empty($_SESSION["code"]) && $_SESSION["code"]==$input)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function digit_int_input($input,$min,$max)
{
	//input contain empty '' and number only (float ot integer)
	if(empty($input) || !is_numeric($input) || strlen($input)>$max || strlen($input)<$min)
	{
		return false;
	}
	else
	{
		return true;
	}
}



function alphanum_input($input,$min,$max)
{
	//input contain  should not contain empty ''  
	// should contain minimum maximum length
	// should contain only letter or number
	if(empty($input) || !ctype_alnum($input) || strlen($input)>$max || strlen($input)<$min)
	{
		return false;
	}
	else
	{
		return true;
	}
}


function address_input($input,$min,$max)
{
	
	if(empty($input) ||  strlen($input)>$max || strlen($input)<$min)
	{
		return false;
	}
	else
	{
		
		  return true;
	}
}

function text_input_len($input,$min,$max)
{
	//input contain  should not contain empty('') 
	//input contain letter and space only
	//input must contain atleast one letter
	if(preg_match('/^[a-zA-Z ]+$/',$input) && strlen($input)>=$min && strlen($input)<=$max )
    {
	  $data=str_replace(' ','',$input);
	  if(ctype_alpha($data))
	  {
		  return true;
	  }
	  else
	  {
		  return false;
	  }
    }
    else
    {
	  return false;
    }
}


function check_empty($input,$min,$max)
{
	if(empty($input) || strlen($input)<$min || strlen($input)>$max )
    {
	  return false;
	}
    else
    {
	  return true;
    }
}

function allow_only_character($input)
{
	if(preg_match("/^[a-zA-Z0-9-,.']+$/", $input) == 1) {
		return true;
    }
	else{
		return false;
	}
	
}


function XSS__SqlInjection_Cracker($content)
{
	$arr=array('`','~','!','#','$','%','^','&','&','*','(',')','_','+','--','=','{','}','[',']',':',';','"',"'",'|','\\','<','>','?','/','\x00','\n','\r','\x1a',
           'applet', 'body',   'bgsound', 'base', 'basefont', 'embed', 'frame', 'frameset', 'head', 'html', 
              'iframe', 'ilayer', 'layer',  'meta', 'object', 'script', 'style', 'title',
			  'xml','javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'blink',  'style', 'script', 
            'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', 'title', 'base', 
            'onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 
            'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 
            'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 
            'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 
            'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 
            'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 
            'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 
            'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 
            'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 
            'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 
            'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 
            'onstop', 'onsubmit', 'onunload');

return str_replace($arr,'',$content);
}


function check__image($img_var,$path,$scribe_img_name,$img_owner)
{
	if(isset($_FILES[$img_var]['tmp_name']))
	{
		$tmp = $_FILES[$img_var]['tmp_name'];
		$nm=$_FILES[$img_var]['name'];
		$sze_in_kb=$_FILES[$img_var]['size']/1024;
		list($txt, $ext) = explode(".", $nm);
		$img_actual_name=$scribe_img_name.'.'.strtolower($ext);
		
		if (exif_imagetype($tmp)!=2 || strtolower($ext)!='jpg') {
			 return $error="<strong>Error: The $img_owner is not a JPG type </strong>";
		}
		else if($sze_in_kb<3 || $sze_in_kb>40)
		{
			return $error="<strong>Error: The $img_owner size should be between 3 KB- 40 KB .</strong> ";
		}
		else if(move_uploaded_file($tmp, $path.$img_actual_name)) {
			
			return true;
		}
		else{
			return $error="<strong>Error: There is some server problem while uploading the $img_owner..</strong>";
		}
	
	}
	else {
		return $error="<strong>Error: There is some server problem while uploading the $img_owner.</strong>";
	}
}

function check_scribe_papers($sql_check_scribe_papers)
{
	while($give_sql_check_scribe_papers=pg_fetch_object($sql_check_scribe_papers))
	{
		if($give_sql_check_scribe_papers->paper1==1) {
		 	$pap_check[]='paper1';
		} 
		if($give_sql_check_scribe_papers->paper2==1) {
		 	$pap_check[]='paper2';
		}
		if($give_sql_check_scribe_papers->paper3==1) {
		 	$pap_check[]='paper3';
		}
		if($give_sql_check_scribe_papers->paper4==1) {
		 	$pap_check[]='paper4';
		}
		if($give_sql_check_scribe_papers->paper5==1) {
		 	$pap_check[]='paper5';
		}
		if($give_sql_check_scribe_papers->paper6==1) {
		 	$pap_check[]='paper6';
		}
		if($give_sql_check_scribe_papers->paper7==1) {
		 	$pap_check[]='paper7';
		}
		if($give_sql_check_scribe_papers->paper8==1) {
		 	$pap_check[]='paper8';
		}
		if($give_sql_check_scribe_papers->paper9==1) {
		 	$pap_check[]='paper9';
		}
	}
	return $pap_check;
}

function check_duplicate_scribe($sql_input)
{
	$checked=true;
	foreach($_POST['paper'] as $paper_post_input){
		if(in_array($paper_post_input,$sql_input)){
			$checked=false;
		}
	}
	return $checked;
}

?>