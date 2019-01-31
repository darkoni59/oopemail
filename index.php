<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 09:29
 */
require "classe/email.php";

$envemail=new email();



$envemail->setDest('bryanbultot@gmail.com');
$envemail->setMessage('voici un message');
$envemail->setTitremess('c est forcemment ');
$envemail->envoyer();

