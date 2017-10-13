<?php
namespace Sfi\Grid\Eel;

use Neos\Flow\Annotations as Flow;
use Neos\Eel\ProtectedContextAwareInterface;

class RangeHelper implements ProtectedContextAwareInterface
{
	/**
	 * @param mixed $start
	 * @param mixed $end
	 * @param number $step
	 * @return array
	 */
	public function range($start, $end, $step = 1) {
		return range($start, $end, $step);
	}

	/**
	 * All methods are considered safe
	 *
	 * @param string $methodName
	 * @return boolean
	 */
	public function allowsCallOfMethod($methodName)
	{
		return true;
	}
}
