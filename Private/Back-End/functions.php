<?php
// Generating a random string for the UniqueIdentifer
function individualidentifier($length) {
    $array = array(0,1,2,3,4,5,6,7,8,9,0,'a','b','c','d','e','f','g','h','I','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $text = "";
    $length = rand(4, $length);

    for ($i=0; $i<$length; $i++) {
        $random = rand(0, 61);
        $text .= $array[$random];
    }
    
    return $text;
}

// Function too allow the database from having issues
function specialchar($word) {
    return addslashes($word);
}

function loginchecker($DBCONNECT) {

    if (isset($_SESSION['identifier'])) {
        $arr['identifier'] = $_SESSION['identifier'];
        $query = "SELECT * FROM login_details WHERE identifier = :identifier LIMIT 1";
        $statement = $DBCONNECT->prepare($query);
        $checker = $statement->execute($arr);

        if ($checker) {
            $datafound = $statement->fetchALL(PDO::FETCH_OBJ);
            if (is_array($datafound) && count($datafound) > 0) {

                return $datafound[0];
            }
        }
    }
    header("Location: signin.php");
    exit;
}

?>