<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Amount extends AbstractModel
{
    /**
     * The list of valid currencies. Each ISO 4217 currency code includes the currency
     * name followed by the numeric value. For example, the Canadian Dollar code (CAD)
     * would take the following form: Canadian Dollar, 124. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The value of the discounted amount.
     *
     * @var string
     */
    public $value = null;
}
