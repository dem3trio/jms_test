<?php

namespace App\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;


/**
 * @XmlRoot("root_tag")
 */
class RootTag
{
    /**
     * @var string
     *
     * @SerializedName("stringType")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    private $stringType;

    /**
     * @var \App\Model\ObjectType
     *
     * @SerializedName("ObjectType")
     * @Type("App\Model\ObjectType")
     * @XmlElement(cdata=false)
     */
    private $objectType;

    /**
     * @var array
     *
     * @XmlList(inline = true, entry="ArrayType")
     * @Type("array<App\Model\ArrayType>")
     * @XmlElement(cdata=false)
     */
    private $arrayType;


    public function __construct(){
        $this->arrayType = array();
    }


    /**
     * @return string
     */
    public function getStringType(): string
    {
        return $this->stringType;
    }

    /**
     * @param string $stringType
     * @return RootTag
     */
    public function setStringType(string $stringType): RootTag
    {
        $this->stringType = $stringType;

        return $this;
    }

    /**
     * @return ObjectType
     */
    public function getObjectType(): ObjectType
    {
        return $this->objectType;
    }

    /**
     * @param ObjectType $objectType
     * @return RootTag
     */
    public function setObjectType(ObjectType $objectType): RootTag
    {
        $this->objectType = $objectType;

        return $this;
    }


    /**
     * @return ArrayType[]
     */
    public function getArrayType()
    {
        return $this->arrayType;
    }

    /**
     * @param array $arrayType
     */
    public function setArrayType($arrayType)
    {
        $this->arrayType = $arrayType;
    }
}
