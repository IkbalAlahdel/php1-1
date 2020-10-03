<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// Program to display complete URL 
  
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
                === 'on' ? "https" : "http") . "://" . 
          $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; 
  
// Display the complete URL 
echo $link."<br/>";



//other code
if(isset($_SERVER['HTTPS']) &&  
            $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
    else
        $link = "http"; 
  
// Here append the common URL  
// characters. 
$link .= "://"; 
      
// Append the host(domain name, 
// ip) to the URL. 
$link .= $_SERVER['HTTP_HOST']; 
      
// Append the requested resource 
// location to the URL 
$link .= $_SERVER['PHP_SELF']; 
      
// Display the link 
echo $link;
?>
</body>
</html>