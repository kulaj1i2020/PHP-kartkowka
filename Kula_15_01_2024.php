<?php

function sortowanie($tab1,$tab2)
{


if(count($tab1)==count($tab2))
    {
        return "Tablice są równe";
    }
if(count($tab1)>count($tab2)) 
{
   
    for($i=0;$i<count($tab1);$i++)
    {
        $tab3[$i]=$tab1[$i];
    }

    for($i=0;$i<count($tab2);$i++)
    {
        $tab3[count($tab1)+$i]=$tab2[$i];
    }
   
    for($i=0;$i<count($tab3);$i++)
    {
        echo "a";
        // if($tab3[$i]>$tab3[$i+1])
        //     {
                
        //         $s=$tab3[$i];
        //         $tab3[$i]=$tab3[$i+1];
        //         $tab3[$i+1]=$s;
              
        //     }
    }
}
if(count($tab1)<count($tab2)) 
{
   
    for($i=0;$i<count($tab1);$i++)
    {
        $tab3[$i]=$tab1[$i];
    }

    for($i=0;$i<count($tab2);$i++)
    {
        $tab3[count($tab1)+$i]=$tab2[$i];
    }
   
    for($i=0;$i<=count($tab3);$i++)
    {
    //     for($j=0;$j<=count($tab3)-1;$j++)
    //     {
    //     echo "a";
    //     if($tab3[$i]>$tab3[$i+1])
    //         {
                
    //             $s=$tab3[$i];
    //             $tab3[$i]=$tab3[$i+1];
    //             $tab3[$i+1]=$s;
            
    //         }
    // }

    //W Zahashowanej czesci probowalem zrobic sortowanie
}
}
return json_encode($tab3);




}

print sortowanie([6,3,2,4],[2,4,6,2,5]);

?>