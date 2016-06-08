<?php

namespace CoreBundle\Entity;

/**
 * Question
 */
class Question
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var boolean
     */
    private $public;


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
     * Set text
     *
     * @param string $text
     *
     * @return Question
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return boolean
     */
    public function isPublic()
    {
        return $this->public;
    }

    /**
     * @param boolean $public
     */
    public function setPublic($public)
    {
        $this->public = $public;
    }


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $answers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $submission;

    /**
     * @var \CoreBundle\Entity\QuestionsCategory
     */
    private $category;

    /**
     * @var \CoreBundle\Entity\Questiontype
     */
    private $questiontype;

    /**
     * @var \CoreBundle\Entity\User
     */
    private $createdby;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $questionnaire;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->submission = new \Doctrine\Common\Collections\ArrayCollection();
        $this->questionnaire = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get public
     *
     * @return string
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Add answer
     *
     * @param \CoreBundle\Entity\Answer $answer
     *
     * @return Question
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
     * Add submission
     *
     * @param \CoreBundle\Entity\Submission $submission
     *
     * @return Question
     */
    public function addSubmission(\CoreBundle\Entity\Submission $submission)
    {
        $this->submission[] = $submission;

        return $this;
    }

    /**
     * Remove submission
     *
     * @param \CoreBundle\Entity\Submission $submission
     */
    public function removeSubmission(\CoreBundle\Entity\Submission $submission)
    {
        $this->submission->removeElement($submission);
    }

    /**
     * Get submission
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubmission()
    {
        return $this->submission;
    }

    /**
     * Set category
     *
     * @param \CoreBundle\Entity\QuestionsCategory $category
     *
     * @return Question
     */
    public function setCategory(\CoreBundle\Entity\QuestionsCategory $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \CoreBundle\Entity\QuestionsCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set questiontype
     *
     * @param \CoreBundle\Entity\Questiontype $questiontype
     *
     * @return Question
     */
    public function setQuestiontype(\CoreBundle\Entity\Questiontype $questiontype = null)
    {
        $this->questiontype = $questiontype;

        return $this;
    }

    /**
     * Get questiontype
     *
     * @return \CoreBundle\Entity\Questiontype
     */
    public function getQuestiontype()
    {
        return $this->questiontype;
    }

    /**
     * Set createdby
     *
     * @param \CoreBundle\Entity\User $createdby
     *
     * @return Question
     */
    public function setCreatedby(\CoreBundle\Entity\User $createdby = null)
    {
        $this->createdby = $createdby;

        return $this;
    }

    /**
     * Get createdby
     *
     * @return \CoreBundle\Entity\User
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }

    /**
     * Add questionnaire
     *
     * @param \CoreBundle\Entity\Questionnaire $questionnaire
     *
     * @return Question
     */
    public function addQuestionnaire(\CoreBundle\Entity\Questionnaire $questionnaire)
    {
        $this->questionnaire[] = $questionnaire;

        return $this;
    }

    /**
     * Remove questionnaire
     *
     * @param \CoreBundle\Entity\Questionnaire $questionnaire
     */
    public function removeQuestionnaire(\CoreBundle\Entity\Questionnaire $questionnaire)
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
     * @var string
     */
    private $user;


    /**
     * Set user
     *
     * @param string $user
     *
     * @return Question
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }
}
