<?php

namespace Easybill\ZUGFeRD211\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;

class TradeProduct
{
    /**
     * @Type("Easybill\ZUGFeRD211\Model\Id")
     * @XmlElement(cdata=false,namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("GlobalID")
     */
    public ?Id $globalID = null;

    /**
     * @Type("string")
     * @XmlElement(cdata=false,namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("SellerAssignedID")
     */
    public ?string $sellerAssignedID = null;

    /**
     * @Type("string")
     * @XmlElement(cdata=false,namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("Name")
     */
    public string $name;

    /**
     * @Type("string")
     * @XmlElement(cdata=false,namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("Description")
     */
    public ?string $description = null;

    /**
     * @var ProductCharacteristic[]
     * @Type("array<Easybill\ZUGFeRD211\Model\ProductCharacteristic>")
     * @XmlList(inline = true, entry = "ApplicableProductCharacteristic", namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     */
    public ?array $productCharacteristic = [];

    /**
     * @Type("Easybill\ZUGFeRD211\Model\TradeCountry")
     * @XmlElement(cdata=false,namespace="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100")
     * @SerializedName("OriginTradeCountry")
     */
    public ?TradeCountry $tradeCountry = null;
}
