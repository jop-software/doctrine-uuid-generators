<div align="center">
	<h1>Doctrine UUID generators</h1>
	<i>Generate UUIDs for your doctrine entities</i>
</div>

[![CI](https://github.com/jop-software/doctrine-uuid-generators/actions/workflows/ci.yaml/badge.svg)](https://github.com/jop-software/doctrine-uuid-generators/actions/workflows/ci.yaml)
[![CI](https://img.shields.io/badge/License-MIT-green)](LICENSE)

## Installation

```shell
composer require jop-software/doctrine-uuid-generators
```

## Usage

You can use all the generators in the `CustomIdGenerator` annotation. 

```php
<?php

namespace App\Entity;

use App\Repository\EntityNameRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use JopSoftware\DoctrineUuidGenerators\UuidV4Generator;
use Symfony\Component\Uid\UuidV4;

#[ORM\Entity(repositoryClass: EntityNameRepository::class)]
class EntityName
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\Column(type: "uuid", unique: true)]
    #[ORM\CustomIdGenerator(class: UuidV4Generator::class)]
    private UuidV4|null $id = null;
    
    public function getId(): UuidV4|null
    {
        return $this->id;
    }
}
```

## Available generators

- [UuidV1Generator](src/UuidV1Generator.php)
- [UuidV4Generator](src/UuidV4Generator.php)
- [UuidV6Generator](src/UuidV6Generator.php)
- [UlidGenerator](src/UlidGenerator.php)

> Versions 3 and 5 are not implemented currently, because they are namespace based and there is no way currently to 
> pass such a namespace to the generator in the `CustomIdGenerator` annotation. 

## Versions

| Version | State | `php` Version |
| --- | --- | --- |
| `2.x` | ![Supported](https://img.shields.io/badge/active_support-green?style=for-the-badge) | `^8.1` |
| `1.x` | ![Security Support](https://img.shields.io/badge/security_and_enterprise-orange?style=for-the-badge) | `^8.0` |


## Professional support

Professional support is available. Please contact [support@jop-software.de](mailto:support@jop-software.de) for more information.

## License

This project is licensed under the [MIT LICENSE](LICENSE)

<div align="center">
	<span>&copy; 2022-2024, jop-software Inh. Johannes Przymusinski</span>
</div>

