<?php 
function check($val1,$val2){
		if ($val1 == $val2)
		{
			return '0';
		}
		if($val1=="rock" )
		{
			if($val2=="paper")
			{
				return $val2;
			}
			if($val2=="scissor")
			{
				return $val1;
			}
		}
		if($val1=="paper" )
		{
			if($val2 == "rock")
			{
				return $val1;
			}
			if($val2 == "scissor")
			{
				return $val2;
			}
			
		}
		if($val1="scissor" )
		{
			if($val2=="paper")
			{
				return $val1;
			}
			if($val2=="rock")
			{
				return $val2;
			}
		}
		
}
$count =1;
$count_val = array(array(0,0,0,0),array(0,0,0,0),array(0,0,0,0),array(0,0,0,0));
while($count <=50){
	echo "<h2 align='center'> Round";
	echo $count;
	echo "</h2><br>";
	$aaray_list=array("rock","scissor","paper");
	$rand_player1=rand(0,2);
	$rand_player2=rand(0,2);
	$rand_player3=rand(0,2);
	$rand_player4=rand(0,2);
	
	$player1 = $aaray_list[$rand_player1];
	$player2 = $aaray_list[$rand_player2];
	$player3 = $aaray_list[$rand_player3];
	$player4 = $aaray_list[$rand_player4];
	
	$player = array($player1,$player2,$player3,$player4);
	
	
	echo "<table border='.50px' border-collapse='collapse' align='center' width='500px' >
			<tr><th>player1</th><th>player2</th><th>player3</th><th>player4</th></tr>
			<tr><td style='text-align:center'>$player1</td>
				<td style='text-align:center'>$player2</td>
				<td style='text-align:center'>$player3</td>
				<td style='text-align:center'>$player4</td></tr></table>";
			
	$i=0;
	while($i<=3)
	{
		$j=0;
		while($j<=3)
		{
			if($i==$j)
			{
				$count_val[$i][$j] = '-';
			}
			else
			{
				$result=check($player[$i],$player[$j]);
				if ($result!='0' && $result != '')
				{
					
					if($player[$i] == $result)
					{
						$count_val[$i][$j] = $count_val[$i][$j]+1;
					}
				
				}
			}
				
			$j=$j+1; 
		}
	$i=$i+1;
	}
	echo "<br/><br/><table border='.50px' border-collapse='collapse' align='center' width='500px'>
			<tr> <th>totals</th><th><th colspan=4>Against</th><tr>
			<tr> <td></td><td></td><td style='text-align:center'>player1</td>
				<td style='text-align:center'>player2</td>
				<td style='text-align:center'>player3</td>
				<td style='text-align:center'>player4</td><tr>
			<tr><th rowspan=4>player wins</th>
				<td style='text-align:center'>player1</td>
				<td style='text-align:center'>".$count_val[0][0]."</td>
				<td style='text-align:center'>".$count_val[0][1]."</td>
				<td style='text-align:center'>".$count_val[0][2]."</td>
				<td style='text-align:center'>".$count_val[0][3]."</td>
			</tr>
			<tr> 								
				<td style='text-align:center'>player2</td>
				<td style='text-align:center'>".$count_val[1][0]."</td>
				<td style='text-align:center'>".$count_val[1][1]."</td>
				<td style='text-align:center'>".$count_val[1][2]."</td>
				<td style='text-align:center'>".$count_val[1][3]."</td>
			</tr>
			<tr> 								
				<td style='text-align:center'>player3</td>
				<td style='text-align:center'>".$count_val[2][0]."</td>
				<td style='text-align:center'>".$count_val[2][1]."</td>
				<td style='text-align:center'>".$count_val[2][2]."</td>
				<td style='text-align:center'>".$count_val[2][3]."</td>
			</tr>
			<tr>								
				<td style='text-align:center'>player4</td>
				<td style='text-align:center'>".$count_val[3][0]."</td>
				<td style='text-align:center'>".$count_val[3][1]."</td>
				<td style='text-align:center'>".$count_val[3][2]."</td>
				<td style='text-align:center'>".$count_val[3][3]."</td>
			</tr>
			</table>
			
			<br/><br/><hr/><br/>";
			
			
	$count=$count+1;
}

?>
