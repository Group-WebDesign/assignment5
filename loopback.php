<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>loopback.php</TITLE>
</HEAD>
<BODY>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

    class JSONPair {
        public $Type = "";
        public $parameters = null;
    }

    $Pair = new JSONPair();
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $Pair->Type = "GET";
        foreach ($_GET as $key => $value) {
            $Pair->parameters[$key] = $value;
        }
    }
    else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Pair->Type = "POST";
        foreach ($_POST as $key => $value) {
            $Pair->parameters[$key] = $value;
        }
    }
    else {
        print "unknown request method";
    }
    
    print json_encode($Pair);

?>

</BODY>
</HTML>