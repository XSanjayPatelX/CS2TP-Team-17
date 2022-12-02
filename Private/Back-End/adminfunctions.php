<?php
// Generating a random string for the individualidentifierfor admins
function adminidentifier($length) {
    $array = array(0,1,2,3,4,5,6,7,8,9,0,'a','b','c','d','e','f','g','h','I','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $text = "";
    $length = rand(4, $length);

    for ($i=0; $i<$length; $i++) {
        $random = rand(0, 61);
        $text .= $array[$random];
    }
    
    return $text;
}

// A function to keep the user logged in if they try to access a webpage when not logged in then they will be redirected for admins
function adminchecker($DBCONNECT) {

    if (isset($_SESSION['identifier'])) {
        $arr['identifier'] = $_SESSION['identifier'];
        $admin_query = "SELECT * FROM admin_login WHERE identifier = :identifier LIMIT 1";
        $ad_statement = $DBCONNECT->prepare($admin_query);
        $ad_checker = $ad_statement->execute($arr);

        if ($ad_checker) {
            $ad_datafound = $ad_statement->fetchALL(PDO::FETCH_OBJ);
            if (is_array($ad_datafound) && count($ad_datafound) > 0) {

                return $ad_datafound[0];
            }
        }
    }
    header("Location: adminlog.php");
    exit;
}
?>