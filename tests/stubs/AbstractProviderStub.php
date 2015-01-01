<?php
/**
 * PHP Version 5.5
 * @category Library
 * @package ChangeLog
 * @author Steve "uru" West <uruwolf@gmail.com>
 * @license MIT http://opensource.org/licenses/MIT
 * @link https://github.com/stevewest/changelog
 */

namespace ChangeLog\Stub;

use ChangeLog\AbstractProvider;

/**
 * Stub class for testing AbstractProvider
 */
class AbstractProviderStub extends AbstractProvider
{

	protected $configDefaults = [
		'default' => 'value',
	];

	/**
	 * Returns the next available line of the change log or null if there is no more
	 * content.
	 *
	 * @return string|null
	 */
	public function nextLine()
	{
		return null;
	}

}
