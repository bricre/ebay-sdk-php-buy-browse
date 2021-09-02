<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the local pickup options that are available
 * for the item. It is used by the pickupOptions container.
 */
class PickupOptionSummary extends AbstractModel
{
    /**
     * This container returns the local pickup options available to the buyer. Possible
     * values are ARRANGED_LOCATION and STORE.
     *
     * @var string
     */
    public $pickupLocationType = null;
}
