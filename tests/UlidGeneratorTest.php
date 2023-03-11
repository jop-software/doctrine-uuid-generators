<?php

namespace JopSoftware\DoctrineUuidGenerators\Test;

use Doctrine\ORM\EntityManager;
use JopSoftware\DoctrineUuidGenerators\UlidGenerator;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Uid\Ulid;

class UlidGeneratorTest extends TestCase
{
	public function testGenerateId(): void
	{
		$entityManager = $this->createMock(EntityManager::class);

		$entity = new TestEntity();

		$generator = new UlidGenerator();
		$uuid = $generator->generateId($entityManager, $entity);

		self::assertInstanceOf(Ulid::class, $uuid);
	}
}
