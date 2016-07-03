<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- If you delete this meta tag, Half Life 3 will never be released. -->
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?=$tema?></title>
	
<style>
*{margin:0;padding:0}*{font-family:"Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif}img{max-width:100%}
.collapse{margin:0;padding:0}body{-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:none;width:100% !important;height:100%}
a{color:#2ba6cb} .btn{display: inline-block;padding: 6px 12px;margin-bottom: 0;font-size: 14px;font-weight: normal;line-height: 1.428571429;
	text-align: center;white-space: nowrap;vertical-align: middle;cursor: pointer;border: 1px solid transparent;
	border-radius: 4px;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;-o-user-select: none;
	user-select: none;color: #333;background-color: white;border-color: #CCC;} 
p.callout{padding:15px;background-color:#ecf8ff;margin-bottom:15px}.callout a{font-weight:bold;color:#2ba6cb}
table.social{border-top:thin solid #ebebeb}.social 
.soc-btn{padding:3px 7px;border-radius:2px; -webkit-border-radius:2px; -moz-border-radius:2px; font-size:12px;margin-bottom:10px;
	text-decoration:none;color:#FFF;font-weight:bold;display:block;text-align:center}
a.fb{background-color:#3b5998 !important}a.tw{background-color:#1daced !important}a.gp{background-color:#db4a39 !important}
a.ms{background-color:#000 !important}.sidebar .soc-btn{display:block;width:100%}table.head-wrap{width:100%}
.header.container table td.logo{padding:15px}.header.container table td.label{padding:15px;padding-left:0}table.body-wrap{width:100%}
table.footer-wrap{width:100%;clear:both !important}.footer-wrap .container td.content p{border-top:1px solid #d7d7d7;padding-top:15px}
.footer-wrap .container td.content p{font-size:10px;font-weight:bold}
h1,h2,h3,h4,h5,h6{font-family:"HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
	line-height:1.1;margin-bottom:15px;color:#000}
h1 small,h2 small,h3 small,h4 small,h5 small,h6 small{font-size:60%;color:#6f6f6f;line-height:0;text-transform:none}
h1{font-weight:200;font-size:44px}h2{font-weight:200;font-size:37px}h3{font-weight:500;font-size:27px;color:#00b4dc;}h4{font-weight:500;font-size:23px}
h5{font-weight:900;font-size:17px}h6{font-weight:900;font-size:14px;text-transform:uppercase;color:#444}.collapse{margin:0 !important}
p,ul{margin-bottom:10px;font-weight:normal;font-size:14px;line-height:1.6}p.lead{font-size:17px; color: #17222d; font-style: italic}p.last{margin-bottom:0}
ul li{margin-left:5px;list-style-position:inside}ul.sidebar{background:#ebebeb;display:block;list-style-type:none}
ul.sidebar li{display:block;margin:0}
ul.sidebar li a{text-decoration:none;color:#666;padding:10px 16px;margin-right:10px;cursor:pointer;border-bottom:1px solid #777;
	border-top:1px solid #fff;display:block;margin:0}ul.sidebar li a.last{border-bottom-width:0}
ul.sidebar li a h1,ul.sidebar li a h2,ul.sidebar li a h3,ul.sidebar li a h4,ul.sidebar li a h5,ul.sidebar li a h6,ul.sidebar li a p{
	margin-bottom:0 !important}.container{display:block !important;max-width:600px !important;margin:0 auto !important;clear:both !important}
.content{padding:15px;max-width:600px;margin:0 auto;display:block}.content table{width:100%}.column{width:300px;float:left}
.column tr td{padding:15px}.column-wrap{padding:0 !important;margin:0 auto;max-width:600px !important}.column table{width:100%}
.social .column{width:280px;min-width:279px;float:left}.clear{display:block;clear:both}
@media only screen and (max-width:600px){a[class="btn"]{display:block !important;margin-bottom:10px !important;background-image:none !important;
	margin-right:0 !important}div[class="column"]{width:auto !important;float:none !important}
table.social div[class="column"]{width:auto !important}}
</style>

</head>
 
<body bgcolor="#FFFFFF">

<!-- HEADER -->
<table class="head-wrap" style="border-bottom: medium solid #00b4dc" > 
	<tr>
		<td></td>
		<td class="header container" >
				
				<div class="content">
					<table>
						<tr>
							<td><img src="<?=site_url('')?>/logo.png" height="30" width="142" /></td>
							<td align="right"><h6 class="collapse"><?=$tema ? $tema : "TEMA"?></h6></td>
						</tr>
					</table>
				</div>
				
		</td>
		<td></td>
	</tr>
</table><!-- /HEADER -->


<!-- BODY -->
<table class="body-wrap" bgcolor="#17222d">
	<tr>
		<td ></td>
		<td class="container" bgcolor="#FFFFFF">

			<div class="content">
			<table>
				<tr>
					<td>
						<h3><?=$asunto ? $asunto : "asunto"?></h3>
						<?php echo $sumario ? '<p class="lead">'.$sumario.'</p>' : '<p class="lead">sumario</p>'?>
						<div class="col-md-12"><?=$contenido ? $contenido : "contenido"?></div>
						<br /><br />				
												
						<!-- social & contact -->
						<table class="social" width="100%">
							<tr>
								<td>
									<h5 style="padding: 1rem">Atentamente:</h5>
									<!-- column 1 -->
									<table align="left" class="column">
										<tr>
											<td>				
												
												<img src="<?=site_url('')?>/logo.png"  width="100%" />
													
												
											</td>
										</tr>
									</table><!-- /column 1 -->	
									
									<!-- column 2 -->
									<table align="left" class="column">
										<tr>
											<td>				
																			
																								
												<p>
												Telefono fijo: <strong><?=$fijo ? $fijo : "000 00 00"?></strong><br/>
												Telefono movil: <strong><?=$movil ? $movil : "000 000 00 00"?></strong><br/>
                								Web: <strong><a href="<?=$web ? $web : "#"?>">
                								<?=$web ? $web : ""?></a></strong></p>
                
											</td>
										</tr>
									</table><!-- /column 2 -->
									
									<span class="clear"></span>	
									
								</td>
							</tr>
						</table><!-- /social & contact -->
						
					</td>
				</tr>
			</table>
			</div><!-- /content -->
									
		</td>
		<td ></td>
	</tr>
</table><!-- /BODY -->

<!-- FOOTER -->
<table class="footer-wrap" bgcolor="#00b4dc">
	<tr>
		<td></td>
		<td class="container" >
			
				<!-- content -->
				<div class="content">
				<table>
				<tr>
					<td align="center">
						<p>
							<a style="color: white; text-decoration: none;" href="<?=$web ? $web : "#"?>">Visita nuestra página web</a>
						</p>
					</td>
				</tr>
			</table>
				</div><!-- /content -->
				
		</td>
		<td></td>
	</tr>
</table><!-- /FOOTER -->

</body>
</html>
