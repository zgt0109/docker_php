<?php
// $string1 = <<<GOD
// 我有一只小毛驴，我从来也不骑;
// 有一天我心血来潮，骑着去赶集;
// 我手里拿着小皮鞭，我心里正得意;
// 不知怎么哗啦啦啦啦，我摔了一身泥。
// GOD;
//
// echo $string1."\n";
echo __FILE__;
echo "<br />";
echo __LINE__;
echo "<br />";
echo PHP_VERSION;
echo "<br />";
echo PHP_OS;
echo "<br />";

date_default_timezone_set('Asia/ShangHai');
$today = date('m-d',time());//获取当天日期
$birthday = "02-14";//生日
$money = 238;//消费金额
$discount = 0.8;//八折优惠
if($today == $birthday){
   $money = $money*$discount;
}else{
    $money = $money*1;
}
echo $money;
echo "<br />";

$totalMoney = 0;//总工资
$basicMoney =  2000;//基本工资
$sex = "女";

if($sex=="男"){
$totalMoney = $basicMoney  + 0;// 男的没奖金
}else if($sex="女"){
$totalMoney = $basicMoney  + 300;// 女的有奖金300元
}
echo $totalMoney;
echo "<br />";

date_default_timezone_set('asia/shanghai');
$week = date("w");//获取当天星期几
$info = "";//提示信息
if($week ==1){
    $info = "上午有课";
}else if($week==3){
	$info = "下午有课";
}else if($week==5){
	$info = "周五";
}else{
	$info = "今天没课";
}
echo $info; //输出提示信息
echo "<br />";

//A例子
$num = 2;
$sum  = 10;
switch($num){
    case 1:
		$sum = $sum  + 10;
		break;
	case 2:
		$sum = $sum  + 10;
		break;
 	case 3:
		$sum = $sum  + 10;
		break;
	default:
		$sum = $sum  + 10;
}
 echo "A例子的值是：".$sum."<br />";
//B例子
$num = 2;
$sum  = 10;
switch($num){
	case 1:
		$sum = $sum  + 10;
	case 2:
		$sum = $sum  + 10;
	case 3:
		$sum = $sum  + 10;
	default:
		$sum = $sum  + 10;
}
 echo "B例子的值是：".$sum."<br />";


 echo "<br />";
 //for语句写法
 /*
 for(初始化;循环条件;递增项){
       //执行任务
 }
 */
 for($i=1,$sum=0;$i<=100;$i++){
     $sum = $sum + $i; //	累加求和
 }
 echo "for语句的运行结果：".$sum."<br />" ;

 //while语句写法
 $i =  1 ; // 从1开始累加
 $sum = 0; //初始化和为0
 while($i<=100){  //判断是否小于100
 	$sum = $sum + $i; //	累加求和
 	$i++; //递增1
 }
 echo "while语句的运行结果：".$sum."<br />" ;

 echo "<br />";
/*
（1）只取值，不取下标

<?php
 foreach (数组 as 值){
//执行的任务
}
?>
（2）同时取下标和值

<?php
foreach (数组 as 下标 => 值){
 //执行的任务
}
?>
*/
$students = array(
'2010'=>'令狐冲',
'2011'=>'林平之',
'2012'=>'曲洋',
'2013'=>'任盈盈',
'2014'=>'向问天',
'2015'=>'任我行',
'2016'=>'冲虚',
'2017'=>'方正',
'2018'=>'岳不群',
'2019'=>'宁中则',
);//10个学生的学号和姓名，用数组存储

//使用循环结构遍历数组,获取学号和姓名
foreach($students as $v)
{
    echo $v;//输出（打印）姓名
	echo "<br />";
}
echo "<br />";
foreach($students as $key => $value)
{
  echo $key.'->'.$value;//输出（打印）姓名
	echo "<br />";
}
echo "<br />";
// PHP中结构嵌套之循环嵌套
$students = array(
'2010'=>array('令狐冲',"59"),
'2011'=>array('林平之',"44"),
'2012'=>array('曲洋',"89"),
'2013'=>array('任盈盈',"92"),
'2014'=>array('向问天',"93"),
'2015'=>array('任我行',"87"),
'2016'=>array('冲虚',"58"),
'2017'=>array('方正',"74"),
'2018'=>array('岳不群',"91"),
'2019'=>array('宁中则',"90"),
);//10个学生的学号、姓名、分数，用数组存储

foreach($students as $key=>$val)
{ //使用循环结构遍历数组,获取学号
    echo $key; //输出学号
  echo ":";
  //循环输出姓名和分数
  foreach($val as $v)
 {
   echo $v;
  }
  echo "<br />";
}
 echo "<br />";

 $students = array(
'2010'=>array('令狐冲',"59"),
'2011'=>array('林平之',"44"),
'2012'=>array('曲洋',"89"),
'2013'=>array('任盈盈',"92"),
'2014'=>array('向问天',"93"),
'2015'=>array('任我行',"87"),
'2016'=>array('冲虚',"58"),
'2017'=>array('方正',"74"),
'2018'=>array('岳不群',"91"),
'2019'=>array('宁中则',"90"),
);//10个学生的学号、姓名、分数，用数组存储

foreach($students as $key=>$val)
{ //使用循环结构遍历数组,获取学号
     echo $key; //输出学号
	 echo ":";
	 //循环输出姓名和分数
	 foreach($val as $v)
	{
		echo $v;
	 }
	 echo "<br />";
}
echo "<br />";

$students = array(
'2010'=>'令狐冲',
'2011'=>'林平之',
'2012'=>'曲洋',
'2013'=>'任盈盈',
'2014'=>'向问天',
'2015'=>'任我行',
'2016'=>'冲虚',
'2017'=>'方正',
'2018'=>'岳不群',
'2019'=>'宁中则',
);//10个学生的学号和姓名，用数组存储
$query = '2014';
//使用循环结构遍历数组,获取学号和姓名
foreach($students as $key => $v)
{
   //使用条件结构，判断是否为该学号
 if($key == $query)
 {
   echo $v;//输出（打印）姓名
   break;//结束循环（跳出循环）
 }
}

echo "<br />";


echo "<br />";

echo "<br />";

 ?>
