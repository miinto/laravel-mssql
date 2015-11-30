<?php

namespace Miinto\Database\Schema;

use Illuminate\Database\Schema\Blueprint;

class MsSqlBlueprint extends Blueprint
{
	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @param string $column
	 * @return \Illuminate\Support\Fluent
	 */
	public function dateTime2($column)
	{
		return $this->addColumn('datetime2', $column);
	}

	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @param string $column
	 * @return \Illuminate\Support\Fluent
	 */
	public function real($column)
	{
		return $this->addColumn('real', $column);
	}

	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @param string $column
	 * @return \Illuminate\Support\Fluent
	 */
	public function uniqueIdentifier($column)
	{
		return $this->addColumn('uniqueidentifier', $column);
	}
}