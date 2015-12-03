<?php namespace Miinto\Database;

use Illuminate\Database\SqlServerConnection;
use Miinto\Database\Schema\Grammars\MsSqlGrammar;
use Miinto\Database\Schema\MsSqlBlueprint;

/**
 * Class MsSqlConnection
 *
 * @package Miinto\Database
 */
class MsSqlConnection extends SqlServerConnection
{
	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @return \Illuminate\Database\Grammar
	 */
	protected function getDefaultSchemaGrammar()
	{
		return $this->withTablePrefix(new MsSqlGrammar());
	}


	/**
	 * @author Michał Durys <md@miinto.com>
	 *
	 * @return \Illuminate\Database\Schema\Builder
	 */
	public function getSchemaBuilder()
	{
		$builder = parent::getSchemaBuilder();
		$builder->blueprintResolver(function ($table, $callback) {
			return new MsSqlBlueprint($table, $callback);
		});

		return $builder;
	}
}
