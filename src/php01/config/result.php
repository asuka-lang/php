<?php
$name=htmlspecialchars($_POST["name"], ENT_QUOTES);
$product=htmlspecialchars($_POST["product"], ENT_QUOTES);
$articles=htmlspecialchars($_POST["articles"], ENT_QUOTES);
print "私の名前は、".$name. "<br />";
print "ご希望の商品は、".$product. "<br />";
print "ご注文数は、". "$articles". "<br />";
