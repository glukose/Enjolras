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
     * @ORM\Column(name="subtitle", type="string", length=255)
     */
    private $subtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
 
    /**
     * @var boolean
     *
     * @ORM\Column(name="termine", type="boolean")
     */
    private $termine;
 
    /**
     * @ORM\OneToMany(targetEntity="Glukose\EnjolrasBundle\Entity\Solution", mappedBy="subject", cascade={"persist"})
     */
    private $solutions;


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
}