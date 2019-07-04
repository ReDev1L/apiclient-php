<?php

/**
 * @method GetSubUsers Gets subusers.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetSubUsersParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * with_roles - Show subuser's roles
 */
$params = new GetSubUsersParams();

$params->with_roles = true;

// Get subusers info
$result = $voxApi->RoleSystem->GetSubUsers($params);

// Show result
var_dump($result);
