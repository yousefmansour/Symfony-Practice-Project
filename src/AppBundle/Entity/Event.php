<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
 * @UniqueEntity(fields={"name"}, message="This name is already taken.")
 */
class Event
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
     * @Assert\Length(
     *  min=2,
     *  max=40,
     *  minMessage="Event name is too short.",
     *  maxMessage="Event name is too long."
     * )
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime")
     * @Assert\GreaterThan(
     *  value="+10 hours",
     *  message="The event should start at least 10 hours from now."
     * )
     * @Assert\LessThan(
     *  value="+2 years",
     *  message="Event time should be within two years from today."
     * )
     */
    private $time;
    
    /**
     * @ORM\ManyToMany(targetEntity="Team")
     * @ORM\JoinTable(name="event_team"),
     *  joinColumns={@ORM\JoinColumn(name="event_id", referencedColumnName="id)},
     *  inverseJoinColumns={@ORM\JoinColumn(name="team_id", referencedColumnName="id", unique=true)}
     * )
     */
    private $teams;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Sport")
     * @ORM\JoinColumn(name="sport", referencedColumnName="id")
     * @Assert\NotBlank
     * @Assert\Valid
     */
    private $sport;
    
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
     * @return Event
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
     * Set time
     *
     * @param \DateTime $time
     * @return Event
     */
    public function setTime(\DateTime $time = null)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->teams = new \Doctrine\Common\Collections\ArrayCollection();
        $this->time = new \DateTime();
    }

    /**
     * Add teams
     *
     * @param \AppBundle\Entity\Team $teams
     * @return Event
     */
    public function addTeam(\AppBundle\Entity\Team $team)
    {
        $this->teams[] = $team;

        return $this;
    }

    /**
     * Remove teams
     *
     * @param \AppBundle\Entity\Team $teams
     */
    public function removeTeam(\AppBundle\Entity\Team $team)
    {
        $this->teams->removeElement($team);
    }

    /**
     * Get teams
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTeams()
    {
        return $this->teams;
    }

    /**
     * Add sport
     *
     * @param \AppBundle\Entity\Sport $sport
     * @return Event
     */
    public function setSport(\AppBundle\Entity\Sport $sport = null)
    {
        $this->sport = $sport;

        return $this;
    }


    /**
     * Get sport
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSport()
    {
        return $this->sport;
    }
}
