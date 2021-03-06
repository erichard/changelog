<?php
/**
 * PHP Version 5.6
 * @category Library
 * @package ChangeLog
 * @author Steve "uru" West <steven.david.west@gmail.com>
 * @license MIT http://opensource.org/licenses/MIT
 * @link https://github.com/stevewest/changelog
 */

namespace ChangeLog\Stub;

use ChangeLog\IO\GitHub;
use Mockery;

class GitHubStub extends GitHub
{

	/**
	 * @return \Mockery\Mock
	 */
	public function setApi($api)
	{
		$this->api = $api;
	}

}
