 <?php include_once "addbook_validation.php" ;?>

<html>
	<head></head>
	<body>
		<form action="" method="post">
				<table>
					<tr>
						<td>BOOK NAME:</td>
						<td><input type="text" value="<?php echo $book_name?>" name="book_name"></td>
						<td><span style="color:red;">*<?php echo $err_book_name;?></span>
						</td>
					</tr>
					<tr>
						<td>CATAGORY:</td>
						<td>
							<select name ="catagory">
								<option disabled selected>Select a catagory</option>
								<option>Sports</option>
								<option>Computer science</option>
							</select>
						</td>
						<td><span style="color:red;">*<?php echo $err_catagory;?></span>
						</td>
					</tr>
					<tr>
						<td>DESCRIPTION:</td>
						<td><input type="text" value="<?php echo $description?>" name="description"></td>
						<td><span style="color:red;">*<?php echo $err_description;?></span>
						</td>
					</tr>
					<tr>
						<td>PUBLISHER:</td>
						<td><input type="text" value="<?php echo $publisher?>" name="publisher"></td>
						<td><span style="color:red;">*<?php echo $err_publisher;?></span>
						</td>
					</tr>
					<tr>
						<td>EDDITION:</td>
						<td><input type="text" value="<?php echo $eddition; ?>" name="eddition"></td>
						<td><span style="color:red;">*<?php echo $err_eddition;?></span>
						</td>
					</tr>
					<tr>
						<td>ISBN:</td>
						<td><input type="text" value="<?php echo $isbn ?>" name="isbn"></td>
						<td><span style="color:red;">*<?php echo $err_isbn;?></span>
						</td>
					</tr>
					<tr>
						<td>PAGES:</td>
						<td><input type="text" value="<?php echo $pages ?>" name="pages"></td>
						<td><span style="color:red;">*<?php echo $err_pages;?></span>
						</td>
					</tr>
					<tr>
						<td>PRICE:</td>
						<td><input type="text" value="<?php echo $price ?>" name="price"></td>
						<td><span style="color:red;">*<?php echo $err_price;?></span>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
					</tr>
					
				</table>
			</form>
	</body>
</html>
