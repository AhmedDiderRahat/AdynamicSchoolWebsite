<?php

//CHECK IF THE PASSED VALUE IS PRESENT IN ARRAY OR NOT
function check_in_array($value,$arr)
{
        while(list($k,$v) = @each($arr))
        {
                if($value==$v)
                {
                        return 1;
                        break;
                }
        }
}



//VALIDATE SIGNUP FORM



//CHECK IF EMAIL ADDRESS IS VALID OR NOT
function check_email($email)
{
        $email_regexp = "^([-!#\$%&'*+./0-9=?A-Z^_`a-z{|}~])+@([-!#\$%&'*+/0-9=?A-Z^_`a-z{|}~]+\\.)+[a-zA-Z]{2,4}\$";
	    //$email_regexp = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$"; //my one
       //return eregi($email_regexp, $email);
       return preg_match($email_regexp,$email);
}

//CHECK IF PHONE NUMBER IS VALID OR NOT
function check_phone($phone)
{
         if(strlen($phone)==12)
         if (eregi ("^([0-9]{3})-([0-9]{1,3})-([0-9]{1,4})$", $phone, $regs)) 
         return true;
}


//CHECK LENGTH OF A VALUE
function check_length($str,$length)
{
        if(strlen($str)<$length)
                return 0;
        else
                return 1;
}

//MAIL FUNCTIION
function mailing($to,$name,$from,$subj,$body) {
global $SERVER_NAME;
$subj=nl2br($subj);
$body=nl2br($body);
$recipient = $to;
$headers = "From: " . "$name" . "<" . "$from" . ">";
$headers .= "X-Sender: <" . "$to" . ">";
$headers .= "Return-Path: <" . "$to" . ">";
$headers .= "Error-To: <" . "$to" . ">";
$headers .= "Content-Type: text/html";
mail("$recipient","$subj","$body","$headers");
}

//get User Filed Info
function get_user_field($email,$field)
{
        global $conn;
        $sql="SELECT $field from users where email='$email'";
        $rs = $conn->Execute($sql);
        return $rs->fields[$field];
}

//REDIRECT PAGE USING JAVASCRIPT
function redirect($link)
{
        echo "<script language=Javascript>
                document.location.href='$link';
                </script>";
}

//Check If Member Login
function check_login()
{
        global $USERNAME,$PASSWORD;
        if($USERNAME=="" || $PASSWORD=="")
        {
                $link="login.php";
                redirect($link);
        }
}

//IF USER NOT LOGGED IN
function check_notloggedin()
{
        global $USERNAME,$PASSWORD,$config,$conn;
        if($USERNAME!="" && $PASSWORD!="")
        {
                $sql="SELECT userid,status from users where username='$USERNAME' and password='$PASSWORD'";
                $rs = $conn->Execute($sql);
                if($rs->recordcount()>=1 && $rs->fields[status]=="Validate")
                {
                        $link="$config[baseurl]/members/myhome.php";
                        redirect($link);exit;
                }
                elseif($rs->fields[status]=="NotValidate")
                {
                        $link="$config[baseurl]/notvalidate.php?pid=".$rs->fields[userid];
                        redirect($link);exit;
                }
        }
}




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////





