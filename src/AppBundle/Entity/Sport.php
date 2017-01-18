<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Sport
 *
 * @ORM\Table(name="sport")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SportRepository")
 * @UniqueEntity(fields={"name"}, message="This sport already exists.")
 */
class Sport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="teamSize", type="integer")
     * @Assert\Range(
     *  min = 1,
     *  max = 20,
     *  minMessage = "Team size must be larger than 1.",
     *  maxMessage = "Team size must be 20 or less."
     * )
     */
    private $teamSize;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Sport
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set teamSize
     *
     * @param integer $teamSize
     * @return Sport
     */
    public function setTeamSize($teamSize)
    {
        $this->teamSize = $teamSize;

        return $this;
    }

    /**
     * Get teamSize
     *
     * @return integer 
     */
    public function getTeamSize()
    {
        return $this->teamSize;
    }
}
