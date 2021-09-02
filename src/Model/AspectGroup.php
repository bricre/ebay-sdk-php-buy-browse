<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class AspectGroup extends AbstractModel
{
    /**
     * An array of the name/value pairs for the aspects of the product. For example:
     * BRAND/Apple.
     *
     * @var \Ebay\Buy\Browse\Model\Aspect[]
     */
    public $aspects = null;

    /**
     * The name of a group of aspects. In the following example, Product Identifiers
     * and Process are product aspect group names. Under the group name are the product
     * aspect name/value pairs. Product Identifiers &nbsp;&nbsp;&nbsp;Brand/Apple
     * &nbsp;&nbsp;&nbsp;Product Family/iMac Processor &nbsp;&nbsp;&nbsp;Processor
     * Type/Intel &nbsp;&nbsp;&nbsp;Processor Speed/3.10.
     *
     * @var string
     */
    public $localizedGroupName = null;
}
