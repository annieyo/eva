<?php

namespace CoreBundle\Entity;

/**
 * Submission
 */
class Submission
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
     * @var \CoreBundle\Entity\TempAccess
     */
    private $tempaccess;

    /**
     * @var \CoreBundle\Entity\Question
     */
    private $question;

    /**
     * @var \CoreBundle\Entity\Answer
     */
    private $answer;


    /**
     * Set tempaccess
     *
     * @param \CoreBundle\Entity\TempAccess $tempaccess
     *
     * @return Submission
     */
    public function setTempaccess(\CoreBundle\Entity\TempAccess $tempaccess = null)
    {
        $this->tempaccess = $tempaccess;

        return $this;
    }

    /**
     * Get tempaccess
     *
     * @return \CoreBundle\Entity\TempAccess
     */
    public function getTempaccess()
    {
        return $this->tempaccess;
    }

    /**
     * Set question
     *
     * @param \CoreBundle\Entity\Question $question
     *
     * @return Submission
     */
    public function setQuestion(\CoreBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \CoreBundle\Entity\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set answer
     *
     * @param \CoreBundle\Entity\Answer $answer
     *
     * @return Submission
     */
    public function setAnswer(\CoreBundle\Entity\Answer $answer = null)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return \CoreBundle\Entity\Answer
     */
    public function getAnswer()
    {
        return $this->answer;
    }
}
