<?php

namespace Miinto\Database\Schema\Grammars;

use Illuminate\Database\Schema\Grammars\SqlServerGrammar;
use Illuminate\Support\Fluent;

class MsSqlGrammar extends SqlServerGrammar
{
	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @param Fluent $column
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
	 * @return string
	 */
	protected function typeUniqueIdentifier(Fluent $column)
	{
		return 'uniqueidentifier';
	}
}
