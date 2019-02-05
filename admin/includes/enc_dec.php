<?php
/**
*Function to encrypt or decrypt the given value
*/
function encrypt_decrypt($string) {
    $string_length=strlen($string); 
    $encrypted_string=""; 

    for ($position = 0;$position<$string_length;$position++){         
        $key = (($string_length+$position)+1);
        $key = (255+$key) % 255;
        $get_char_to_be_encrypted = SUBSTR($string, $position, 1); 
        $ascii_char = ORD($get_char_to_be_encrypted); 
        $xored_char = $ascii_char ^ $key;  
        $encrypted_char = CHR($xored_char); 
        $encrypted_string .= $encrypted_char; 
    } 

    return urlencode($encrypted_string); 
 }
 
function encrypt($fetchid) {
	 $passstring=$fetchid*12345;
     $encrypted_string=encrypt_decrypt($passstring);
     $param=urlencode($encrypted_string);
     return $param;
}
function decrypt($fetchid) {
    $passstring=urldecode(stripslashes($fetchid));
    $decrypted_string= encrypt_decrypt($passstring);
    $actual_id= $decrypted_string/12345;
    return $actual_id;
}
	?>