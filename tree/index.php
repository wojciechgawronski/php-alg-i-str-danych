<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(
    function ($class) {
        include_once $class . ".php";
    }
);

if (php_sapi_name() === 'cli') {
    define('EOL', PHP_EOL);
} else {
    define('EOL', "<br>");
}

$ceo = new TreeNode('Prezes');
$tree = new Tree($ceo);

$cto = new TreeNode('dyrektor ds. technicznych');
$cfo = new TreeNode('dyrektor ds. finansowych');
$cmo = new TreeNode('dyrektor ds. marketingowych');
$coo = new TreeNode('dyrektor ds. operacyjnych');

$ceo->addChildren($cto);
$ceo->addChildren($cfo);
$ceo->addChildren($cmo);
$ceo->addChildren($coo);

$seniorArchitect = new TreeNode('starszy architekt');
$softwareEngineer = new TreeNode('programista');
$userInterfaceDesigner = new TreeNode('projktant interfejsu uzytkownika');
$qualityAssuranceEngineer = new TreeNode('tester');
$accuntant = new TreeNode('ksiegowa');
$seniorAccuntant = new TreeNode('starsza ksiegowa');
$juniorAccuntant = new TreeNode('młodsza księgowa');

$cto->addChildren($seniorArchitect);
$seniorArchitect->addChildren($softwareEngineer);
$cto->addChildren($qualityAssuranceEngineer);
$cto->addChildren($userInterfaceDesigner);

$cfo->addChildren($accuntant);
$cfo->addChildren($seniorAccuntant);
$seniorAccuntant->addChildren($juniorAccuntant);
$seniorAccuntant->addChildren($juniorAccuntant);

$tree->traverse($ceo, 1);
echo EOL;
echo EOL;
$tree->traverse($cfo, 0);
