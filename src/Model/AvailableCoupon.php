<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class AvailableCoupon extends AbstractModel
{
    /**
     * The limitations or restrictions of the coupon.
     *
     * @var \Ebay\Buy\Browse\Model\CouponConstraint
     */
    public $constraint = null;

    /**
     * The discount amount after the coupon is applied.
     *
     * @var \Ebay\Buy\Browse\Model\Amount
     */
    public $discountAmount = null;

    /**
     * The type of discount that the coupon applies. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:CouponDiscountType'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $discountType = null;

    /**
     * A description of the coupon. Note: The value returned in the termsWebUrl field
     * should appear for all experiences when displaying coupons. The value in the
     * availableCoupons.message field must also be included, if returned in the API
     * response.
     *
     * @var string
     */
    public $message = null;

    /**
     * The coupon code.
     *
     * @var string
     */
    public $redemptionCode = null;

    /**
     * The URL to the coupon terms of use. Note: The value returned in the termsWebUrl
     * field should appear for all experiences when displaying coupons. The value in
     * the availableCoupons.message field must also be included, if returned in the API
     * response.
     *
     * @var string
     */
    public $termsWebUrl = null;
}
