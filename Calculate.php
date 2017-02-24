<?php

require('Form.php');

use Assignment2\Form;
$form = new Form($_GET);

#values
class Calculate{
  $value=$form->get('value','');
  $rent=$form->get('rent','');
  $months = $form->isChosen('month','');
  $otherincome = $form->isChosen('otherincome','');
  $expense = $form->isChosen('$expense','');

    if($form->isSubmitted()){
      public function__calculate($value,$rent,$months,$otherincome,$expense)
      {
        $caprate=(($rent*$months+$otherincome)-$expense)/$value;
        echo 'The CapRate for this property is: $caprate';
      }
    }
  }
?>#end of class
