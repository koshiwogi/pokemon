<?php
// 親クラスを作成する
class Pokemon{
    public $character_name; 
    public $deathblow;
    
// コンストラクタ
    public function __construct($character_name, $deathblow)
    {
        $this->character_name = $character_name;
        $this->deathblow= $deathblow;
        
    }
    // キャラ名を取得
    public function getName()
    {
        return $this->character_name;
    }    
    // 技名を取得
    public function getDeathblow()
    {
        return $this->deathblow;
    }
}
$hitokage = new Pokemon('ヒトカゲ', '火の粉');
$zenigame = new Pokemon('ゼニガメ', '水鉄砲');

$hitokageName = $hitokage->getName();
$hitokageDeathblow= $hitokage->getDeathblow();

$zenigameName = $zenigame->getName();
$zenigameDeathblow= $zenigame->getDeathblow();


echo $hitokageName.'の必殺技は'.$hitokageDeathblow.'です';
echo '<br>';
echo '<br>';
echo '<br>';
echo $zenigameName.'の必殺技は'.$zenigameDeathblow.'です';

?>