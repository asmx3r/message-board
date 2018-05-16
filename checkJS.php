<html>
<head>
<?php
  if(!isset($_REQUEST['JS'])){?>
    <noscript>
      <meta http-equiv="refresh" content="0; url='<?php echo basename($_SERVER['PHP_SELF']);?>?JS='"/>
    </noscript><?php
  }
?>
</head>
<body>    
<?php
  if(isset($_REQUEST['JS'])) echo 'JavaScript is Disabled';
  else echo 'JavaScript is Enabled';
?>
</body>
</html>
