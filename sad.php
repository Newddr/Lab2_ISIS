<?php
    $is_video = $url == '/sad/video';
    $is_info = $url == '/sad/info';
?>


<h1>Очень грустный гусь под трагичную музыку</h1>
<br>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link <?= $is_video ? "active" : '' ?>" href="/sad/video">
        Видео грустного гуся
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $is_info ? "active" : '' ?>" href="/sad/info">
        Описание грустного гуся
    </a>
  </li>
</ul>
<br>
<?php
$Text="Выберите куда хотите перейти";

?>

<?php if($is_info){ 
    require "../views/sad_info.php";
    $Text="";
    ?>
    
<?php } else {if ($is_video) {
    require "../views/sad_video.php";
    $Text="";
    ?>
    
<?php } }   ?>

<?php
echo $Text;
?>


