<?php

namespace CoreBundle\Entity;

/**
 * SurveyCategory
 */
class SurveyCategory
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return SurveyCategory
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $survey;

    /**
     * @var \CoreBundle\Entity\Kind
     */
    private $kind;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->survey = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add survey
     *
     * @param \CoreBundle\Entity\Survey $survey
     *
     * @return SurveyCategory
     */
    public function addSurvey(\CoreBundle\Entity\Survey $survey)
    {
        $this->survey[] = $survey;

        return $this;
    }

    /**
     * Remove survey
     *
     * @param \CoreBundle\Entity\Survey $survey
     */
    public function removeSurvey(\CoreBundle\Entity\Survey $survey)
    {
        $this->survey->removeElement($survey);
    }

    /**
     * Get survey
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSurvey()
    {
        return $this->survey;
    }

    /**
     * Set kind
     *
     * @param \CoreBundle\Entity\Kind $kind
     *
     * @return SurveyCategory
     */
    public function setKind(\CoreBundle\Entity\Kind $kind = null)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Get kind
     *
     * @return \CoreBundle\Entity\Kind
     */
    public function getKind()
    {
        return $this->kind;
    }
}
