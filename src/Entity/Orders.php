<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 */
class Orders
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $totalPrice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $creationDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $products;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotalPrice(): ?string
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(?string $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }

    public function setCreationDate(?string $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getProducts(): ?string
    {
        return $this->products;
    }

    public function setProducts(?string $products): self
    {
        $this->products = $products;

        return $this;
    }
}
