<?php

$loader = require_once 'vendor/autoload.php';
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$loader, 'loadClass']);

$serializer = JMS\Serializer\SerializerBuilder::create()->build();

$app = new App\TestApp($serializer);
$app->run('test.xml', 'test2.xml');
