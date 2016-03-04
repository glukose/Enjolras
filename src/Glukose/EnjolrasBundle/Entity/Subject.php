<?php

namespace Glukose\EnjolrasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Subject
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
 
    /**
     * @var string
     *
     * @ORM\Column(name="subtitle", type="string", length=255, nullable=true)
     */
    private $subtitle;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
 
    /**
     * @var boolean
     *
     * @ORM\Column(name="termine", type="boolean", nullable=true)
     */
    private $termine;
 
    /**
     * @var boolean
     *
     * @ORM\Column(name="voteSimple", type="boolean", nullable=true)
     */
    private $voteSimple;
 
     /**
     * @var string
     *
     * @ORM\Column(name="gagnant", type="string", length=255)
     */
    private $gagnant;
 
    /**
     * @ORM\OneToMany(targetEntity="Glukose\EnjolrasBundle\Entity\Solution", mappedBy="subject", cascade={"persist"})
     */
    private $solutions;
    
    /**
     * @ORM\OneToMany(targetEntity="Glukose\EnjolrasBundle\Entity\Vote", mappedBy="subject", cascade={"persist"})
     */
    private $votes;
 



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
     * Set title
     *
     * @param string $title
     * @return Subject
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Subject
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set subtitle
     *
     * @param string $subtitle
     * @return Subject
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get subtitle
     *
     * @return string 
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set termine
     *
     * @param boolean $termine
     * @return Subject
     */
    public function setTermine($termine)
    {
        $this->termine = $termine;

        return $this;
    }

    /**
     * Get termine
     *
     * @return boolean 
     */
    public function getTermine()
    {
        return $this->termine;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->solutions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add solutions
     *
     * @param \Glukose\EnjolrasBundle\Entity\Solution $solutions
     * @return Subject
     */
    public function addSolution(\Glukose\EnjolrasBundle\Entity\Solution $solutions)
    {
        $this->solutions[] = $solutions;

        return $this;
    }

    /**
     * Remove solutions
     *
     * @param \Glukose\EnjolrasBundle\Entity\Solution $solutions
     */
    public function removeSolution(\Glukose\EnjolrasBundle\Entity\Solution $solutions)
    {
        $this->solutions->removeElement($solutions);
    }

    /**
     * Get solutions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSolutions()
    {
        return $this->solutions;
    }

    /**
     * Add votes
     *
     * @param \Glukose\EnjolrasBundle\Entity\Vote $votes
     * @return Subject
     */
    public function addVote(\Glukose\EnjolrasBundle\Entity\Vote $votes)
    {
        $this->votes[] = $votes;

        return $this;
    }

    /**
     * Remove votes
     *
     * @param \Glukose\EnjolrasBundle\Entity\Vote $votes
     */
    public function removeVote(\Glukose\EnjolrasBundle\Entity\Vote $votes)
    {
        $this->votes->removeElement($votes);
    }

    /**
     * Get votes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Subject
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set gagnant
     *
     * @param string $gagnant
     * @return Subject
     */
    public function setGagnant($gagnant)
    {
        $this->gagnant = $gagnant;

        return $this;
    }

    /**
     * Get gagnant
     *
     * @return string 
     */
    public function getGagnant()
    {
        return $this->gagnant;
    }

    /**
     * Set voteSimple
     *
     * @param boolean $voteSimple
     * @return Subject
     */
    public function setVoteSimple($voteSimple)
    {
        $this->voteSimple = $voteSimple;

        return $this;
    }

    /**
     * Get voteSimple
     *
     * @return boolean 
     */
    public function getVoteSimple()
    {
        return $this->voteSimple;
    }
}
