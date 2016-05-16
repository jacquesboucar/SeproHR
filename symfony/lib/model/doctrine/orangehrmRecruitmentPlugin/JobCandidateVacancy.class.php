<?php

/**
 * JobCandidateVacancy
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class JobCandidateVacancy extends PluginJobCandidateVacancy {

    public function getVacancyName() {
        return $this->getJobVacancy()->getName();
    }

    public function getCandidateName() {
        $name = $this->getJobCandidate()->getFullName();
        return $name;
    }

    public function getHiringManager() {
        return $this->getJobVacancy()->getEmployee()->getFirstAndLastNames();
    }

    public function getDateOfApplication() {
        return $this->getJobCandidate()->getDateOfApplication();
    }
}
