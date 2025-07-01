<?php
// Q1 変数と文字列
$name = "林奈々実";
echo "私の名前は「" . $name . "」です。";

// Q2 四則演算
$num = 5 * 4;
echo $num;
echo $num / 2;

// Q3 日付操作
echo "現在時刻は" . date("Y/m/d H:i:s");

// Q4 条件分岐-1 if文
$device = "mac";
if($device == "windows") {
    echo "使用OSは、windowsです。";
} else {
    if($device == "mac") {
        echo "使用OSは、macです。";
    } else {
        echo "どちらでもありません。";
    }
}

// Q5 条件分岐-2 三項演算子
$age = 25;
$message = ($age > 18) ? "成人です。" : "未成年です。";
echo $message;

// Q6 配列
$prefecture= ["茨城県","群馬県","栃木県","千葉県","埼玉県","東京都","神奈川県"];
echo $prefecture[2] . "と" . $prefecture[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1
$array = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市"
];
foreach($array as $value){
    echo $value ."\n";
}

// Q8 連想配列-2
foreach($array as $key => $value){
    if($key == "埼玉県"){
        echo $key . "の県庁所在地は、" . $value . "です。";
    }
}

// Q9 連想配列-3
$array["愛知県"] = "名古屋市";
$array["大阪府"] = "大阪市";

foreach($array as $key => $value){
    if($key == "愛知県" or $key == "大阪府"){
        echo $key . "は関東地方ではありません。\n";
    } else {
         echo $key . "の県庁所在地は、" . $value . "です。\n";
    }
}

// Q10 関数-1
function Hello($name) {
    echo $name . "さん、こんにちは。\n";
}
Hello("長野");
Hello("岩尾");

// Q11 関数-2
$price = 1000;

function calcTaxInPrice($taxFreePrice) {
    return $taxFreePrice * 1.1;
}
$taxInPrice = calcTaxInPrice($price);
echo $price . "円の商品の税込価格は" . $taxInPrice ."円です。";

// Q12 関数とif文
function distinguishNum($num){
    if($num % 2 == 0){
        return $num . "は偶数です。\n";
    } else {
        return $num . "は奇数です。\n";
    }
}

echo distinguishNum(11);
echo distinguishNum(22);

// Q13 関数とswitch文
function evaluateGrade($evaluate){
    switch ($evaluate) {
        case "A":
        case "B":
            // code...
            return "合格です。\n";
            break;
            
            case "C":
            // code...
            return "合格ですが追加課題があります。\n";
            break;
            
            case "D":
            // code...
            return "不合格です。\n";
            break;
        
        default:
            // code...
            return "判定不明です。講師に問い合わせてください。\n";
            break;
    }
}

echo evaluateGrade("A");
echo evaluateGrade("E");

?>