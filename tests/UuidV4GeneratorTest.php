<?php

namespace JopSoftware\DoctrineUuidGenerators\Test;

use Doctrine\ORM\EntityManager;
use JopSoftware\DoctrineUuidGenerators\UuidV4Generator;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Uid\UuidV4;

class UuidV4GeneratorTest extends TestCase
{
    public function testGenerateId(): void
    {
        $entityManager = $this->createMock(EntityManager::class);

        $entity = new TestEntity();

        $generator = new UuidV4Generator();
        $uuid = $generator->generateId($entityManager, $entity);

        self::assertInstanceOf(UuidV4::class, $uuid);
    }
}
