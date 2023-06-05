<?php

namespace classes;

class ApplicantSubscribedToLists extends Applicant
{
    private $subscribedToLists;

    public function __construct($name, $email, $subscribedToLists)
    {
        parent::__construct($name, $email);
        $this->subscribedToLists = $subscribedToLists;
    }

    public function getSubscribedToLists()
    {
        return $this->subscribedToLists;
    }
}
