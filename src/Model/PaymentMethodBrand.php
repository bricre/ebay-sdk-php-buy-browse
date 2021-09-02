<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class PaymentMethodBrand extends AbstractModel
{
    /**
     * The payment method brand, such as Visa or PayPal. For implementation help, refer
     * to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:PaymentMethodBrandEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $paymentMethodBrandType = null;

    /**
     * The details of the logo image, such as the size and URL. Note: Currently, only
     * the imageUrl is populated.
     *
     * @var \Ebay\Buy\Browse\Model\Image
     */
    public $logoImage = null;
}
