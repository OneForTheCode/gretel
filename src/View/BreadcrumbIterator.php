<?php

namespace Glhd\Gretel\View;

use ArrayIterator;

class BreadcrumbIterator extends ArrayIterator
{
	protected BreadcrumbCollection $collection;
	
	public function __construct(BreadcrumbCollection $collection, $array = [], $flags = 0)
	{
		$this->collection = $collection;
		
		parent::__construct($array, $flags);
	}
	
	public function current(): mixed
	{
		return $this->collection->active = parent::current();
	}
}
