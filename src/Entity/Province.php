<?php

namespace App\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProvinceRepository")
 * @ORM\Table(name="provincia")
 */
class Province implements \JsonSerializable
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="provinciaid")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", name="provincia")
     */
    private string $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function jsonSerialize()
    {
        return [
          'id' => $this->id,
          'name' => $this->name
        ];
    }
}
