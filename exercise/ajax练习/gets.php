<?php 
// header("Content-Type:text/plain;charset=utf-8");
header("Content-Type:application/json;charset=utf-8");
$staff = array(
	array('name'=>'小七','number'=>'101','sex'=>'male'),
		array('name'=>'小白','number'=>'102','sex'=>'male'),
		array('name'=>'小黄','number'=>'103','sex'=>'female')
	);

if($_SERVER['REQUEST_METHOD'] == 'GET'){
	search();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	create();
}

function search() {
	if(!isset($_GET['number']) || empty($_GET['number'])){
	echo '{"succcess":false,"msg":"参数错误"}'; //使用json数据结构传送结果
	return;
	}
	global $staff;
	$number = $_GET['number'];
	$result = '{"success":false,"msg":"没有找到员工"}';
	foreach($staff as $value){
		if($value['number'] === $number){
			$result ='{"success":true,"msg":"员工编号：'. $value["number"].' 员工姓名: '.$value["name"].'"}';
			break;
		}
	}	
	echo $result;
}

function create(){
	if( !isset($_POST['number']) || empty($_POST['number']) || !isset($_POST['name']) && empty($_POST['name'])
		|| !isset($_POST['sex']) || empty($_POST['sex']) ){
		echo '{"succcess":false,"msg":"参数错误"}';
		return;
	}
	else {
		// $newStaff = array("name"=>$_POST['name'],"number"=>$_POST['number'],'sex'=>$_POST['sex']);
		$name = $_POST['name'];
		$number = $_POST['number'];
		$sex = $_POST['sex'];
		array_push($staff,array("name"=>$name,"number"=>$number,'sex'=>$sex));
		echo '{"success":true,"msg":"员工：'.$_POST['name'].' 保存成功"}';
	}

}

?>

