<?php

namespace Voximplant\Resources\Params;

class GetHistoryReportsParams
{
	/** @var number The history report ID to filter */
	public $history_report_id;

	/** @var stringlist The history report type list separated by the ';' symbol or the 'all' value. The following values are possible: calls, transactions, audit, call_list. */
	public $history_type;

	/** @var timestamp The UTC creation from date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
	public $created_from;

	/** @var timestamp The UTC creation to date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
	public $created_to;

	/** @var boolean Is report completed? */
	public $is_completed;

	/** @var boolean Set true to get records in the descent order. */
	public $desc_order;

	/** @var number The max returning record count. */
	public $count;

	/** @var number The first N records will be skipped in the output. */
	public $offset;
}
