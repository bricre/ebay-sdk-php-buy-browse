<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class PaymentMethod extends AbstractModel
{
    /**
     * The payment method type, such as credit card or cash. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:PaymentMethodTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $paymentMethodType = null;

    /**
     * The payment method brands, including the payment method brand type and logo
     * image.
     *
     * @var \Ebay\Buy\Browse\Model\PaymentMethodBrand[]
     */
    public $paymentMethodBrands = null;

    /**
     * The payment instructions for the buyer, such as cash in person or contact
     * seller.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/buy/browse/types/gct:PaymentInstructionEnum'>eBay
     *                   API documentation</a>[]
     */
    public $paymentInstructions = null;

    /**
     * The seller instructions to the buyer, such as accepts credit cards or see
     * description.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/buy/browse/types/gct:SellerInstructionEnum'>eBay
     *                   API documentation</a>[]
     */
    public $sellerInstructions = null;
}
