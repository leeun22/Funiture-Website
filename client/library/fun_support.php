<?php
    function fix_phone_number( $result, $tel ){ 
    $result = preg_match( '/^(09|03|07|08|05)+([0-9]{8})$/', $tel ); 
    return $result; 
    } 
?>