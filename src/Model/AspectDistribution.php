<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that define the fields for the aspect information. Aspects are the
 * variations of an item, such as color, size, etc.
 */
class AspectDistribution extends AbstractModel
{
    /**
     * An array of containers for the various values of the aspect and the match count
     * and a HATEOAS reference ( refinementHref) for this aspect.
     *
     * @var \Ebay\Buy\Browse\Model\AspectValueDistribution[]
     */
    public $aspectValueDistributions = null;

    /**
     * The name of an aspect, such as Brand, Color, etc.
     *
     * @var string
     */
    public $localizedAspectName = null;
}
