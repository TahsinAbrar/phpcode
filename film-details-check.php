<?php
    $films=array(
                 "genres"=>  array("comedy","tragedy","action","romance"),
                 "film_titles"=>  array("Big","Star Wars","Titanic","French Kiss"),
                 "stars"=> array("Bill Murray","Mark Hammel","Leonardo DiCaprio","Cate Blanchett"),
                );
    $check = array_map('strtolower', $films["stars"]);
    $array_combine_film_titles = array_combine($films["genres"],$films["film_titles"]);
    $array_combine_stars = array_combine($films["genres"],$check);
//    echo '<pre>';
//    print_r($array_combine_film_titles);
//    echo '</pre>';
//    echo '<br/>';
//    echo '<pre>';
//    print_r($array_combine_stars);
//    echo '</pre>';
    function filmTitlebyGenre($genres){
        global $array_combine_film_titles;
        echo 'Film Title: '.$array_combine_film_titles[$genres]."<br/>";
    }
    function filmStarsbyGenre($genres){
        global $array_combine_stars;
            $str = $array_combine_stars[$genres];
            $result = str_replace(" ", "-", $str);
            echo 'slug: '.$result;
    }
    filmTitlebyGenre("comedy");
    filmStarsbyGenre("comedy");
?>