<?php

// Function for keeping inputs from user clear without database/coding issues
function specialchar($word) {

    return addslashes($word);

}

?>