<?php
// app/config/assets_version.php

$assetsVersion = exec('git rev-parse --short HEAD');

$container->loadFromExtension(
    'framework',
    array(
        'templating' => array(
            'engines' => array('twig'),
            'assets_version' => $assetsVersion,
        ),
    )
);

$container->loadFromExtension(
    'twig',
    array(
        'globals' => array(
            'assets_version' => $assetsVersion,
        ),
    )
);
