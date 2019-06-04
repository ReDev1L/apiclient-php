<?php

/**
 * @method BindSkill Binds the specified skills to the users (ACD operators) and/or the ACD queues.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\BindSkillParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * skill_id - The skill ID list or the 'all' value.
 * user_id - The user ID list or the 'all' value.
 */
$params = new BindSkillParams();

$params->skill_id = array (
    0 => 1,
    1 => 3,
);
$params->user_id = array (
    0 => 5,
    1 => 6,
    2 => 10,
);

// Bind the skills 1, 5 to the users 5, 6, 10.
$result = $voxApi->Skills->BindSkill($params);

// Show result
var_dump($result);
