<?php



//  CORS Error

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS, post, get');
header("Access-Control-Max-Age", "3600");
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
header("Access-Control-Allow-Credentials", "true");



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// generate user ref number
function get_random_figures(){
    $date_obj = date_create(); 
    $reg_ref_num = date_timestamp_get($date_obj) . random_int(10000,99999) ;
    return $reg_ref_num;
}


function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}


function sessionSet(){
    if (!isset($_SESSION)) {
        session_start();
    }
    return true;
 }

 function gw_send_sms($sms_to,$sms_msg)  {
    $user = 'APIW7GYK6ZKQZ';
    $pass= 'APIW7GYK6ZKQZKI9KD';
    $sms_from = 'Bacong NHS';

    $query_string = "api.aspx?apiusername=".$user."&apipassword=".$pass;
    $query_string .= "&senderid=".rawurlencode($sms_from)."&mobileno=".rawurlencode($sms_to);
    $query_string .= "&message=".rawurlencode(stripslashes($sms_msg)) . "&languagetype=1";        
    $url = "http://gateway.onewaysms.com.au:10001/".$query_string;       
    $fd = @implode ('', file ($url));      
    if ($fd){                       
        if ($fd > 0) 
            $ok = "success";
        else 
            $ok = "fail";
    }           
    else {                                          
            $ok = "noContact";       
    }           
    return $ok;  
}  


function generateQr($filepath,$logopath,$codeContents){
    // Customize how you want
        QRcode::png($codeContents,$filepath , QR_ECLEVEL_H, 15);
        // Start DRAWING LOGO IN QRCODE
        $QR = imagecreatefrompng($filepath);
        // START TO DRAW THE IMAGE ON THE QR CODE
        $logo = imagecreatefromstring(file_get_contents($logopath));
        /**
         *  Fix for the transparent background
         */
        imagecolortransparent($logo , imagecolorallocatealpha($logo , 0, 0, 0, 127));
        imagealphablending($logo , false);
        imagesavealpha($logo , true);

        $QR_width = imagesx($QR);
        $QR_height = imagesy($QR);

        $logo_width = imagesx($logo);
        $logo_height = imagesy($logo);

        // Scale logo to fit in the QR Code
        $logo_qr_width = $QR_width/5;
        $scale = $logo_width/$logo_qr_width;
        $logo_qr_height = $logo_height/$scale;

        imagecopyresampled($QR, $logo, $QR_width/2.5, $QR_height/2.7, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);

    if(imagepng($QR,$filepath))
        return true;
}
