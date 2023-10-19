<?php

class UniversityCollection
{
    private $universities = [];

    public function addUniversity(University $university)
    {
        $this->universities[] = $university;
    }

    public function getUniversities()
    {
        return $this->universities;
    }
}
