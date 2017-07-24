<!DOCTYPE html>

<html lang="en">

	<head>
		<meta cahrsert="UTF-8">
		<title> View Upload </title>
		<link rel="stylesheet" href="slick/slick.css" type="text/css">
		<link rel="stylesheet" href="slick/slick-theme.css" type="text/css">
		<link rel="stylesheet" href="style/app.css" type="text/css">
	</head>

	<body>
	    <?php if(count($output)>0) : ?>
            <h1> My Photo Gallery</h1>
            <div class="gallery">

                <?php foreach($output as $file) :?>
                    <img src="uploads/<?=$file ?>">
                <?php endforeach;?>

            </div>
         <?php else : ?>
         <h4>You have not uploaded any file!</h4>
         <?php endif ?>
		<p><a href="upload.php"> Back </a> </p>
		
		<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
		<script type="text/javascript" src="slick/slick.min.js"> </script>
		<script type="text/javascript" src="scripts/slide.js"> </script>
	</body>
</html>