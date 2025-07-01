<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo "tic-tac\n";
    }
    else if ($i % 4 === 0) {
        echo "tic\n";
    }
    else if ($i % 5 === 0) {
        echo "tac\n";
    }
    else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
//問題1
echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。\n";
//問題2
foreach ($personalInfos as $key => $value){
    $key++;
    echo $key . "番目の" . $value['name'] . "のメールアドレスは" . $value['mail'] . "で、電話番号は" . $value['tel'] . "です。\n";
}
//問題3
$ageList = [25, 30, 18];
foreach ($personalInfos as $key => $value){
    $personalInfos[$key]["age"]=$ageList[$key];
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId = 120;
    public $studentName = "山田";

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student(120, "山田");
echo "学籍番号" . $yamada->studentId . "番の生徒は" . $yamada->studentName . "です。";

// Q4 オブジェクト-2
class Student
{
    public $studentId = 120;
    public $studentName = "山田";

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lessonName)
    {
        echo $this->studentName . "は" . $lessonName . "の授業に参加しました。学籍番号：" . $this->studentId;
    }
}

$yamada = new Student(120, "山田");
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1
$date->modify('-1 month');
echo $date->format('Y-m-d') . "\n";
//問題2
$time1 = strtotime('2021-03-02');
$time2 = strtotime('1992-04-25');
echo "あの日から" . ($time1 - $time2) / (60 * 60 * 24) . "日経過しました。\n";
?>