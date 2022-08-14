<?php

namespace JopSoftware\DoctrineUuidGenerators;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Symfony\Component\Uid\UuidV1;

class UuidV1Generator extends AbstractIdGenerator
{
	public function generateId(EntityManagerInterface $em, $entity): UuidV1
	{
		return new UuidV1();
	}
}
