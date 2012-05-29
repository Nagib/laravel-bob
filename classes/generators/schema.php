<?php

/**
 * Generate a new eloquent models using the
 * schema structure.
 *
 * @package 	bob
 * @author 		Nagib C Kanaan
 * @copyright 	Nagib C Kanaan 2012
 * @license 	MIT License <http://www.opensource.org/licenses/mit>
 */
class Generators_Schema extends Generator
{
	/**
	 * Enable the timestamps string in models?
	 *
	 * @var string
	 */
	private $_timestamps = '';

	/**
	 * Start the generation process.
	 *
	 * @return void
	 */
	public function __construct($args)
	{
		parent::__construct($args);

		// load any command line switches
		$this->_settings();

		// start the generation
		$this->_schema_generation();

		// write filesystem changes
		$this->writer->write();
	}

	/**
	 * This method is responsible for generation all
	 * source from the templates, and populating the
	 * files array.
	 *
	 * @return void
	 */
	private function _schema_generation()
	{
	}

	/**
	 * Alter generation settings from artisan
	 * switches.
	 *
	 * @return void
	 */
	private function _settings()
	{
		if(Common::config('timestamps') or Common::config('t'))
			$this->_timestamps = "\tpublic static \$timestamps = true;\n\n";
	}
}
