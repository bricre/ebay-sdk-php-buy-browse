<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The container that defines the fields for the conditions refinements. This
 * container is returned when fieldgroups is set to CONDITION_REFINEMENTS or FULL
 * in the request.
 */
class ConditionDistribution extends AbstractModel
{
    /**
     * The text describing the condition of the item, such as New or Used. For a list
     * of condition names, see Item Condition IDs and Names. Code so that your app
     * gracefully handles any future changes to this list. Note: In all eBay
     * marketplaces, Condition ID 2000 now maps to an item condition of 'Certified
     * Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified
     * Refurbished', a seller must be pre-qualified by eBay for this feature.
     *
     * @var string
     */
    public $condition = null;

    /**
     * The identifier of the condition. For example, 1000 is the identifier for NEW.
     * Note: In all eBay marketplaces, Condition ID 2000 now maps to an item condition
     * of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item
     * as 'Certified Refurbished', a seller must be pre-qualified by eBay for this
     * feature.
     *
     * @var string
     */
    public $conditionId = null;

    /**
     * The number of items having the condition.
     *
     * @var int
     */
    public $matchCount = null;

    /**
     * The HATEOAS reference of this condition.
     *
     * @var string
     */
    public $refinementHref = null;
}
