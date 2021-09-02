<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the details of each item in an item group.
 * An item group is an item that has various aspect differences, such as color,
 * size, storage capacity, etc. When an item group is created, one of the item
 * variations, such as the red shirt size L, is chosen as the &quot;parent&quot;.
 * All the other items in the group are the children, such as the blue shirt size
 * L, red shirt size M, etc. Note: This container is returned only if the item_id
 * in the request is an item group (parent ID of an item with variations).
 */
class ItemGroupSummary extends AbstractModel
{
    /**
     * An array of containers with the URLs for images that are in addition to the
     * primary image of the item group. The primary image is returned in the
     * itemGroupImage field.
     *
     * @var \Ebay\Buy\Browse\Model\Image[]
     */
    public $itemGroupAdditionalImages = null;

    /**
     * The HATEOAS reference of the parent page of the item group. An item group is an
     * item that has various aspect differences, such as color, size, storage capacity,
     * etc.
     *
     * @var string
     */
    public $itemGroupHref = null;

    /**
     * The unique identifier for the item group. An item group is an item that has
     * various aspect differences, such as color, size, storage capacity, etc.
     *
     * @var string
     */
    public $itemGroupId = null;

    /**
     * The URL of the primary image of the item group. An item group is an item that
     * has various aspect differences, such as color, size, storage capacity, etc.
     *
     * @var \Ebay\Buy\Browse\Model\Image
     */
    public $itemGroupImage = null;

    /**
     * The title of the item that appears on the item group page. An item group is an
     * item that has various aspect differences, such as color, size, storage capacity,
     * etc.
     *
     * @var string
     */
    public $itemGroupTitle = null;

    /**
     * An enumeration value that indicates the type of the item group. An item group is
     * an item that has various aspect differences, such as color, size, storage
     * capacity, etc. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:ItemGroupTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $itemGroupType = null;
}
