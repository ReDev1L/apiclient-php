<?php

/**
 * @method GetAuthorizedAccountIPs Gets the authorized IP4 or network.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetAuthorizedAccountIPsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 */
$params = new GetAuthorizedAccountIPsParams();


// Show the all items.
$result = $voxApi->AuthorizedIPs->GetAuthorizedAccountIPs($params);

// Show result
var_dump($result);
