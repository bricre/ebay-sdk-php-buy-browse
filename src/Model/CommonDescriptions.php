<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the item ids that all use a common
 * description. Often the item variations within an item group all have the same
 * description. Instead of repeating this description in the item details of each
 * item, a description that is shared by at least one other item is returned in
 * this container. If the description is unique, it is returned in the
 * items.description field.
 */
class CommonDescriptions extends AbstractModel
{
    /**
     * A list of item ids that have this description.
     *
     * @var string[]
     */
    public $itemIds = null;
}
