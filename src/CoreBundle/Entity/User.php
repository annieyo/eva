<?php

namespace CoreBundle\Entity;

/**
 * User
 */
class User
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
     * @var string
     */
    private $salt;

    /**
     * @var string
     */
    private $kuerzel;


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
     * @return User
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
     * @return User
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
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set kuerzel
     *
     * @param string $kuerzel
     *
     * @return User
     */
    public function setKuerzel($kuerzel)
    {
        $this->kuerzel = $kuerzel;

        return $this;
    }

    /**
     * Get kuerzel
     *
     * @return string
     */
    public function getKuerzel()
    {
        return $this->kuerzel;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $surveyCreatedBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $question;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->surveyCreatedBy = new \Doctrine\Common\Collections\ArrayCollection();
        $this->question = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add surveyCreatedBy
     *
     * @param \CoreBundle\Entity\Survey $surveyCreatedBy
     *
     * @return User
     */
    public function addSurveyCreatedBy(\CoreBundle\Entity\Survey $surveyCreatedBy)
    {
        $this->surveyCreatedBy[] = $surveyCreatedBy;

        return $this;
    }

    /**
     * Remove surveyCreatedBy
     *
     * @param \CoreBundle\Entity\Survey $surveyCreatedBy
     */
    public function removeSurveyCreatedBy(\CoreBundle\Entity\Survey $surveyCreatedBy)
    {
        $this->surveyCreatedBy->removeElement($surveyCreatedBy);
    }

    /**
     * Get surveyCreatedBy
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSurveyCreatedBy()
    {
        return $this->surveyCreatedBy;
    }

    /**
     * Add question
     *
     * @param \CoreBundle\Entity\Question $question
     *
     * @return User
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
}
