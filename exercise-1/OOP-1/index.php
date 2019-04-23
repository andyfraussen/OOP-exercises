<?php

require 'form.php';

$form = new Form(array(
    'name' => '',
    'gender' => '',
    'text' => '',
    'status' => ''
));
echo $form->formstart();
echo $form->input('name');
echo $form->gender('gender');
echo $form->textarea('text');
echo $form->radiobutton('status');
echo $form->submit();
echo $form->formend();


