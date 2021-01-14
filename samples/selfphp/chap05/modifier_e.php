<?php
$msg = <<<EOD
サンプルは、サポートサイト「サーバサイド技術の学び舎（http://www.wings.msn.to/）」から入手できます。執筆のノウハウ集「WINGS Knowledge」（http://www31.atwiki.jp/wingsproject）もどうぞ。
EOD;
print preg_replace_callback(
  '|http(s)?://([\w-]+\.)+[\w-]+(/[\w- ./?%&=]*)?|i',
  function($matches) {
    foreach($matches as $match) {
      return mb_strtoupper($match);
    }
  }, $msg);