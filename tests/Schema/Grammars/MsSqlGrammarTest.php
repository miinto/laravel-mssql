<?php

use Illuminate\Database\Connection;
use Miinto\Database\MsSqlConnection;
use Miinto\Database\Schema\Grammars\MsSqlGrammar;
use Miinto\Database\Schema\MsSqlBlueprint;

/**
 * Class DatabaseMySqlSchemaGrammarTest
 */
class DatabaseMySqlSchemaGrammarTest extends PHPUnit_Framework_TestCase
{
	public function testAddBit()
	{
		$blueprint = new MsSqlBlueprint('test');
		$blueprint->bit('column1');
		$statements = $blueprint->toSql($this->getConnection(), $this->getGrammar());

		$this->assertEquals(1, count($statements));
		$this->assertEquals('alter table "test" add "column1" bit not null', $statements[0]);
	}


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


	public function testXml()
	{
		$blueprint = new MsSqlBlueprint('test');
		$blueprint->xml('column1');
		$statements = $blueprint->toSql($this->getConnection(), $this->getGrammar());

		$this->assertEquals(1, count($statements));
		$this->assertEquals('alter table "test" add "column1" xml not null', $statements[0]);
	}


	/**
	 * @author Michał Durys <md@miinto.com>
	 * @return PHPUnit_Framework_MockObject_MockObject|Connection
	 */
	private function getConnection()
	{
		return $this->getMockBuilder(MsSqlConnection::class)->disableOriginalConstructor()->getMock();
	}


	/**
	 * @author Michał Durys <md@miinto.com>
	 * @return MsSqlGrammar
	 */
	private function getGrammar()
	{
		return new MsSqlGrammar();
	}
}
