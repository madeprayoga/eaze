<?php

namespace WPForms\Pro\SmartTags\SmartTag;

use WPForms\SmartTags\SmartTag\SmartTag;

/**
 * Class EntryId.
 *
 * @since 1.6.7
 */
class EntryId extends SmartTag {

	/**
	 * Get smart tag value.
	 *
	 * @since 1.6.7
	 *
	 * @param array  $form_data Form data.
	 * @param array  $fields    List of fields.
	 * @param string $entry_id  Entry ID.
	 *
	 * @return int
	 */
	public function get_value( $form_data, $fields = [], $entry_id = '' ) {

		return absint( $entry_id );
	}
}
