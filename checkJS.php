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
  if(isset($_REQUEST['JS']))
    // echo 'JavaScript is Disabled';
    session_start();  // Start the session
    $_SESSION['JS-state'] = "off";
  else
    // echo 'JavaScript is Enabled';
    session_start();  // Start the session    
    $_SESSION['JS-state'] = "on";
?>
</body>
</html>
