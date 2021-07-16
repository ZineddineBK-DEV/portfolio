<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#26eb9e">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<link rel="stylesheet" href="../css/workStyle.css">
	<link rel="stylesheet" href="../css/style.css">
    <title>Work</title>
</head>
<body>
	<nav class="navbar" style="background-color: black;">
        <div class="max-width">
            <div class="logo"><a href="../index.html">Mehdi<span>Belhaj.</span></a></div>
            <ul class="menu">
                <li><a href="../index.html" class="menu-btn">Go back to the main page</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
   <div style="padding: 100px;background-color: #d9e0e0;">
	<article class='gallery'>
		<?php
		//displays only .jpg images
		$dir_path = "assets/images/";
		$extensions_array = array('jpg');
		
		if(is_dir($dir_path))
		{
			$files = scandir($dir_path);
			
			for($i = 0; $i < count($files); $i++)
			{
				if($files[$i] !='.' && $files[$i] !='..')
				{
					// get file name
					//echo "File Name -> $files[$i]<br>";
					
					// get file extension
					$file = pathinfo($files[$i]);
					$extension = $file['extension'];
					//echo "File Extension-> $extension<br>";
					
				   // check file extension
					if(in_array($extension, $extensions_array))
					{
					// show image
					echo "  <figure class='gallery-image'>
							<img src='$dir_path$files[$i]' style='width:1000;height:1000;'>
							</figure>";
					}
				}
			}
		
		}
		?>	
	</article>
	</div>  
	  <footer>
        <span>Created By ZINEDDINE-BK | <span class="far fa-copyright"></span>
		<span id="year">
            <script>document.getElementById('year').appendChild(document.createTextNode(new Date().getFullYear()))</script>
        </span>
        All rights reserved.</span>
    </footer>
	  
  
         <script src="../js/script2.js"></script>

</body>
</html>
