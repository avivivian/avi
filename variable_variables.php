<?php
$x="php";
$$x=200;
echo "$x <br>";
echo "${$x} <br>";
echo "$php";
?>
<?php
$name="cat";
${$name}="dog";
${${$name}}="monkey";
echo $name."<br>";
echo ${$name}."<br>";
echo ${cat}."<br>";
echo ${${$name}}."<br>";
echo ${dog}
?>
