<?php

/**
 * Description of RatingAverage
 *
 * @author robertodibiase
 */
class RatingAverage {
    /**
     * @var id
     * @type integer
     */
    public $id;
    /**
     * @var name
     * @type string
     */
    public $name;
    /**
     * @var average
     * @type float
     */
    public $average;
    
    /**
     * @var ratingsCount
     * @type integer
     */
    public $ratingsCount;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getAverage() {
        return $this->average;
    }

    function getRatingsCount(){
        return $this->ratingsCount;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setAverage($average) {
        $this->average = $average;
    }

    function setRatingsCount($ratingsCount) {
        $this->ratingsCount = $ratingsCount;
    }


}
