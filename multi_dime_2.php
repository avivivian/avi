<?php
$k=array(
    array(1,"David","male","system analyst",80000),
    array(2,"konde boy","male","software developer",25000),
    array(3,"vivian","female","database administater",70000),
    array(4,"zaddock","male","data mining",100000),
    array(5,"timotheo","male","front-end develope",90000),
);
echo "SN: name: gender: role: salary"<br>;
for($row=0;$row<5;$row++)
{
    for($col=0;$col<5;$col++)
    {
        echo $k[$row][$col]."";
    }
    echo"<br>";
}
?>