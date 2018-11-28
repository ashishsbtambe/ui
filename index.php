<?php
require 'vendor/autoload.php';

$app = new \atk4\ui\App();   // That's your UI application
$app->initLayout('Centered');

$form = new \atk4\ui\Form(); // Yeah, that's a form!
$app->add($form);

$form->addField('email');    // adds field
$form->onSubmit(function ($form) {
    // implement subscribe here

    return $form->success('Subscribed '.$form->model['email'].' to newsletter.');
});

// Decorate anything
$form->buttonSave->set('Subscribe');
$form->buttonSave->icon = 'mail';

// everything renders automatically
