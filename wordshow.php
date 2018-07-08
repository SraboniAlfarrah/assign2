<?php
	$string = $_POST['name'];
	$str = $string;
//this is a test,is it?
$words = array_count_values(str_word_count($string, 1));
//(str_word_count($string, 1) ====>Return an array with the words from the string
/*
Array("this","is","a","test","is","it")
*/
//array_count_values() =====>Count all the values of an array
/*
	words['this']=1,
	words['is']=2,
	words['a']=1,
	words['test']=1,
	words['it']=1
*/

?>

<html>
<head>
	<style>
	.custom {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
	}

	.custom td, .custom th {
    border: 1px solid #ddd;
    padding: 8px;
	}

	.custom tr:nth-child(even){background-color: #f2f2f2;}

	.custom tr:hover {background-color: #ddd;}

	.custom th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
	}
	</style>
	
</head>
<body>

	<h1>Character Frequency Count </h1>
	 <table class="custom">
     <tr>
       <td>Character</td>
       <td>Count</td>
     </tr>
     <?php foreach (count_chars($str, 1) as $strr => $value){ 
	 
	 if(chr($strr)==" ")
	 {
		 continue;
	 }
	 else{
	 ?>
     <tr>
       <td><?php echo chr($strr); ?></td>
	 <td><?php echo $value; ?></td>
     </tr>
     <?php }} ?>
   </table>
   <br />
   <br />
   <h1>Word Frequency Count </h1>
	 <table class="custom">
     <tr>
       <td>Word</td>
       <td>Count</td>
     </tr>
     <?php foreach($words as $key => $value){ ?>
     <tr>
       <td><?php echo $key; ?></td>
	 <td><?php echo $value; ?></td>
     </tr>
     <?php } ?>
   </table>
  <button style="width:130px;height:50px;border-radius: 10px;margin-top: 10px;margin-left: 45%;background-color: #0080ff;"><a href="word.php" style="text-decoration: none;">Try Again</button>

</body>

</html>
