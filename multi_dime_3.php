<?php
$marks=array(
    "mike-mundu"=>array("HTML"=>88,"PHP"=>74,"MySQL"=>80,),
    "James"=>array("HTML"=>64,"PHP"=>87,"MySQL"=>77,),
    "Zippy"=>array("HTML"=>90,"PHP"=>91,"MySQL"=>98,),
    "Timotheo"=>array("HTML"=>87,"PHP"=>84,"MySQL"=>77,),
    "IanD"=>array("HTML"=>92,"PHP"=>72,"MySQL"=>80,),
);
echo "Marks for James for HTML:";
echo $marks["James"]["HTML"]."<br>";
echo "Marks for Zippy for PHP:";
echo $marks["Zippy"]["PHP"]."<br>";
echo "Marks for IanD for MySQL:";
echo $marks["IanD"]["MySQL"]."<br>";
echo "Marks for mike-mundu in PHP:";
echo $marks["mike-mundu"]["PHP"]."<br>";
?>