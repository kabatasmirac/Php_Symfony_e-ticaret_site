<?php

namespace App\Entity\Admin;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Admin\SettingsRepository")
 */
class Settings
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $aciklama;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $keyword;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firmname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adres;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $smtpserver;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $smtpmail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $smtppass;

    /**
     * @ORM\Column(type="integer")
     */
    private $smtpport;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $about_us;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $referans;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAciklama(): ?string
    {
        return $this->aciklama;
    }

    public function setAciklama(string $aciklama): self
    {
        $this->aciklama = $aciklama;

        return $this;
    }

    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    public function setKeyword(string $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function getFirmname(): ?string
    {
        return $this->firmname;
    }

    public function setFirmname(string $firmname): self
    {
        $this->firmname = $firmname;

        return $this;
    }

    public function getAdres(): ?string
    {
        return $this->adres;
    }

    public function setAdres(string $adres): self
    {
        $this->adres = $adres;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSmtpserver(): ?string
    {
        return $this->smtpserver;
    }

    public function setSmtpserver(string $smtpserver): self
    {
        $this->smtpserver = $smtpserver;

        return $this;
    }

    public function getSmtpmail(): ?string
    {
        return $this->smtpmail;
    }

    public function setSmtpmail(string $smtpmail): self
    {
        $this->smtpmail = $smtpmail;

        return $this;
    }

    public function getSmtppass(): ?string
    {
        return $this->smtppass;
    }

    public function setSmtppass(string $smtppass): self
    {
        $this->smtppass = $smtppass;

        return $this;
    }

    public function getSmtpport(): ?int
    {
        return $this->smtpport;
    }

    public function setSmtpport(int $smtpport): self
    {
        $this->smtpport = $smtpport;

        return $this;
    }

    public function getAboutUs(): ?string
    {
        return $this->about_us;
    }

    public function setAboutUs(string $about_us): self
    {
        $this->about_us = $about_us;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getReferans(): ?string
    {
        return $this->referans;
    }

    public function setReferans(string $referans): self
    {
        $this->referans = $referans;

        return $this;
    }
}
