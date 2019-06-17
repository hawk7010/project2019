<!DOCTYPE html>
<html>
<head>
<style>
ul{width:100px;}
.color-red{background-color:red;}
</style>
</head>
<body>
<ul>
  <?php for($i = 0; $i <= 100; $i++) {
          if($i % 2 == 1) { ?>
            <li class="color-red"><?php echo $i; ?></li>
  <?php   } else { ?>
            <li><?php echo $i; ?>
  <?php   }
        } ?>
</ul>
</body>
</html>
