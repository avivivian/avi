<?php
$lang=array("PHP","HTML","MySQL");
$com=array("Entreprenuership","Comm.skills");
$frame=array("lavarel","Django","React","Angular");
$arrs=array("Languages:"=>$lang,"common units:"=>$com,"frameworks:"=>$frame);
foreach($arrs as $key=>$k)
{
    echo $key.":";
    for($m=0;$m<count($k);$m++)
    {
        echo $k[$m]."";

    }
    echo ""."<br>";
}
?>



    