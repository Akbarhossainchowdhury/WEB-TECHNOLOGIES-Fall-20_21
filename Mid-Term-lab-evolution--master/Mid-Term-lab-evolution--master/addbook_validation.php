<?php 

	$book_name="";
	$err_book_name="";
	$catagory="";
	$err_catagory="";
	$description="";
	$err_description="";
	$publisher="";
	$err_publisher="";
	$eddition="";
	$err_eddition="";
	$isbn="";
	$err_isbn="";
	$pages="";
	$err_pages="";
	$price="";
	$err_price="";
	$fillAll=true;
	
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["book_name"]))
		{
			$err_book_name = "*required";
			$fillAll=false;
		}
		else{ $book_name = htmlspecialchars($_POST["book_name"]);}
		if(!isset($_POST["catagory"]))
		{
			$err_catagory= "*required ";
			$fillAll=false;
		}
		else{ $catagory = htmlspecialchars($_POST["catagory"]);}
		
		if(empty($_POST["description"]))
		{
			$err_description = "*required";
			$fillAll=false;
		}
		else{ $description = htmlspecialchars($_POST["description"]);}
		
		if(empty($_POST["publisher"]))
		{
			$err_publisher = "*required";
			$fillAll=false;
		}
		else{ $publisher = htmlspecialchars($_POST["publisher"]);}
		
		if(empty($_POST["eddition"]))
		{
			$err_eddition = "*required";
			$fillAll=false;
		}
		else{ $eddition = htmlspecialchars($_POST["eddition"]);}
		
		if(empty($_POST["isbn"]))
		{
			$err_isbn = "*required";
			$fillAll=false;
		}
		else{ $isbn = htmlspecialchars($_POST["isbn"]);}
		
		if(empty($_POST["pages"]))
		{
			$err_pages = "*required  number";
			$fillAll=false;
		}
		else if(!is_numeric($_POST["pages"]))
		{
			$err_pages = "*required numeric charecter";
			$fillAll=false;
		}
		else{ $pages = htmlspecialchars($_POST["pages"]);}
		
		if(empty($_POST["price"]))
		{
			$err_price = "*required  number";
			$fillAll=false;
		}
		else if(!is_numeric($_POST["price"]))
		{
			$err_price = "*required numeric charecter";
			$fillAll=false;
		}
		else{ $price = htmlspecialchars($_POST["price"]);}
		
		if($fillAll==true)
		{
			$books = simplexml_load_file("book.xml");
			$data = $books->book;
			
			$book = $books->addChild("book");
			$book->addChild("number",count($data)+1);
			$book->addChild("name",$book_name);
			$book->addChild("publisher","$publisher");
			$book->addChild("isbn",$isbn);
			$book->addChild("price",$price);
			$book->addChild("image","resources/book_default.png");
			$book->addChild("del","resources/drop.png");
			
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($books->asXML());
			
			
			$file = fopen("book.xml","w");
			fwrite($file,$xml->saveXML());
			echo "book added successfully";
		}
		
	}
	

?>
