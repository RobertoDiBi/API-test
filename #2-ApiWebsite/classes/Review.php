<?php

/**
 * Description of Review
 *
 * @author robertodibiase
 */
class Review {
    /**
     * @var id
     * @type integer
     */
    public $id;
    /**
     * @var title
     * @type string
     */
    public $title;
    /**
     * @var average
     * @type double
     */
    public $average;
    
    /**
     * @var comment
     * @type string
     */
    public $comment;
    
    /**
     * @var reviewedBy
     * @type string
     */
    public $reviewedBy;
    
    /**
     * @var createdDate
     * @type DateTime
     */
    public $createdDate;
    
    function getId(){
        return $this->id;
    }

    function getTitle(){
        return $this->title;
    }

    function getAverage(){
        return $this->average;
    }

    function getComment(){
        return $this->comment;
    }

    function getReviewedBy(){
        return $this->reviewedBy;
    }

    function getCreatedDate(){
        return $this->createdDate;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setAverage($average) {
        $this->average = $average;
    }

    function setComment($comment) {
        $this->comment = $comment;
    }

    function setReviewedBy($reviewedBy) {
        $this->reviewedBy = $reviewedBy;
    }

    function setCreatedDate( $createdDate) {
        $this->createdDate = $createdDate;
    }


    
}
