<?php


namespace LeVoyageur\ClientBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string",length=255)
     */
    public $Nom;

    /**
     * @ORM\Column(type="string",length=255)
     */
    public $Prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date",type="date")
     */
    public $datenaissance;

    /**
     * @ORM\Column(type="integer")
     */
    public $num_tel;

    /**
     * @ORM\Column(type="integer")
     */
    public $num_tel_secour;

    /**
     * @ORM\Column(type="string",length=255)
     */
    public $type_rand;

    /**
     * @ORM\Column(type="string",length=255)
     */
    public $url = "amateur";


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->Nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->Prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     *
     * @return User
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set numTel
     *
     * @param integer $numTel
     *
     * @return User
     */
    public function setNumTel($numTel)
    {
        $this->num_tel = $numTel;

        return $this;
    }

    /**
     * Get numTel
     *
     * @return integer
     */
    public function getNumTel()
    {
        return $this->num_tel;
    }

    /**
     * Set numTelSecour
     *
     * @param integer $numTelSecour
     *
     * @return User
     */
    public function setNumTelSecour($numTelSecour)
    {
        $this->num_tel_secour = $numTelSecour;

        return $this;
    }

    /**
     * Get numTelSecour
     *
     * @return integer
     */
    public function getNumTelSecour()
    {
        return $this->num_tel_secour;
    }

    /**
     * Set typeRand
     *
     * @param string $typeRand
     *
     * @return User
     */
    public function setTypeRand($typeRand)
    {
        $this->type_rand = $typeRand;

        return $this;
    }

    /**
     * Get typeRand
     *
     * @return string
     */
    public function getTypeRand()
    {
        return $this->type_rand;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return User
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
