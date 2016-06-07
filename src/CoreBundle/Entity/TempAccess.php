<?php

namespace CoreBundle\Entity;

/**
 * TempAccess
 */
class TempAccess
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var bool
     */
    private $participated;


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
     * Set username
     *
     * @param string $username
     *
     * @return TempAccess
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return TempAccess
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set participated
     *
     * @param boolean $participated
     *
     * @return TempAccess
     */
    public function setParticipated($participated)
    {
        $this->participated = $participated;

        return $this;
    }

    /**
     * Get participated
     *
     * @return bool
     */
    public function getParticipated()
    {
        return $this->participated;
    }
    /**
     * @var \CoreBundle\Entity\Submission
     */
    private $submission;

    /**
     * @var \CoreBundle\Entity\Survey
     */
    private $survey;


    /**
     * Set submission
     *
     * @param \CoreBundle\Entity\Submission $submission
     *
     * @return TempAccess
     */
    public function setSubmission(\CoreBundle\Entity\Submission $submission = null)
    {
        $this->submission = $submission;

        return $this;
    }

    /**
     * Get submission
     *
     * @return \CoreBundle\Entity\Submission
     */
    public function getSubmission()
    {
        return $this->submission;
    }

    /**
     * Set survey
     *
     * @param \CoreBundle\Entity\Survey $survey
     *
     * @return TempAccess
     */
    public function setSurvey(\CoreBundle\Entity\Survey $survey = null)
    {
        $this->survey = $survey;

        return $this;
    }

    /**
     * Get survey
     *
     * @return \CoreBundle\Entity\Survey
     */
    public function getSurvey()
    {
        return $this->survey;
    }
}
