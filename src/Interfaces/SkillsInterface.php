<?php

namespace Voximplant\Interfaces;

interface SkillsInterface
{
	/**
	 * @method Adds a new ACD operator skill.
	 */
	public function AddSkill(\Voximplant\Resources\Params\AddSkillParams $params);


	/**
	 * @method Deletes the skill.
	 */
	public function DelSkill(\Voximplant\Resources\Params\DelSkillParams $params);


	/**
	 * @method Edits the skill.
	 */
	public function SetSkillInfo(\Voximplant\Resources\Params\SetSkillInfoParams $params);


	/**
	 * @method Gets the skills.
	 */
	public function GetSkills(\Voximplant\Resources\Params\GetSkillsParams $params);


	/**
	 * @method Binds the specified skills to the users (ACD operators) and/or the ACD queues.
	 */
	public function BindSkill(\Voximplant\Resources\Params\BindSkillParams $params);
}

{
	/** @var number 1 */
	public $result;

	/** @var number The skill ID */
	public $skill_id;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}

{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}

{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}

{
	/** @var [SkillInfoType] */
	public $result;

	/** @var number The total found skill count. */
	public $total_count;

	/** @var number The returned skill count. */
	public $count;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}

{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}