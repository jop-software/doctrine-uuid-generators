<?php

namespace JopSoftware\DoctrineUuidGenerators\Test;

use Doctrine\ORM\EntityManager;
use JopSoftware\DoctrineUuidGenerators\UuidV1Generator;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Uid\UuidV1;

class UuidV1GeneratorTest extends TestCase
{
	public function testGenerateId(): void
	{
		$entityManager = $this->createMock(EntityManager::class);

		$entity = new TestEntity();

		$generator = new UuidV1Generator();
		$uuid = $generator->generateId($entityManager, $entity);

		self::assertInstanceOf(UuidV1::class, $uuid);
	}
}
