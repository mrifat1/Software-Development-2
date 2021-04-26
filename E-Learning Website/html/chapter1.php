<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>E-Learning Platform</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  
</head>
<body>
	
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>HTML</h1>
				</div>
			</div>
		</div>
	</header>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
					<h1>What is HTML?</h1><br>
					<p>HTML is the standard markup language for creating Web pages.<p>
					<ul>
						<li>HTML stands for Hyper Text Markup Language</li>
						<li>HTML describes the structure of Web pages using markup</li>
						<li>HTML elements are the building blocks of HTML pages</li>
						<li>HTML elements are represented by tags</li>
						<li>HTML tags label pieces of content such as "heading", "paragraph", "table", and so on</li>
						<li>Browsers do not display the HTML tags, but use them to render the content of the page</li>
					</ul>
					<hr>
					<h1>A Simple HTML Document</h1>
					<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = '<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<h1>My First Heading</h1>
<p>My first paragraph.</p>
</body>
</html>';
echo htmlspecialchars($str);

echo '</pre>';
?>
					<h1>Example Explained</h1>
					<ul>
						<li>The <?php $str='<!DOCTYPE html>'; echo htmlspecialchars($str); ?> declaration defines this document to be HTML5</li>
						<li>The <?php $str='<html>'; echo htmlspecialchars($str); ?> element is the root element of an HTML page</li>
						<li>The <?php $str='<head>'; echo htmlspecialchars($str); ?>  element contains meta information about the document</li>
						<li>The <?php $str='<title>'; echo htmlspecialchars($str); ?>  element specifies a title for the document</li>
						<li>The <?php $str='<body>'; echo htmlspecialchars($str); ?>  element contains the visible page content</li>
						<li>The <?php $str='<h1>'; echo htmlspecialchars($str); ?>  element defines a large heading</li>
						<li>The <?php $str='<p>'; echo htmlspecialchars($str); ?>  element defines a paragraph</li>
					</ul>
					<hr>
					<h1>HTML Tags</h1>
					<p>HTML tags are element names surrounded by angle brackets:</p>
					<?php 
					echo '<pre>';
					$str = '<tagname>content goes here...</tagname>';
					echo htmlspecialchars($str);
					echo '</pre>';
					?>
					<ul>
						<li>HTML tags normally come in pairs like <?php $str='<p>'; echo htmlspecialchars($str); ?> and <?php $str='</p>'; echo htmlspecialchars($str); ?></li>
						<li>The first tag in a pair is the start tag, the second tag is the end tag</li>
						<li>The end tag is written like the start tag, but with a forward slash inserted before the tag name</li>
					</ul>
					<hr>
					<h1>HTML Page Structure</h1>
					<p>Below is a visualization of an HTML page structure:</p>
					<img src="images/html.jpg" >
					<hr>
					
			</div>
			<div class="col-md-2 col-md-pull-9" style="margin-top:10px;">
			
				
			</div>
		</div>
		
	</div>
	


	 <div class="foter"><!--footer-->
      <div class="container-fluid"> 
        <p>Copyright 2020<br>Designed By 38 Intake,Faisal Mahmud Rifat</p>
      </div> 
    </div><!--footer-->
</body>
</html>
