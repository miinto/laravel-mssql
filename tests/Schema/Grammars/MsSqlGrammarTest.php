<?php

use Miinto\Database\Schema\Grammars\MsSqlGrammar;
use Miinto\Database\Schema\MsSqlBlueprint;
use Miinto\Database\MsSqlConnection;

class DatabaseMySqlSchemaGrammarTest extends PHPUnit_Framework_TestCase
{
	public function testAddDateTime2()
	{
		$blueprint = new MsSqlBlueprint('test');
		$blueprint->dateTime2('column1');
		$statements = $blueprint->toSql($this->getConnection(), $this->getGrammar());

		$this->assertEquals(1, count($statements));
		$this->assertEquals('alter table "test" add "column1" datetime2 not null', $statements[0]);
	}

	public function testAddReal()
	{
		$blueprint = new MsSqlBlueprint('test');
		$blueprint->real('column1');
		$statements = $blueprint->toSql($this->getConnection(), $this->getGrammar());

		$this->assertEquals(1, count($statements));
		$this->assertEquals('alter table "test" add "column1" real not null', $statements[0]);
	}

	public function testAddUniqueIdentifier()
	{
		$blueprint = new MsSqlBlueprint('test');
		$blueprint->uniqueidentifier('column1');
		$statements = $blueprint->toSql($this->getConnection(), $this->getGrammar());

		$this->assertEquals(1, count($statements));
		$this->assertEquals('alter table "test" add "column1" uniqueidentifier not null', $statements[0]);
	}

	public function testMoney()
	{
		$blueprint = new MsSqlBlueprint('test');
		$blueprint->money('column1');
		$statements = $blueprint->toSql($this->getConnection(), $this->getGrammar());

		$this->assertEquals(1, count($statements));
		$this->assertEquals('alter table "test" add "column1" money not null', $statements[0]);
	}

	public function testSmallMoney()
	{
		$blueprint = new MsSqlBlueprint('test');
		$blueprint->smallMoney('column1');
		$statements = $blueprint->toSql($this->getConnection(), $this->getGrammar());

		$this->assertEquals(1, count($statements));
		$this->assertEquals('alter table "test" add "column1" smallmoney not null', $statements[0]);
	}

	private function getConnection()
	{
		return $this
			->getMockBuilder(MsSqlConnection::class)
			->disableOriginalConstructor()
			->getMock();
	}

	private function getGrammar()
	{
		return new MsSqlGrammar();
	}
}