////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Populate country
function country_box($sel=""){
$coun="";
$country=array("United States","Afghanistan","Albania","Algeria","American Samoa","Andorra","Angola","Anguilla","Antartica","Antigua and Barbuda","Argentina","Armenia","Aruba","Ascension Island","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Botswana","Bouvet Island","Brazil","Brunei Darussalam","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde Islands","Cayman Islands","Chad","Chile","China","Christmas Island","Colombia","Comoros","Cook Islands","Costa Rica","Cote d Ivoire","Croatia/Hrvatska","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","East Timor","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Guiana","French Polynesia","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe","Guam","Guatemala","Guernsey","Guinea","Guinea-Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Ireland","Isle of Man","Israel","Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte Island", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn Island", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion Island", "Romania", "Russian Federation", "Rwanda", "Saint Helena", "Saint Lucia", "San Marino", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovak Republic", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia", "Spain", "Sri Lanka", "Suriname", "Svalbard", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tokelau", "Tonga Islands", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Kingdom", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Western Sahara", "Western Samoa", "Yemen", "Yugoslavia", "Zambia","Zimbabwe");
for($i=0;$i<count($country);$i++)
{
        if($sel==$country[$i])
                $coun .="<option value='$country[$i]' selected>$country[$i]</option>";
        else
                $coun .="<option value='$country[$i]'>$country[$i]</option>";
}
return $coun;
}


function state_drop($sel="")
{
$coun="";
$state = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "District of Columbia", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming", "Others"); 

for($i=0;$i<count($state);$i++)
{
        if($sel==$state[$i])
                $coun .="<option value='$state[$i]' selected>$state[$i]</option>";
        else
                $coun .="<option value='$state[$i]'>$state[$i]</option>";
}
return $coun;

}

function get_state_name($code)
{
$list = array();
$list['AL']='Alabama';
$list['AK'] ='Alaska';
$list['AZ'] ='Arizona';
$list['AR'] ='Arkansas';
$list['CA'] ='California';
$list['CO'] ='Colorado';
$list['CT'] ='Connecticut';
$list['DE'] ='Delaware';
$list['DC'] ='District of Columbia';
$list['FL'] ='Florida';
$list['GA'] ='Georgia';
$list['HI'] ='Hawaii';
$list['ID'] ='Idaho';
$list['IL'] ='Illinois';
$list['IN'] ='Indiana';
$list['IA'] ='Iowa';
$list['KS'] ='Kansas';
$list['KY'] ='Kentucky';
$list['LA'] ='Louisiana';
$list['ME'] ='Maine';
$list['MD'] ='Maryland';
$list['MA'] ='Massachusetts';
$list['MI'] ='Michigan';
$list['MN'] ='Minnesota';
$list['MS'] ='Mississippi';
$list['MO'] ='Missouri';
$list['MT'] ='Montana';
$list['NE'] ='Nebraska';
$list['NV'] ='Nevada';
$list['NH'] ='New Hampshire';
$list['NJ'] ='New Jersey';
$list['NM'] ='New Mexico';
$list['NY'] ='New York';
$list['NC'] ='North Carolina';
$list['ND'] ='North Dakota';
$list['OH'] ='Ohio';
$list['OK'] ='Oklahoma';
$list['OR'] ='Oregon';
$list['PA'] ='Pennsylvania';
$list['RI'] ='Rhode Island';
$list['SC'] ='South Carolina';
$list['SD'] ='South Dakota';
$list['TN'] ='Tennessee';
$list['TX'] ='Texas';
$list['UT'] ='Utah';
$list['VT'] ='Vermont';
$list['VA'] ='Virginia';
$list['WA'] ='Washington';
$list['WV'] ='West Virginia';
$list['WI'] ='Wisconsin';
$list['WY'] ='Wyoming';
$list['XX'] ='Choose State';

return $list[$code]; 
}


function createThumb($srcname,$destname,$maxwidth,$maxheight)
{
        global $config;
        $oldimg = $srcname;//$config['basepath']."/photo/".$srcname;
        $newimg = $destname;//$config['basepath']."/photo/".$destname;

        $imagedata = GetImageSize($oldimg); 
        $imagewidth = $imagedata[0]; 
        $imageheight = $imagedata[1]; 
        $imagetype = $imagedata[2]; 

        $shrinkage = 1; 
        if ($imagewidth > $maxwidth) 
        { 
                $shrinkage = $maxwidth/$imagewidth; 
        } 
        if($shrinkage !=1)
        {
                $dest_height = $shrinkage * $imageheight; 
                $dest_width = $maxwidth;
        }
        else
        {
                $dest_height=$imageheight; 
                $dest_width=$imagewidth;
        }
        if($dest_height > $maxheight)
        {
                $shrinkage = $maxheight/$dest_height; 
                $dest_width = $shrinkage * $dest_width; 
                $dest_height = $maxheight; 
        }
        if($imagetype==2)
        {
                $src_img = imagecreatefromjpeg($oldimg); 
                $dst_img = imageCreateTrueColor($dest_width, $dest_height);
                ImageCopyResampled($dst_img, $src_img, 0, 0, 0, 0, $dest_width, $dest_height, $imagewidth, $imageheight);
                imagejpeg($dst_img, $newimg, 100); 
                imagedestroy($src_img); 
                imagedestroy($dst_img); 
        }
        elseif ($imagetype == 3) 
        { 
                $src_img = imagecreatefrompng($oldimg); 
                $dst_img = imageCreateTrueColor($dest_width, $dest_height);
                ImageCopyResampled($dst_img, $src_img, 0, 0, 0, 0, $dest_width, $dest_height, $imagewidth, $imageheight);
                imagepng($dst_img, $newimg, 100); 
                imagedestroy($src_img); 
                imagedestroy($dst_img); 
        }
        else
        {
                $src_img = imagecreatefromgif($oldimg); 
                $dst_img = imageCreateTrueColor($dest_width, $dest_height);
                ImageCopyResampled($dst_img, $src_img, 0, 0, 0, 0, $dest_width, $dest_height, $imagewidth, $imageheight);
                imagejpeg($dst_img, $newimg, 100); 
                imagedestroy($src_img); 
                imagedestroy($dst_img); 
        }
}




function photo_upload($file,$i,$max_foto_size,$photo_extention,$folder_name,$path='')
        {


                if($file['tmp_name'][$i]=="")
                {
                        echo "Error!";
                        return "";
                }
                if($file['tmp_name'][$i]!="")
                {
                        $p=$file['name'][$i];
                        $pos=strrpos($p,".");
                        $ph=strtolower(substr($p,$pos+1,strlen($p)-$pos));
                        $im_size =  round($file['size'][$i]/1024,2);

                        if($im_size > $max_foto_size)
                           {
                                echo "Image is Too Large";
                                return;
                           }
                        $photo_extention = explode(",",$photo_extention);
                        if(!in_array($ph,$photo_extention ))
                           {
                                echo "Upload Correct Image";

                                return;
                           }
                }
                        $ran=date(time());
                        $c=$ran.rand(1,10000);
                        $ran.=$c.".".$ph;



                        if(isset($file['tmp_name'][$i]) && is_uploaded_file($file['tmp_name'][$i]))
                        {
                        $ff = $path."images/".$folder_name."/".$ran;
                        $ff2 =$path."images/".$folder_name."/thumb/thumb_".$ran;
                        $name = "thumb_".$ran ;
                        move_uploaded_file($file['tmp_name'][$i], $ff );
                        createThumb($ff,$ff2,100,100);
                        chmod($ff, 0777);
                        }
               return  $ran;
        }
function file_size($filename)
{
        $size= filesize($filename)/1024;
       //filesize( imagePath + ImageName );
       return sprintf("%.2f",$size);
}
        
function delete_picture($id,$name,$table) //delete_picture(id,photo name,table name);
{
        global $conn;
       $sql="delete from ".$table." where id='".$id."'";
       $conn->execute($sql);
       
        unlink("photo/".$name);
        unlink("photo/thumb/thumb_".$name);
}


function year_box($year="")
{
        $date=getdate();
        $tem=$date['year']-2;
        $tpe="";
        if($year=="")
                $year=$date['year'];
        for($i=1;$i<=11;$i++)
        {
                if($year==$tem)
                        $tpe .="<option value=$tem selected>$tem</option>";
                else
                        $tpe .="<option value=$tem >$tem</option>";
                $tem++;
        }
        return $tpe;
}



function month_box($mon="")
{
        $today=getdate();
        if($mon=="")
                $mon=$today['mon'];
        $month="";
        $months=array("January","February","March","April","May","June","July","August","September","October","November","December");
        for($i=0;$i<12;$i++)
        {
                $k = $i+1;
                if($i==($mon-1))
                        $month.="<option value='$k' selected>$months[$i]</option>";
                else
                        $month.="<option value='$k'>$months[$i]</option>";
        }
        return $month;
}

function month_box_num($mon="")
{
        $today=getdate();
        if($mon=="")
                $mon=$today['mon'];
        $month="";
        for($i=1;$i<=12;$i++)
                {
                        if($i==$mon)
                                $month.="<option value='$i' selected>$i</option>";
                        else
                                $month.="<option value='$i'>$i</option>";
                }
        return $month;
}


function day_box($date="")
{
        $day="";
        $today=getdate();
        //print_r($today);
        if($date=="")
                $date=$today['mday'];
        for($i=1;$i<=31;$i++)
                {
                        if($i==$date)
                                $day.="<option value='$i' selected>$i</option>";
                        else
                                $day.="<option value='$i'>$i</option>";
                }
        return $day;
}

function datetime()
{
        $date=date("Y-m-d h:i:s");
        return $date;
}
/////////////////////////////////////////////////////
function register_validate($VALS)
{
        $msg="";

        if($VALS['username']=="")
                $msg="Username Cannot Be Blank. Please Enter Name";
        elseif($VALS['password']=="")
                $msg="Password Cannot Be Empty. Please Enter Your Pasword";
        elseif(!check_length($VALS['password'],6))
                $msg="Too Small...Password Should Contain At Least 6 Characters";
        elseif($VALS['password']!=$VALS['repassword'])
                $msg="Password & Re-enter Password Mismatch. Please Check Again";
        elseif($VALS['email']=="")
                $msg="Email Cannot Be Blank. Please Enter Your Email Address";
        elseif(!check_email($VALS['email']))
                $msg="Invalid Email Address. Please Provide A Valid E-mail Address";
        elseif($VALS['email']!=$VALS['reemail'])
                $msg="Email & Re-enter Email Mismatch. Please Check Again";
        elseif($VALS['name']=="")
                $msg="Name Cannot Be Blank. Please Enter Name";
        elseif($VALS['surname']=="")
                $msg="Surname Cannot Be Blank. Please Enter Surname";
        elseif($VALS['address']=="")
                $msg="Address Cannot Be Blank. Please Enter Address";
        elseif($VALS['reg_num']=="")
                $msg="Registration Number Cannot Be Blank. Please Enter Registration Number";


        if($msg=="")
        {
                $sql="SELECT username from student_info where username='$VALS[username]'";
                $result = mysql_query($sql);
                if(mysql_num_rows($result)>=1)
                $msg="This username is Already Registered";
        }

        if($msg=="")
        {
                $sql="SELECT reg_num from student_info where reg_num='$VALS[reg_num]'";
                $result = mysql_query($sql);
                if(mysql_num_rows($result)>=1)
                $msg="This email is Already Registered";
        }

        return $msg;
}




function update_validate($VALS)
{
        $msg="";

        if($VALS['password']=="")
                $msg="Password Cannot Be Empty. Please Enter Your Pasword";
        elseif(!check_length($VALS['password'],6))
                $msg="Too Small...Password Should Contain At Least 6 Characters";
        elseif($VALS['password']!=$VALS['repassword'])
                $msg="Password & Re-enter Password Mismatch. Please Check Again";
        elseif($VALS['email']=="")
                $msg="Email Cannot Be Blank. Please Enter Your Email Address";
       // elseif(!check_email($VALS['email']))
                //$msg="Invalid Email Address. Please Provide A Valid E-mail Address";
        elseif($VALS['email']!=$VALS['reemail'])
                $msg="Email & Re-enter Email Mismatch. Please Check Again";
        elseif($VALS['name']=="")
                $msg="Name Cannot Be Blank. Please Enter Name";
        elseif($VALS['surname']=="")
                $msg="Surname Cannot Be Blank. Please Enter Surname";
        elseif($VALS['address']=="")
                $msg="Address Cannot Be Blank. Please Enter Address";
        elseif($VALS['reg_num']=="")
                $msg="Registration Number Cannot Be Blank. Please Enter Registration Number";

        return $msg;
}



function articles_validate($VALS)
{
        $msg="";
        if($VALS['name']=="")
                $msg="Article Name Cannot Be Blank. Please Enter Article Name";
        elseif($VALS['body']=="")
                $msg="Article Body Cannot Be Blank. Please Enter Article Body";
        return $msg;
}



function session_box($sel=""){
        $sql = "select * from session order by id";
        $result = mysql_query($sql);

        while($array=mysql_fetch_array($result))
        {
           $session = $array['session'];
           $id = $array['id'];

           if($sel==$id)
                   $coun .="<option value='$id' selected>$session</option>";
           else
                   $coun .="<option value='$id'>$session</option>";
        }
return $coun;
}


function view_session($sel=""){
        $sql="select * from session where id='$sel'";
        $result = mysql_query($sql);
        $array=mysql_fetch_array($result);
        
        $session=$array['session'];
        echo $session;
}

function view_user($sel=""){
        $sql="select username from student_info where id='$sel'";
        $result = mysql_query($sql);
        $array=mysql_fetch_array($result);

        $name=$array['username'];
        echo $name;
}

function view_article($sel="")
{
        $sql="select count(*) as total from articles where user_id='$sel'";
        $result=mysql_query($sql);
        $array=mysql_fetch_array($result);
        $total=$array['total'];
        echo $total;
}

function check_admin_login()
{
        if($_SESSION['AUSERNAME']!='' && $_SESSION['APASSWORD']!='')
        {
                return true;
        }
        else
                redirect('login.php');
}





?>
