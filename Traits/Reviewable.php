<?php

trait Reviewable {
    protected $review;

    public function setReview($review) {
        if($review >= 1 && $review <= 5) {
            $this->review = $review;

        } else {
            throw new Exception("Il numero deve essere un voto da 1 a 5");
            
        }
    }

    public function getReview() {
        return $this->review;
    }
}