<?php

namespace JopSoftware\DoctrineUuidGenerators\Test;

use Doctrine\ORM\EntityManager;
use JopSoftware\DoctrineUuidGenerators\UuidV6Generator;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Uid\UuidV6;

class UuidV6GeneratorTest extends TestCase
{
	public function testGenerateId(): void
	{
		$entityManager = $this->createMock(EntityManager::class);

		$entity = new TestEntity();

		$generator = new UuidV6Generator();
		$uuid = $generator->generateId($entityManager, $entity);

		self::assertInstanceOf(UuidV6::class, $uuid);
	}
}
