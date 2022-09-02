?php



//loop
//for(intialize;condition; increment)
$a=0;
for($i=1; $i<=10; $i++){
     	$a=$a + $i;
	//echo "aftab<br>";

}
echo $a;
//------------------
$data=array(10,20,30,40,50,60,70,80,90);
$count=count($data);
    for($x=0;$x<$count; $x++){
    	echo $data[$x];
    }

    function adc($y){
    	return "aftab - $y";
    }
    echo adc(25);

echo "<br><br><br>";

foreach($data as $index => $val){
	echo "$index - $val <br>";
}

//INSERT INTO employee_info (emp_name,father_name,mother_name) VALUES('susmita','nazrul islam','monoware');
//SELECT * FROM employee_info; 
// SELECT emp_name,emp_name FROM employee_info


?>
