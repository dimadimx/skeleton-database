<?php
/**
 * Config class
 * Configuration for Skeleton\Database
 *
 * @author Christophe Gosiau <christophe@tigron.be>
 * @author Gerry Demaret <gerry@tigron.be>
 */

namespace Skeleton\Database;

class Config {

	/**
	 * Keep a log of all queries executed
	 *
	 * @access public
	 * @var boolean $query_log
	 */
	public static $query_log = false;

	/**
	 * Keep a counter of all queries executed
	 *
	 * @access public
	 * @var boolean $query_counter
	 */
	public static $query_counter = true;

	/**
	 * Trim data longer than field length
	 *
	 * @access public
	 * @var boolean $auto_trim
	 */
	public static $auto_trim = false;

	/**
	 * Purge the properties that are not real storage
	 *
	 * @access public
	 * @var boolean $auto_discard
	 */
	public static $auto_discard = false;

	/**
	 * Adds null for fields nullable where no data is passed
	 *
	 * @access public
	 * @var boolean $auto_null
	 */
	public static $auto_null = false;
}
