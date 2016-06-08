<?php

namespace CoreBundle\Entity;

/**
 * Questionnaire
 */
class Questionnaire
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;


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
     * Set title
     *
     * @param string $title
     *
     * @return Questionnaire
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $features;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $question;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->features = new \Doctrine\Common\Collections\ArrayCollection();
        $this->question = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add feature
     *
     * @param \CoreBundle\Entity\Survey $feature
     *
     * @return Questionnaire
     */
    public function addFeature(\CoreBundle\Entity\Survey $feature)
    {
        $this->features[] = $feature;

        return $this;
    }

    /**
     * Remove feature
     *
     * @param \CoreBundle\Entity\Survey $feature
     */
    public function removeFeature(\CoreBundle\Entity\Survey $feature)
    {
        $this->features->removeElement($feature);
    }

    /**
     * Get features
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Add question
     *
     * @param \CoreBundle\Entity\Question $question
     *
     * @return Questionnaire
     */
    public function addQuestion(\CoreBundle\Entity\Question $question)
    {
        $this->question[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \CoreBundle\Entity\Question $question
     */
    public function removeQuestion(\CoreBundle\Entity\Question $question)
    {
        $this->question->removeElement($question);
    }

    /**
     * Get question
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestion()
    {
        return $this->question;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $questionnaire;


    /**
     * Add questionnaire
     *
     * @param \CoreBundle\Entity\Survey $questionnaire
     *
     * @return Questionnaire
     */
    public function addQuestionnaire(\CoreBundle\Entity\Survey $questionnaire)
    {
        $this->questionnaire[] = $questionnaire;

        return $this;
    }

    /**
     * Remove questionnaire
     *
     * @param \CoreBundle\Entity\Survey $questionnaire
     */
    public function removeQuestionnaire(\CoreBundle\Entity\Survey $questionnaire)
    {
        $this->questionnaire->removeElement($questionnaire);
    }

    /**
     * Get questionnaire
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $survey;


    /**
     * Add survey
     *
     * @param \CoreBundle\Entity\Survey $survey
     *
     * @return Questionnaire
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
}
