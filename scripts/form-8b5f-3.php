<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Subscription for SIMPP',
    'email_message' => 'You have a new subscription',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => '182001@std.stpaulscollege.edu.hk'
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'email\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>