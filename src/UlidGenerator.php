<?php

namespace JopSoftware\DoctrineUuidGenerators;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Symfony\Component\Uid\Ulid;

class UlidGenerator extends AbstractIdGenerator
{
	public function generateId(EntityManagerInterface $em, object|null $entity): Ulid
	{
		return new Ulid();
	}
}
