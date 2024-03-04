<?php

namespace JopSoftware\DoctrineUuidGenerators;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Symfony\Component\Uid\UuidV4;

class UuidV4Generator extends AbstractIdGenerator
{
	public function generateId(EntityManagerInterface $em, object|null $entity): UuidV4
	{
		return new UuidV4();
	}
}
