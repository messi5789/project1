<?php
 
echo"<div class=\"pg\">";
if($page1->currentpage>1){
	
$page1->prev=$page1->link_first."&cpage=".(($page1->currentpage)-1);
echo"<a href=\"".$page1->prev."\"><span>prev</span></a>";
}
$page1->html();
if($page1->currentpage<$page1->totalpage){
$page1->next=$page1->link_first."&cpage=".(($page1->currentpage)+1);
echo"<a href=\"".$page1->next."\"><span>next</span></a>"; 
}
echo"</div>"  ;
 
 
 
?>


