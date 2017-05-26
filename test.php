<?php
DEFINE('DB_HOST','localhost');
DEFINE('DB_USER','root');
DEFINE('DB_NAME','supermarket');
DEFINE('DB_PASS','');
 

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or 
						die('could not connect: '. mysqli_connect_error() );

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT * FROM category ORDER BY parent, id";
$results = mysqli_query($con,$sql) or die(mysqli_error()) ;
if($results) {
    while($result = mysqli_fetch_array($results)) {
        $string = strtolower($result['name']);
        $slug = preg_replace('/[^a-zA-Z0-9]/','-',$string);
        $slug = preg_replace('/-+/','-',$slug);
        echo $string.' : '.$slug."\n";

        //$category['categories'][$result['id']] = $result; 
        //$category['parent_cats'][$result['parent_id']][] = $result['id']; 
    }
}

?>