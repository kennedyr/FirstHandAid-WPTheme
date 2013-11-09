<?php
/*
Template Name: Photo Slideshow
*/
?>

<h1>Albums</h1>
<ul>
<?php
	define('SLIDESHOW_DIR', 'wp-content/slideshow_images');
	if($handle = opendir(SLIDESHOW_DIR))
	{
		while (false !== ($entry = readdir($handle))) {
			if($entry != '.' && $entry != '..' && is_dir(SLIDESHOW_DIR.'/'.$entry)) {
				//open the album and iterate over the images
				$path = SLIDESHOW_DIR.'/'.$entry;
				
				if($album = opendir($path))
				{
					$image = readdir($album);
					if($image !== false && $image == '.') $image = readdir($album);
					if($image !== false && $image == '..') $image = readdir($album);
					
					if($image !== false)
					{
						echo "<li><a href='$path/$image' rel='lightbox[$entry]'>" . str_replace('_', ' ', $entry) . "</a></li>";
					
						echo '<ul style="display:none">';
						while(($image = readdir($album)) !== false)
						{
							$imageurl = $path.'/'.$image;
							if($entry != '.' && $entry != '..' && !is_dir($imageurl)) {
								echo "<li><a href='$imageurl' rel='lightbox[$entry]'></a></li>";
							}
						}
						closedir($album);
						echo '</ul>';
					}
				}
			}
		}

		closedir($handle);
	}
	else echo 'could not open directory.';
?>
</ul>