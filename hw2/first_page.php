<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
	<style>
    input[type="button"]{padding:5px 15px; background:#ccc; border:0 none;
	cursor:pointer;
	-webkit-border-radius: 5px;
	border-radius: 5px; }
    
    input[type="text"]{padding:5px 15px; border:2px black solid;
	cursor:pointer;
	-webkit-border-radius: 5px;
	border-radius: 5px; }
    
	.demo{
    	padding-top: 50px;
    	text-align: center
		}
	</style>
</head>



<body>
	<div class="demo">
		<input type="text" name="blank" id="input" placeholder="Search Something...">
		<button type="button" onclick="searching()">Search</button>
	</div>

	<table border="1" align="center">
		<tr>
			<td colspan="2" align="center">
				Orders
			</td>
		</tr>
		<tr>
			<td align="center">ID</td>
			<td align="center">customer</td>
		</tr>

	</table>

	<script src="jquery.js"></script>
	<script type="text/javascript">
		function getKeyword()
		{
			var keyword = document.getElementBtId("input");
			return keyword;
		}
		function searching()
		{
			$.ajax({
				url: 'ajax_page.php',
				data: {keyword: getKeyword()},
				type: 'post'
			});
		}
	</script>
</body>
</html>



