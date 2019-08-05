<?php
require_once('Pokemon.php');
// 属性クラス作成
class AttriBute extends Pokemon
{
  
  
  //オーバーライド
  //親クラスと同じメソッド名
  
  public function getfire($character_name, $deathblow)
  {
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo $character_name.'の'.$deathblow.'は炎属性です。';
  }

  public function getwater($character_name, $deathblow){
    
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo $character_name.'の'.$deathblow.'は水属性です。';
  }
}

$hitokageType = new AttriBute('ヒトカゲ', '火の粉');
$hitokageType->getfire('ヒトカゲ', '火の粉!');
echo '<br>';
$zenigameType = new AttriBute('ゼニガメ', '水鉄砲!');
$zenigameType->getwater('ゼニガメ', '水鉄砲!');

