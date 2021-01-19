<?php

function gen_uid($l=5){
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, $l);
}
$postid=gen_uid();
if($sign=='BR')
{$postid="BR".$postid;}
else if($sign=='CR')
{$postid="CR".$postid;}
else if($sign=='IR')
{$postid="IR".$postid;}
else if($sign=='OR')
{$postid="OR".$postid;}
else if($sign=='TR')
{$postid="TR".$postid;}
else if($sign=='SH')
{$postid="SH".$postid;}
else
$postid=$postid;	

?>
