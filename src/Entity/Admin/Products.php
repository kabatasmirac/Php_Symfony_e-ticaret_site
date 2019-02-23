<?php

namespace App\Entity\Admin;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Admin\ProductsRepository")
 */
class Products
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $isim;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $fiyat;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $beden;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $ozellik;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $renk;

    /**
     * @ORM\Column(type="integer")
     */
    private $adet;

    /**
     * @ORM\Column(type="integer")
    */
    private $category_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsim(): ?string
    {
        return $this->isim;
    }


    public function setIsim(string $isim): self
    {
        $this->isim = $isim;

        return $this;
    }
    public function getImage(): ?string
    {
        return $this->image;
    }


    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getFiyat(): ?string
    {
        return $this->fiyat;
    }

    public function setFiyat(string $fiyat): self
    {
        $this->fiyat = $fiyat;

        return $this;
    }

    public function getBeden(): ?string
    {
        return $this->beden;
    }

    public function setBeden(string $beden): self
    {
        $this->beden = $beden;

        return $this;
    }

    public function getOzellik(): ?string
    {
        return $this->ozellik;
    }

    public function setOzellik(string $ozellik): self
    {
        $this->ozellik = $ozellik;

        return $this;
    }

    public function getRenk(): ?string
    {
        return $this->renk;
    }

    public function setRenk(string $renk): self
    {
        $this->renk = $renk;

        return $this;
    }

    public function getAdet(): ?int
    {
        return $this->adet;
    }

    public function setAdet(int $adet): self
    {
        $this->adet = $adet;

        return $this;
    }
    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    public function setCategoryId(int $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }
}
