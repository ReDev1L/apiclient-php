<?php

/**
 * @method GetTransactionHistory Gets the transaction history.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetTransactionHistoryParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * from_date - The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * to_date - The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * count - The max returning record count.
 * transaction_type - The transaction type list. The following values are possible: periodic_charge, resource_charge, money_distribution, subscription_charge, subscription_installation_charge, card_periodic_payment, card_overrun_payment, card_payment, robokassa_payment, gift, add_money, subscription_cancel, adjustment, wire_transfer, refund.
 * timezone - The selected timezone or the 'auto' value (will be used the account location).
 */
$params = new GetTransactionHistoryParams();

$params->from_date = '2012-01-01 00:00:00';
$params->to_date = '2014-01-01 00:00:00';
$params->count = 3;
$params->transaction_type = array (
    0 => 'gift',
    1 => 'money_distribution',
);
$params->timezone = 'Etc/GMT';

// Get the three transactions record from the 2012-01-01 00:00:00 UTC to the 2014-01-01 00:00:00 UTC with the 'gift' or 'money_distribution' types.
$result = $voxApi->History->GetTransactionHistory($params);

// Show result
var_dump($result);
