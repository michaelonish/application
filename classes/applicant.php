<?php
namespace classes;
class Applicant
{
    /**
     * @var string The first name of the applicant.
     */
    private $_fname;

    /**
     * @var string The last name of the applicant.
     */
    private $_lname;

    /**
     * @var string The email of the applicant.
     */
    private $_email;

    /**
     * @var string The state of the applicant.
     */
    private $_state;

    /**
     * @var string The phone number of the applicant.
     */
    private $_phone;

    /**
     * @var string The GitHub username of the applicant.
     */
    private $_github;

    /**
     * @var string The experience of the applicant.
     */
    private $_experience;

    /**
     * @var string The relocation preference of the applicant.
     */
    private $_relocate;

    /**
     * @var string The bio of the applicant.
     */
    private $_bio;

    /**
     * Constructs a new Applicant instance.
     *
     * @param string $fname The first name of the applicant.
     * @param string $lname The last name of the applicant.
     * @param string $email The email of the applicant.
     * @param string $state The state of the applicant.
     * @param string $phone The phone number of the applicant.
     */
    public function __construct($fname, $lname, $email, $state, $phone)
    {
        $this->_fname = $fname;
        $this->_lname = $lname;
        $this->_email = $email;
        $this->_state = $state;
        $this->_phone = $phone;
    }

    /**
     * Sets the first name of the applicant.
     *
     * @param string $fname The first name of the applicant.
     */
    public function setFname($fname)
    {
        $this->_fname = $fname;
    }

    /**
     * Gets the first name of the applicant.
     *
     * @return string The first name of the applicant.
     */
    public function getFname()
    {
        return $this->_fname;
    }

    /**
     * Sets the last name of the applicant.
     *
     * @param string $lname The last name of the applicant.
     */
    public function setLname($lname)
    {
        $this->_lname = $lname;
    }

    /**
     * Gets the last name of the applicant.
     *
     * @return string The last name of the applicant.
     */
    public function getLname()
    {
        return $this->_lname;
    }

    /**
     * Sets the email of the applicant.
     *
     * @param string $email The email of the applicant.
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * Gets the email of the applicant.
     *
     * @return string The email of the applicant.
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * Sets the state of the applicant.
     *
     * @param string $state The state of the applicant.
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * Gets the state of the applicant.
     *
     * @return string The state of the applicant.
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * Sets the phone number of the applicant.
     *
     * @param string $phone The phone number of the applicant.
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * Gets the phone number of the applicant.
     *
     * @return string The phone number of the applicant.
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * Sets the GitHub username of the applicant.
     *
     * @param string $github The GitHub username of the applicant.
     */
    public function setGithub($github)
    {
        $this->_github = $github;
    }

    /**
     * Gets the GitHub username of the applicant.
     *
     * @return string The GitHub username of the applicant.
     */
    public function getGithub()
    {
        return $this->_github;
    }

    /**
     * Sets the experience of the applicant.
     *
     * @param string $experience The experience of the applicant.
     */
    public function setExperience($experience)
    {
        $this->_experience = $experience;
    }

    /**
     * Gets the experience of the applicant.
     *
     * @return string The experience of the applicant.
     */
    public function getExperience()
    {
        return $this->_experience;
    }

    /**
     * Sets the relocation preference of the applicant.
     *
     * @param string $relocate The relocation preference of the applicant.
     */
    public function setRelocate($relocate)
    {
        $this->_relocate = $relocate;
    }

    /**
     * Gets the relocation preference of the applicant.
     *
     * @return string The relocation preference of the applicant.
     */
    public function getRelocate()
    {
        return $this->_relocate;
    }

    /**
     * Sets the bio of the applicant.
     *
     * @param string $bio The bio of the applicant.
     */
    public function setBio($bio)
    {
        $this->_bio = $bio;
    }

    /**
     * Gets the bio of the applicant.
     *
     * @return string The bio of the applicant.
     */
    public function getBio()
    {
        return $this->_bio;
    }
}