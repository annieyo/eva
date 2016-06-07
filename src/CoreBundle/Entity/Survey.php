<?php

namespace CoreBundle\Entity;

/**
 * Survey
 */
class Survey
{
    /**
     * @var int
     */
    private $id;


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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $answers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $participant;

    /**
     * @var \CoreBundle\Entity\Questionnaire
     */
    private $questionnaire;

    /**
     * @var \CoreBundle\Entity\SurveyCategory
     */
    private $surveyCategory;

    /**
     * @var \CoreBundle\Entity\User
     */
    private $createdBy;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->participant = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add answer
     *
     * @param \CoreBundle\Entity\Answer $answer
     *
     * @return Survey
     */
    public function addAnswer(\CoreBundle\Entity\Answer $answer)
    {
        $this->answers[] = $answer;

        return $this;
    }

    /**
     * Remove answer
     *
     * @param \CoreBundle\Entity\Answer $answer
     */
    public function removeAnswer(\CoreBundle\Entity\Answer $answer)
    {
        $this->answers->removeElement($answer);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Add participant
     *
     * @param \CoreBundle\Entity\TempAccess $participant
     *
     * @return Survey
     */
    public function addParticipant(\CoreBundle\Entity\TempAccess $participant)
    {
        $this->participant[] = $participant;

        return $this;
    }

    /**
     * Remove participant
     *
     * @param \CoreBundle\Entity\TempAccess $participant
     */
    public function removeParticipant(\CoreBundle\Entity\TempAccess $participant)
    {
        $this->participant->removeElement($participant);
    }

    /**
     * Get participant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Set questionnaire
     *
     * @param \CoreBundle\Entity\Questionnaire $questionnaire
     *
     * @return Survey
     */
    public function setQuestionnaire(\CoreBundle\Entity\Questionnaire $questionnaire = null)
    {
        $this->questionnaire = $questionnaire;

        return $this;
    }

    /**
     * Get questionnaire
     *
     * @return \CoreBundle\Entity\Questionnaire
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

    /**
     * Set surveyCategory
     *
     * @param \CoreBundle\Entity\SurveyCategory $surveyCategory
     *
     * @return Survey
     */
    public function setSurveyCategory(\CoreBundle\Entity\SurveyCategory $surveyCategory = null)
    {
        $this->surveyCategory = $surveyCategory;

        return $this;
    }

    /**
     * Get surveyCategory
     *
     * @return \CoreBundle\Entity\SurveyCategory
     */
    public function getSurveyCategory()
    {
        return $this->surveyCategory;
    }

    /**
     * Set createdBy
     *
     * @param \CoreBundle\Entity\User $createdBy
     *
     * @return Survey
     */
    public function setCreatedBy(\CoreBundle\Entity\User $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \CoreBundle\Entity\User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
}
