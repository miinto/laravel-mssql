<?php namespace Miinto\Database\Schema\Grammars;

use Illuminate\Database\Schema\Grammars\SqlServerGrammar;
use Illuminate\Support\Fluent;

/**
 * Class MsSqlGrammar
 *
 * @package Miinto\Database\Schema\Grammars
 */
class MsSqlGrammar extends SqlServerGrammar
{
	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @param Fluent $column
	 *
	 * @return string
	 */
	protected function typebit(Fluent $column)
	{
		return 'bit';
	}


	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @param Fluent $column
	 *
	 * @return string
	 */
	protected function typeDateTime2(Fluent $column)
	{
		return 'datetime2';
	}


	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @param Fluent $column
	 *
	 * @return string
	 */
	protected function typeReal(Fluent $column)
	{
		return 'real';
	}


	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @param Fluent $column
	 *
	 * @return string
	 */
	protected function typeUniqueIdentifier(Fluent $column)
	{
		return 'uniqueidentifier';
	}


	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @param Fluent $column
	 *
	 * @return string
	 */
	protected function typeMoney(Fluent $column)
	{
		return 'money';
	}


	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @param Fluent $column
	 *
	 * @return string
	 */
	protected function typeSmallMoney(Fluent $column)
	{
		return 'smallmoney';
	}


	/**
	 * @author Simon Jensen <sj@miinto.com>
	 *
	 * @param Fluent $column
	 *
	 * @return string
	 */
	protected function typeXml(Fluent $column)
	{
		return 'xml';
	}
}
