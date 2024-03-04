<?php

namespace JopSoftware\DoctrineUuidGenerators;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Symfony\Component\Uid\UuidV6;

class UuidV6Generator extends AbstractIdGenerator
{
	public function generateId(EntityManagerInterface $em, object|null $entity): UuidV6
	{
		return new UuidV6();
	}
}
