<?php
 
echo"<div class=\"pg\">";
if($page->currentpage>1){
	
$page->prev="index.php?page=".($page->currentpage-1);
echo"<a href=\"$page->prev\"><span>prev</span></a>"; 
}
$page->html();
if($page->currentpage<$page->totalpage){
$page->next="index.php?page=".($page->currentpage+1);
echo"<a href=\"$page->next\"><span>next</span></a>"; 
}
echo"</div>"  ;
 
 
 
?>


