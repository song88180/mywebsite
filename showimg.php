<?php
echo "<div id=\"pwd\"> <a href=\"index.php\">Home</a> / <a href=\"Photo.php\">Photo</a> / <a href=\"Photo_$which.php\">$which</a> </div>";
$files = scandir("img/$which/bigsize");
        $n = count($files) - 2;
        for ($i=1;$i<=$n;$i++){
                echo "<a href=\"img/$which/bigsize/${i}.jpg\" data-lightbox=\"$which\" >";
                echo "<img src=\"img/$which/thumbnail/${i}.jpg\" height=\"200px\" style=\"margin:10px;\">";
                echo "</a>";
        }
?>
