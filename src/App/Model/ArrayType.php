<?php

namespace App\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlElement;


class ArrayType
{

    /**
     * @var string
     *
     * @SerializedName("TextField1")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    private $textField1;

    /**
     * @var string
     *
     * @SerializedName("TextField2")
     * @Type("string")
     * @XmlElement(cdata=false)
     */
    private $textField2;

    /**
     * @var \App\Model\Subtype
     *
     * @SerializedName("SubType")
     * @Type("App\Model\Subtype")
     * @XmlElement(cdata=false)
     */
    private $subtype;

    /**
     * @return string
     */
    public function getTextField1(): string
    {
        return $this->textField1;
    }

    /**
     * @param string $textField1
     * @return ObjectType
     */
    public function setTextField1(string $textField1): ArrayType
    {
        $this->textField1 = $textField1;

        return $this;
    }

    /**
     * @return string
     */
    public function getTextField2(): string
    {
        return $this->textField2;
    }

    /**
     * @param string $textField2
     * @return ObjectType
     */
    public function setTextField2(string $textField2): ArrayType
    {
        $this->textField2 = $textField2;

        return $this;
    }

    /**
     * @return Subtype
     */
    public function getSubtype(): Subtype
    {
        return $this->subtype;
    }

    /**
     * @param Subtype $subtype
     * @return ArrayType
     */
    public function setSubtype(Subtype $subtype): Subtype
    {
        $this->subtype = $subtype;

        return $this;
    }
}