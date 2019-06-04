<?php

namespace Voximplant\Interfaces;

interface PhoneNumbersInterface
{
	/**
	 * @method Attach the phone number to the account. To attach the German, Italian phone numbers you should specify the phone_owner_* parameters.
	 */
	public function AttachPhoneNumber(\Voximplant\Resources\Params\AttachPhoneNumberParams $params);


	/**
	 * @method Bind the phone number to the application or unbind the phone number from the application. You should specify the application_id or application_name if you specify the rule_name.
	 */
	public function BindPhoneNumberToApplication(\Voximplant\Resources\Params\BindPhoneNumberToApplicationParams $params);


	/**
	 * @method Deactivates the phone number.
	 */
	public function DeactivatePhoneNumber(\Voximplant\Resources\Params\DeactivatePhoneNumberParams $params);


	/**
	 * @method Configure the phone number.
	 */
	public function SetPhoneNumberInfo(\Voximplant\Resources\Params\SetPhoneNumberInfoParams $params);


	/**
	 * @method Gets the account phone numbers.
	 */
	public function GetPhoneNumbers(\Voximplant\Resources\Params\GetPhoneNumbersParams $params);


	/**
	 * @method Gets the new phone numbers.
	 */
	public function GetNewPhoneNumbers(\Voximplant\Resources\Params\GetNewPhoneNumbersParams $params);


	/**
	 * @method Gets the phone number categories.
	 */
	public function GetPhoneNumberCategories(\Voximplant\Resources\Params\GetPhoneNumberCategoriesParams $params);


	/**
	 * @method Gets the phone number country states.
	 */
	public function GetPhoneNumberCountryStates(\Voximplant\Resources\Params\GetPhoneNumberCountryStatesParams $params);


	/**
	 * @method Get the country regions of the phone numbers. The response will also contain the info about multiple numbers subscription for the child accounts.
	 */
	public function GetPhoneNumberRegions(\Voximplant\Resources\Params\GetPhoneNumberRegionsParams $params);


	/**
	 * @method Get actual info the country region of the phone numbers. The response will also contain the info about multiple numbers subscription for the child accounts.
	 */
	public function GetActualPhoneNumberRegion(\Voximplant\Resources\Params\GetActualPhoneNumberRegionParams $params);
}
class AttachPhoneNumberReturn
{
	/** @var number 1 */
	public $result;

	/** @var [NewAttachedPhoneInfoType] The attached phone numbers. */
	public $phone_numbers;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class BindPhoneNumberToApplicationReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class DeactivatePhoneNumberReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class SetPhoneNumberInfoReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetPhoneNumbersReturn
{
	/** @var [AttachedPhoneInfoType] */
	public $result;

	/** @var number The total found phone count. */
	public $total_count;

	/** @var number The returned phone count. */
	public $count;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetNewPhoneNumbersReturn
{
	/** @var [NewPhoneInfoType] */
	public $result;

	/** @var number The total found phone count. */
	public $total_count;

	/** @var number The returned phone count. */
	public $count;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetPhoneNumberCategoriesReturn
{
	/** @var [PhoneNumberCountryInfoType] */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetPhoneNumberCountryStatesReturn
{
	/** @var [PhoneNumberCountryStateInfoType] */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetPhoneNumberRegionsReturn
{
	/** @var [PhoneNumberCountryRegionInfoType] */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetActualPhoneNumberRegionReturn
{
	/** @var PhoneNumberCountryRegionInfoType */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
