<?php
// ＜アルゴリズムの注意点＞
// アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
// 検索して答えを探して解いても考える力には繋がりません。
// まずは検索に頼らずに自分で処理手順を考えてみましょう。


// 以下は自動販売機のお釣りを計算するプログラムです。
// 150円のお茶を購入した際のお釣りを計算して表示してください。
// 計算内容は関数に記述し、関数を呼び出して結果表示すること
// $yen と $product の金額を変更して計算が合っているか検証を行うこと

// 表示例1）
// 10000円札で購入した場合、
// 10000円札x0枚、5000円札x1枚、1000円札x4枚、500円玉x1枚、100円玉x3枚、50円玉x1枚、10円玉x0枚、5円玉x0枚、1円玉x0枚

// 表示例2）
// 100円玉で購入した場合、
// 50円足りません。

$yen = 50;   // 購入金額
$product = 150; // 商品金額

function calc($yen, $product) {
    //　定義をつける
    $change = $yen - $product;
    $money = array(10000,5000,1000,500,100,50,10,5,1);
    // この関数内に処理を記述
    //購入金額が商品金額よりも多い場合
    if ($yen >= $product) {
        if ($change >= 10000) {
            echo "10000円札×". floor ($change / 10000)."枚、";
            $change = $change - 10000*floor ($change / 10000);
        }else{
            echo "10000円札×0枚、";
        }

        if ($change >= 5000) {
            echo "5000円札×". floor ($change / 5000)."枚、";
            $change = $change - 5000*floor ($change / 5000);
        }else{
            echo "5000円札×0枚、";
        }

        if ($change >= 1000) {
            echo "1000円札×". floor ($change / 1000)."枚、";
            $change = $change - 1000*floor ($change / 1000);
        }else{
            echo "1000円札×0枚、";
        }

        if ($change >= 500) {
            echo "500円玉×". floor ($change / 500)."枚、";
            $change = $change - 500*floor ($change / 500);
        }else{
            echo "500円玉×0枚、";
        }

        if ($change >= 100) {
            echo "100円玉×". floor ($change / 100)."枚、";
            $change = $change - 100*floor ($change / 100);
        }else{
            echo "100円玉×0枚、";
        }

        if ($change >= 50) {
            echo "50円玉×". floor ($change / 50)."枚、";
            $change = $change - 50*floor ($change / 50);
        }else{
            echo "50円玉×0枚、";
        }

        if ($change >= 10) {
            echo "10円玉×". floor ($change / 10)."枚、";
            $change = $change - 10*floor ($change / 10);
        }else{
            echo "10円玉×0枚、";
        }

        if ($change >= 5) {
            echo "5円玉×". floor ($change / 5)."枚、";
            $change = $change - 5*floor ($change / 5);
        }else{
            echo "5円玉×0枚、";
        }

        if ($change >= 1) {
            echo "1円玉×". floor ($change / 1)."枚";
            $change = $change - 1*floor ($change / 1);
        }else{
            echo "1円玉×0枚";
        }
    //購入金額が商品金額よりも足りない場合
    } else {
        echo ($product - $yen) ."円足りません<br/>";
    }
}
//足りた場合のお釣りを表示する
//足りない場合の不足金額を表示する


?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>お釣り</title>
</head>
<body>
    <section>
        <!-- ここに結果表示 -->
        <?php echo calc($yen,$product); ?>
    </section>
</body>
</html>