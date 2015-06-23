<?php

require_once 'constants.php';
require_once 'connect.php';
require_once 'vendor/autoload.php';


use Xuma\Bfxm\Builder;

$step = isset($_POST['step']) ? $_POST['step'] : 1;
$caller = isset($_POST['caller']) ? $_POST['caller'] : false;
$returnVal = isset($_POST['returnVal']) ? $_POST['returnVal'] : false;

switch ($step) {
    case 1:
        $bfxm = new Builder();
        $bfxm->play($soundWelcome)
            ->gather([
            "min_digits" => 1,
            "max_digits" => 1,
            "max_attempts" => 3,
            "ask" => ".$soundDecralation.",
            "play_on_error"  => ".$soundWrongKey.",
            "variable_name" => "returnVal"])
            ->build(true);
        break;

    case 2:
        $bfxm = new Builder();
        $bfxm->play($soundClosing)
            ->dial(10)
            ->build(true);

        $connect = new connect($servername, $dbname, $username, $password);
        $connect->insert($caller, $returnVal);
        break;

    default:
        die("Unexpected Error!!");
        break;
}