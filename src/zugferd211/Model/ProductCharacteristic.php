<?php

namespace Easybill\ZUGFeRD211\Model;

use JMS\Serializer\Annotation as JMS;

class ProductCharacteristic
{
    /**
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("Description")
     */
    public string $description;

    /**
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @JMS\SerializedName("Value")
     */
    public string $value;

    public static function create(string $description, string $value): self
    {
        $self = new self();
        $self->description = $description;
        $self->value = $value;
        return $self;
    }
}
