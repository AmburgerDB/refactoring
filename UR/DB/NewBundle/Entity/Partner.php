<?php

namespace UR\DB\NewBundle\Entity;

/**
 * Partner
 */
class Partner extends BasePerson
{
    public function __toString (){
        return "Partner with ID: ".$this->getId();
    }
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $educations;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $honours;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $properties;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ranks;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $religions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $residences;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $roadOfLife;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $stati;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $works;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->educations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->honours = new \Doctrine\Common\Collections\ArrayCollection();
        $this->properties = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ranks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->religions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->residences = new \Doctrine\Common\Collections\ArrayCollection();
        $this->roadOfLife = new \Doctrine\Common\Collections\ArrayCollection();
        $this->stati = new \Doctrine\Common\Collections\ArrayCollection();
        $this->works = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add education
     *
     * @param \UR\DB\NewBundle\Entity\Education $education
     *
     * @return Partner
     */
    public function addEducation(\UR\DB\NewBundle\Entity\Education $education)
    {
        $this->educations[] = $education;

        return $this;
    }

    /**
     * Remove education
     *
     * @param \UR\DB\NewBundle\Entity\Education $education
     */
    public function removeEducation(\UR\DB\NewBundle\Entity\Education $education)
    {
        $this->educations->removeElement($education);
    }

    /**
     * Get educations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEducations()
    {
        return $this->educations;
    }

    /**
     * Add honour
     *
     * @param \UR\DB\NewBundle\Entity\Honour $honour
     *
     * @return Partner
     */
    public function addHonour(\UR\DB\NewBundle\Entity\Honour $honour)
    {
        $this->honours[] = $honour;

        return $this;
    }

    /**
     * Remove honour
     *
     * @param \UR\DB\NewBundle\Entity\Honour $honour
     */
    public function removeHonour(\UR\DB\NewBundle\Entity\Honour $honour)
    {
        $this->honours->removeElement($honour);
    }

    /**
     * Get honours
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHonours()
    {
        return $this->honours;
    }

    /**
     * Add property
     *
     * @param \UR\DB\NewBundle\Entity\Property $property
     *
     * @return Partner
     */
    public function addProperty(\UR\DB\NewBundle\Entity\Property $property)
    {
        $this->properties[] = $property;

        return $this;
    }

    /**
     * Remove property
     *
     * @param \UR\DB\NewBundle\Entity\Property $property
     */
    public function removeProperty(\UR\DB\NewBundle\Entity\Property $property)
    {
        $this->properties->removeElement($property);
    }

    /**
     * Get properties
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Add rank
     *
     * @param \UR\DB\NewBundle\Entity\Rank $rank
     *
     * @return Partner
     */
    public function addRank(\UR\DB\NewBundle\Entity\Rank $rank)
    {
        $this->ranks[] = $rank;

        return $this;
    }

    /**
     * Remove rank
     *
     * @param \UR\DB\NewBundle\Entity\Rank $rank
     */
    public function removeRank(\UR\DB\NewBundle\Entity\Rank $rank)
    {
        $this->ranks->removeElement($rank);
    }

    /**
     * Get ranks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRanks()
    {
        return $this->ranks;
    }

    /**
     * Add religion
     *
     * @param \UR\DB\NewBundle\Entity\Religion $religion
     *
     * @return Partner
     */
    public function addReligion(\UR\DB\NewBundle\Entity\Religion $religion)
    {
        $this->religions[] = $religion;

        return $this;
    }

    /**
     * Remove religion
     *
     * @param \UR\DB\NewBundle\Entity\Religion $religion
     */
    public function removeReligion(\UR\DB\NewBundle\Entity\Religion $religion)
    {
        $this->religions->removeElement($religion);
    }

    /**
     * Get religions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReligions()
    {
        return $this->religions;
    }

    /**
     * Add residence
     *
     * @param \UR\DB\NewBundle\Entity\Residence $residence
     *
     * @return Partner
     */
    public function addResidence(\UR\DB\NewBundle\Entity\Residence $residence)
    {
        $this->residences[] = $residence;

        return $this;
    }

    /**
     * Remove residence
     *
     * @param \UR\DB\NewBundle\Entity\Residence $residence
     */
    public function removeResidence(\UR\DB\NewBundle\Entity\Residence $residence)
    {
        $this->residences->removeElement($residence);
    }

    /**
     * Get residences
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResidences()
    {
        return $this->residences;
    }

    /**
     * Add roadOfLife
     *
     * @param \UR\DB\NewBundle\Entity\RoadOfLife $roadOfLife
     *
     * @return Partner
     */
    public function addRoadOfLife(\UR\DB\NewBundle\Entity\RoadOfLife $roadOfLife)
    {
        $this->roadOfLife[] = $roadOfLife;

        return $this;
    }

    /**
     * Remove roadOfLife
     *
     * @param \UR\DB\NewBundle\Entity\RoadOfLife $roadOfLife
     */
    public function removeRoadOfLife(\UR\DB\NewBundle\Entity\RoadOfLife $roadOfLife)
    {
        $this->roadOfLife->removeElement($roadOfLife);
    }

    /**
     * Get roadOfLife
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoadOfLife()
    {
        return $this->roadOfLife;
    }

    /**
     * Add stati
     *
     * @param \UR\DB\NewBundle\Entity\Status $stati
     *
     * @return Partner
     */
    public function addStati(\UR\DB\NewBundle\Entity\Status $stati)
    {
        $this->stati[] = $stati;

        return $this;
    }

    /**
     * Remove stati
     *
     * @param \UR\DB\NewBundle\Entity\Status $stati
     */
    public function removeStati(\UR\DB\NewBundle\Entity\Status $stati)
    {
        $this->stati->removeElement($stati);
    }

    /**
     * Get stati
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStati()
    {
        return $this->stati;
    }

    /**
     * Add work
     *
     * @param \UR\DB\NewBundle\Entity\Works $work
     *
     * @return Partner
     */
    public function addWork(\UR\DB\NewBundle\Entity\Works $work)
    {
        $this->works[] = $work;

        return $this;
    }

    /**
     * Remove work
     *
     * @param \UR\DB\NewBundle\Entity\Works $work
     */
    public function removeWork(\UR\DB\NewBundle\Entity\Works $work)
    {
        $this->works->removeElement($work);
    }

    /**
     * Get works
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWorks()
    {
        return $this->works;
    }
}
