<?php

/**
 * @method GetCallListDetails Get details of the specified call list. Returns a CSV file by default.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetCallListDetailsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * list_id - The list ID.
 * output - Output format (CSV/JSON/XLS). Default CSV
 */
$params = new GetCallListDetailsParams();

$params->list_id = 1;
$params->output = 'json';

// Get all lists registered by user
$result = $voxApi->CallLists->GetCallListDetails($params);

// Show result
var_dump($result);
