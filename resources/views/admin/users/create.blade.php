<?php

use OpenAdmin\Admin\Widgets\Form;

$form = new Form();
$form->action('/admin/users/create');
$form->text('email', __('Email'));
$form->text('name', __('Name'));
$form->password('password', __('Password'));

echo $form->render();
