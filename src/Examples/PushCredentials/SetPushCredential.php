<?php

/**
 * @method SetPushCredential Modify push credentials
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetPushCredentialParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * push_credential_id - The push credentials id.
 * external_app_name - The application name.
 * cert_password - The secret password for private key.
 */
$params = new SetPushCredentialParams();

$params->push_credential_id = 1;
$params->external_app_name = 'testapp';
$params->cert_password = '1234567';

// Modify credentials.
$result = $voxApi->PushCredentials->SetPushCredential($params);

// Show result
var_dump($result);