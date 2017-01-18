<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\EncoderAwareInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlayerRepository")
 * @ORM\Table(name="player")
 * @UniqueEntity(fields={"username"}, message="This username is already taken.")
 * @UniqueEntity(fields={"email"}, message="This email is already taken.")
 */
class Player implements UserInterface, EncoderAwareInterface, \Serializable {
    
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(name="username", type="string", length=20, unique=true)
     * @Assert\Length(
     *  min=3, 
     *  max=20, 
     *  minMessage="Username should be at least three letters.",
     *  maxMessage="Username should not be longer that 20 letters."
     * )
     * @Assert\Regex(
     *  pattern = "/^[a-zA-Z0-9_]+$/",
     *  message = "Only latin letters, numbers and underscores are allowed." 
     * )
     * 
     */
    private $username;
    
    /**
     * @Assert\Length(
     *  min=6,
     *  max=255,
     *  minMessage="Password should be at least 6 symbols",
     *  maxMessage="Password is too long"
     * )
     */
    private $plainPassword;
    
    /**
     * @ORM\Column(name="password", type="string", length=64)
     */
    private $password;
    
    /**
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     * @Assert\Email(message="Invalid email")
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="players", cascade={"remove"})
     * @ORM\JoinColumn(name="team", referencedColumnName="id")
     */
    private $team;

    public function getUsername() {
        return $this->username;
    }
    
    function getId() {
        return $this->id;
    }

    function getPlainPassword() {
        return $this->plainPassword;
    }
    
    public function getPassword() {
        return $this->password;
    }
    
    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }
    
    function setPlainPassword($plainPassword) {
        $this->plainPassword = $plainPassword;
    }

    function setEmail($email) {
        $this->email = $email;
    }
        
    public function eraseCredentials() {
        return null;
    }
    
    public function getRoles() {
        return array('ROLE_USER');
    }

    public function getSalt() {
        return null;
    }

    public function getEncoderName() {
        return null;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Player
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set team
     *
     * @param \AppBundle\Entity\Team $team
     * @return Player
     */
    public function setTeam(\AppBundle\Entity\Team $team = null)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return \AppBundle\Entity\Team 
     */
    public function getTeam()
    {
        return $this->team;
    }

    public function serialize() {
        
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
        ));
    }

    public function unserialize($serialized) {
        list (
            $this->id,
            $this->username,
            $this->password,
        ) = unserialize($serialized);
    }

}
