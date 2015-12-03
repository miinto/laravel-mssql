<?php

use Miinto\Database\MsSqlConnection;
use Miinto\Database\Schema\Grammars\MsSqlGrammar;

/**
 * Class MsSqlConnectionTest
 */
class MsSqlConnectionTest extends PHPUnit_Framework_TestCase
{
	public function testSchemaGrammar()
	{
		$conn = $this->getConnection();
		$conn->useDefaultSchemaGrammar();

		$this->assertInstanceOf(MsSqlGrammar::class, $conn->getSchemaGrammar());
	}


	public function testSchemaBuilder()
	{
		$conn = $this->getConnection();

		$this->assertInstanceOf(Illuminate\Database\Schema\Builder::class, $conn->getSchemaBuilder());
	}


	/**
	 * @author Michał Durys <md@miinto.com>
	 * @return MsSqlConnection
	 */
	private function getConnection()
	{
		$conn = new MsSqlConnection($this->getPdo());
		$conn->enableQueryLog();

		return $conn;
	}


	/**
	 * @author Michał Durys <md@miinto.com>
	 * @return PHPUnit_Framework_MockObject_MockObject|PDO
	 */
	private function getPdo()
	{
		return $this->getMockBuilder(PDO::class)->disableOriginalConstructor()->getMock();
	}
}
