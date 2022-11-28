<?php
$checkuser = loginchecker($DBCONNECT);
/*

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
*/

$error = "";

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['token']) && isset($_POST['token']) && $_SESSION['token'] == $_POST['token']) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $birth = $_POST['birth'];
    $housenumber = $_POST['housenumber'];
    $streetname = $_POST['streetname'];
    $townname = $_POST['townname'];
    $postcode = $_POST['postcode'];

    if($error == "") {

        $arr['name'] = $name;
        $arr['email'] = $email;
        $arr['birth'] = $birth;
        $arr['housenumber'] = $housenumber;
        $arr['streetname'] = $streetname;
        $arr['townname'] = $townname;
        $arr['postcode'] = $postcode;

        //read from database
        $query = "SELECT * FROM customer WHERE name = :name && email = :email && birth = :birth && housenumber = :housenumber && streetname = :streetname && townname = :townname && postcode = :postcode LIMIT 1";
        $result = $DBCONNECT->prepare($query);
        $checker = $result->execute($arr);

        if ($checker) {
        $datafound = $result->fetchALL(PDO::FETCH_OBJ);

            if (is_array($datafound) && count($datafound) > 0 ) {
                $datafound = $datafound[0];
                $_SESSION['identifier'] = $datafound->identifier;
                $_SESSION['name'] = $datafound->name;
                $_SESSION['email'] = $datafound->email;
                $_SESSION['birth'] = $datafound->birth;
                $_SESSION['housenumber'] = $datafound->housenumber;
                $_SESSION['streetname'] = $datafound->streetname;
                $_SESSION['townname'] = $datafound->townname;
                $_SESSION['postcode'] = $datafound->postcode;
            }
        }
    }   
}
$_SESSION['token'] = individualidentifier(60);
?>