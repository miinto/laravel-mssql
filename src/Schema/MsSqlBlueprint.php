<?php namespace Miinto\Database\Schema;

use Illuminate\Database\Schema\Blueprint;

/**
 * Class MsSqlBlueprint
 *
 * @package Miinto\Database\Schema
 */
class MsSqlBlueprint extends Blueprint
{
	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @param string $column
	 *
	 * @return \Illuminate\Support\Fluent
	 */
	public function bit($column)
	{
		return $this->addColumn('bit', $column);
	}


	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @param string $column
	 *
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
	 *
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
	 *
	 * @return \Illuminate\Support\Fluent
	 */
	public function uniqueIdentifier($column)
	{
		return $this->addColumn('uniqueidentifier', $column);
	}


	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @param string $column
	 *
	 * @return \Illuminate\Support\Fluent
	 */
	public function money($column)
	{
		return $this->addColumn('money', $column);
	}


	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @param string $column
	 *
	 * @return \Illuminate\Support\Fluent
	 */
	public function smallMoney($column)
	{
		return $this->addColumn('smallmoney', $column);
	}


	/**
	 * @author Simon Jensen <sj@miinto.com>
	 *
	 * @param string $column
	 *
	 * @return \Illuminate\Support\Fluent
	 */
	public function xml($column)
	{
		return $this->addColumn('xml', $column);
	}
}
