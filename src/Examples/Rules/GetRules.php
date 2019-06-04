<?php

/**
 * @method GetRules Gets the rules.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetRulesParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * template - Search for template matching
 * with_scenarios - Set true to get bound scenarios info.
 * count - The max returning record count.
 */
$params = new GetRulesParams();

$params->template = '74951234567';
$params->with_scenarios = true;
$params->count = 1;

// Get the first rule for the template 74951234567
$result = $voxApi->Rules->GetRules($params);

// Show result
var_dump($result);
