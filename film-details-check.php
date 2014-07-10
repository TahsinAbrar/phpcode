<?php
$films=array(
             "genres"=>  array("comedy","tragedy","action","romance"),
             "film_titles"=>  array("Big","Star Wars","Titanic","French Kiss"),
             "stars"=> array("Bill Murray","Markhammel","Leonardo DiCaprio","Cate Blanchett"),
            );
//$c=array_combine($genres,$film_titles,$stars);
//$case=array_change_key_case($stars, CASE_LOWER);
//print_r(array_change_key_case($films, CASE_LOWER));

$acf=array_combine($films["genres"],$films["film_titles"]);
$acs=array_combine($films["genres"],$films["stars"]);
echo '<pre>';
print_r($acf);
echo '</pre>';
echo '<br/>';
echo '<pre>';
print_r($acs);
echo '</pre>';
//function filmsDetails($genres){
    
//}

?>