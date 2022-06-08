<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Output</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Output.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.11.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">
    {
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Output">
    <meta property="og:type" content="website">
  </head>

  <?php require "Calculate.php";?>

  <body class="u-body u-xl-mode">
    <section class="u-clearfix u-image u-shading u-valign-middle-lg u-valign-middle-md u-section-1" src="" id="carousel_661b" data-image-width="1620" data-image-height="1080">
      <div class="wrap">
        <div class="header">
          <table width=  "600px" height= "500px" table-layout = "fixed" cellpadding="20">
              <tr style="visibility: hidden;">
                <td width="300px"><font size="5"></font>
                <td width="300px"><font size="5"></font>
              </tr>
              <tr>
                  <th><font size="4">姓名</font></th>
                  <th><font size="4"><?php echo$_POST['name']?></font></th>
              </tr>
              <tr>
                  <th><font size="4">電子郵件信箱</font></th>
                  <th><font size="4"><?php echo$_POST['email']?></font></th>
              </tr>
              <tr>
                  <th><font size="4">方案</font></th>
                  <th><font size="4"><?php echo$_POST['text']?></font></th>
              </tr>
              <tr>
                  <th><font size="4">使用時數</font></th>
                  <th><font size="4"><?php echo$_POST['text-1']?></font></th>
              </tr>
              <tr>
                  <th><font size="4">4G/5G</font></th>
                  <th><font size="4"><?php echo$_POST['text-2']?></font></th>
              </tr>
              <tr>
                  <th><font size="4">話費額</font></th>
                  <th><font size="4"><?php echo$money?></font></th>
              </tr>
          </table>
        </div>
        <div class="content">
        <a href="Input.php" class="u-btn u-btn-round u-button-style u-hover-feature u-hover-palette-1-light-1 u-radius-50">Again</a>  
        <a href="Home.php" class="u-btn u-btn-round u-button-style u-hover-feature u-hover-palette-1-light-1 u-radius-50">Home</a> 
        </div>
      </div>
    </section>
  </body>
</html>
<!--<button class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 " onclick="location.href='Input.php'">Again</button>
-->