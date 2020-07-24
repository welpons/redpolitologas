<?php

namespace App\Entity;

use App\Repository\MemberRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MemberRepository::class)
 */
class Member
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="string")
     */
    private string $name;

    /**
     * @ORM\Column(type="string")
     */
    private string $lastName;

    /**
     * @ORM\Column(type="string")
     */
    private string $nacionality;

    /**
     * @ORM\Column(type="string")
     */
    private string $residenceCountry;

    /**
     * @ORM\Column(type="string")
     */
    private $academicDegree;

    /**
     * @ORM\Column(type="string")
     */
    private $postGraduateUniversity;

    /**
     * @ORM\Column(type="string")
     */
    private $university;

    /**
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $twitterAccount;

    public function getId(): ?int
    {
        return $this->id;
    }


}
