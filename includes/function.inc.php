<?php 

function Password_enc($password){
    $BlowFish_Hash_Format="$2y$10$";
    $Salt="Wearecodersandworkinginastartupproject";
    $Formatting_Blowfish_With_Salt=$BlowFish_Hash_Format.$Salt;
    $Hash=crypt($password,$Formatting_Blowfish_With_Salt);
    return $Hash;
}
 ?>