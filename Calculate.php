<?php

require('form.php');
use DWA\Form;

$form = new Form($_GET);

$value = $form->get('value','');
$rent = $form->get('rent','');
$months = $form->get('months','');
$otherincome = $form->get('otherincome','');
$expense = $form->get('expense','');

if($form->isSubmitted()){
    $caprate = (($rent*$months+$otherincome)-$expense)/$value;
}
