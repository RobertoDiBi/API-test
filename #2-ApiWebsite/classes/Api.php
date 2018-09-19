<?php
/**
 * Description of Api
 *
 * @author robertodibiase
 */
class Api {

    /**
     * getRatingAverage function will return the rating average of a specific item from PlanetRate along with the name of the item and ratings count.
     * 
     * For this assignment since there is just one item with id 1 the id in the api URL is hardcoded.
     * @return type array
     */
    public static function getRatingAverage() {
        $url = "http://localhost:3000/api/ratingaverage/1";
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        $results = $data['item'][0];
        return $results;
    }

    /**
     *  getReviews function will return the all the reviews of a specific item from PlanetRate.
     * 
     *  For this assignment since there is just one item with id 1 the id in the api URL is hardcoded.
     * @return type array
     */
    public static function getReviews() {
        $url = "http://localhost:3000/api/reviews/1";
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        $results = $data['item'][0];
        $reviews = $results["reviews"];
        return $reviews;
    }

}
