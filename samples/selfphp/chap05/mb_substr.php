<?php
mb_internal_encoding('UTF-8');
$str = 'WINGSプロジェクト';
print mb_substr($str, 5, 2);
print '<br />';
print mb_substr($str, 5);
print '<br />';
print mb_substr($str, 5, -4);
print '<br />';
print mb_substr($str, -6, 2);
