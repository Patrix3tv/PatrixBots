<?php
$rider=0;
if (isset($_GET['rider'])) $Reiter=($_GET['rider']);
?>
<ul>
  <li><a href="index.php?show=home" <?php if ($rider==0) echo"class='you-are-here'";?>>Home</a></li>
  <li><a href="index.php?show=discordbot&rider=1" <?php if ($rider==1) echo" class='you-are-here'";?>>Discord Bot</a></li>
  <li><a href="index.php?show=kontakt&rider=2"<?php if ($rider==2) echo" class='you-are-here'";?>>Contact</a></li>  
  <li><a href="index.php?show=impressum&rider=3"<?php if ($rider==3) echo" class='you-are-here'";?>>Impressum</a></li>
</ul>
