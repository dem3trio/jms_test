<?php

namespace App;


use App\Model\RootTag;
use JMS\Serializer\SerializerInterface;

class TestApp
{
    protected $serializer;

    public function __construct(SerializerInterface $jms)
    {
        $this->serializer = $jms;
    }

    public function run($testFilePath, $testFile2)
    {
        $this->doDeserializeTest($testFilePath);
        $this->doDeserializeTest($testFile2);
    }

    protected  function doDeserializeTest($filePath)
    {
        $data = file_get_contents($filePath);
        /** @var RootTag $object */
        $object = $this->serializer->deserialize($data,RootTag::class, 'xml');
        echo "ArrayType count for file $filePath: ".count($object->getArrayType())."\n";
    }
}