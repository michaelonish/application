<?php

namespace classes;
use applicant;

/**
 * Represents an applicant subscribed to mailing lists.
 */
class Applicant_SubscribedToLists extends Applicant
{
    /**
     * @var array The selected jobs for the applicant.
     */
    private $_selectionsJobs;

    /**
     * @var array The selected verticals for the applicant.
     */
    private $_selectionsVerticals;

    /**
     * Sets the selected jobs for the applicant.
     *
     * @param array $selectionsJobs The selected jobs for the applicant.
     */
    public function setSelectionsJobs($selectionsJobs)
    {
        $this->_selectionsJobs = $selectionsJobs;
    }

    /**
     * Gets the selected jobs for the applicant.
     *
     * @return array The selected jobs for the applicant.
     */
    public function getSelectionsJobs()
    {
        return $this->_selectionsJobs;
    }

    /**
     * Sets the selected verticals for the applicant.
     *
     * @param array $selectionsVerticals The selected verticals for the applicant.
     */
    public function setSelectionsVerticals($selectionsVerticals)
    {
        $this->_selectionsVerticals = $selectionsVerticals;
    }

    /**
     * Gets the selected verticals for the applicant.
     *
     * @return array The selected verticals for the applicant.
     */
    public function getSelectionsVerticals()
    {
        return $this->_selectionsVerticals;
    }
}