<?php

namespace App\Entity\Admin;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Admin\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $parendId;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $urunTitle;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $renk;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $beden;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $kategori;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $keywords;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParendId(): ?int
    {
        return $this->parendId;
    }

    public function setParendId(int $parendId): self
    {
        $this->parendId = $parendId;

        return $this;
    }

    public function getUrunTitle(): ?string
    {
        return $this->urunTitle;
    }

    public function setUrunTitle(string $urunTitle): self
    {
        $this->urunTitle = $urunTitle;

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

    public function getBeden(): ?string
    {
        return $this->beden;
    }

    public function setBeden(string $beden): self
    {
        $this->beden = $beden;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getKategori(): ?string
    {
        return $this->kategori;
    }

    public function setKategori(string $kategori): self
    {
        $this->kategori = $kategori;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
