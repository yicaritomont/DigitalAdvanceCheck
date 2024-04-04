@php
$img1 = App\Parametros::where('claveIdentificador','IMG_MAIL_1')->where('estado',1)->first();
$img2 = App\Parametros::where('claveIdentificador','IMG_MAIL_2')->where('estado',1)->first();
$img3 = App\Parametros::where('claveIdentificador','IMG_MAIL_3')->where('estado',1)->first();
$img4 = App\Parametros::where('claveIdentificador','IMG_MAIL_4')->where('estado',1)->first();
$img5 = App\Parametros::where('claveIdentificador','IMG_MAIL_5')->where('estado',1)->first();
$img6 = App\Parametros::where('claveIdentificador','IMG_MAIL_6')->where('estado',1)->first();
$NAME_SERVER = App\Parametros::where('claveIdentificador','NAME_SERVER')->where('estado',1)->first();
@endphp
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN""http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
<head>
<base target="_blank">
<title>Contacto</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700,700i|Poppins:300,300i,400|Raleway:300,400,700,800&amp;display=swap" rel="stylesheet"> 
<style type="text/css">
body .opensans {font-family: 'Open Sans', sans-serif!important;}
body .poppins{font-family: 'Poppins', sans-serif!important;}
body .raleway {font-family: 'Raleway', sans-serif!important;}
 
body   *{font-family: 'Open Sans', Arial, sans-serif !important}
body div, p, a, li, td { -webkit-text-size-adjust:none; }
 
body *{-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;}
body td{word-break: break-word;}
body a{word-break: break-word; text-decoration: none; color: inherit;}
 
body   .ReadMsgBody
body {width: 100%; background-color: #ffffff;}
body   .ExternalClass
body {width: 100%; background-color: #ffffff;}
body body{width: 100%; height: 100%; background-color: #ffffff; margin:0; padding:0; -webkit-font-smoothing: antialiased;}
body html{ background-color:#ffffff; width: 100%;}
body td> div,
body td.inline> div,
body span> div,
body a> div{display:inline;}

body td.inline br{display:none!important;}

body   p {padding: 0!important; margin-top: 0!important; margin-right: 0!important; margin-bottom: 0!important; margin-left: 0!important; }
body   img {user-drag: none; -moz-user-select: none; -webkit-user-drag: none;}
body   a.rotator img {-webkit-transition: all 1s ease-in-out;-moz-transition: all 1s ease-in-out; -o-transition: all 1s ease-in-out; -ms-transition: all 1s ease-in-out; }
body   a.rotator img:hover { -webkit-transform: rotate(360deg); -moz-transform: rotate(360deg); -o-transform: rotate(360deg);-ms-transform: rotate(360deg); }
body  .hover:hover {opacity:0.85;filter:alpha(opacity=85);}
body  .jump:hover {opacity:0.75; filter:alpha(opacity=75); padding-top: 10px!important;}
body  .underline:hover {text-decoration: underline!important;}
body  .hoverGreen img {opacity: 1;transition: opacity .40s ease-in-out;-moz-transition: opacity .40s ease-in-out;-webkit-transition: opacity .40s ease-in-out;}
body  .hoverGreen img:hover {opacity:0.1;filter:alpha(opacity=10)transition: opacity .40s ease-in-out;-moz-transition: opacity .40s ease-in-out;-webkit-transition: opacity .40s ease-in-out;}

#animate {-webkit-animation:Animate 8s;-moz-animation:Animate 8s;-o-animation:Animate 8s;animation:Animate 8s;}
body .inline div{display:inline;}

@-webkit-keyframes Animate {0%{opacity: 0;}100%{opacity:1;}}
@-moz-keyframes Animate {0%{opacity:0;}100%{opacity:1;}}
@-o-keyframes Animate {0%{opacity:0;}100%{opacity:1;}}
@keyframes Animate {0%{opacity:0;}100%{opacity:1;}}

body .image154 img {width: 154px; height: auto;}
body .icon27 img {width: 27px; height: auto;}
body .image274 img {width: 274px; height: auto;}
body .image560 img {width: 560px; height: auto;}
body .image600 img {width: 600px; height: auto;}
body .image400 img {width: 400px; height: auto;}
body .image310 img {width: 310px; height: auto;}
body .icon35 img {width: 35px; height: auto;}
body .icon84 img {width: 84px; height: auto;}
body .image197 img {width: 198px; height: auto;}
body .image228 img {width: 228px; height: auto;}
body .image217 img {width: 217px; height: auto;}
body .image189 img {width: 189px; height: auto;}
body .icon22 img {width: 22px; height: auto;}
body .icon52 img {width: 52px; height: auto;}
body .icon19 img {width: 19px; height: auto;}
body .logoTop img {width: 122px; height: auto;}
body .logoBottom img {width: 122px; height: auto;}
</style>

<style type="text/css">@media only screen and (max-width: 640px){
		body body{width:auto!important;}
		body table[class=full] {width: 100%!important; clear: both; }
		body table[class=mobile] {width: 100%!important; padding-left: 30px; padding-right: 30px; clear: both; }
		body table[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
		body .fullCenter {width: 100%!important; text-align: center!important; clear: both; }
		body td[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
		body .erase {display: none;}
		body .center{text-align: center!important;}
		body .buttonScale {float: none!important; text-align: center!important; display: inline-block!important; clear: both;}
		body td[class=pad20] {padding-left: 20px!important; padding-right: 20px!important; text-align: center!important; clear: both; }
		body .h20 {width: 100%!important; height: 20px!important;}
		body .h40 {width: 100%!important; height: 40px!important;}
		body .h30 {width: 100%!important; height: 30px!important;}
		body .image197 img {width: 100%!important;}	
		body .image400 img{width: 100%!important;}	
		body .image560 img {width: 100%!important;}
		body .image600 img {width: 100%!important;}
		body .premadeFullScale img{width:100%!important;}
		body .buttonScale2 {float: none!important; text-align: center!important; display: inline-block!important; clear: both; margin-left: 15px; margin-right: 15px; margin-bottom: 15px;}
}</style>

<style type="text/css">@media only screen and (max-width: 479px){
		body body{width:auto!important;}
		body table[class=full] {width: 100%!important; clear: both; }
		body table[class=mobile] {width: 100%!important; padding-left: 20px; padding-right: 20px; clear: both; }
		body table[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
		body td[class=fullCenter] {width: 100%!important; text-align: center!important; clear: both; }
		body .fullCenter {width: 100%!important; text-align: center!important; clear: both; }
		body .erase {display: none;}
		body .buttonScale {float: none!important; text-align: center!important; display: inline-block!important; clear: both;}
		body .eraseMob {display: none!important;}
		body .image310 img {width: 100%!important;}
		body td[class=pad20] {padding-left: 20px!important; padding-right: 20px!important; text-align: center!important; clear: both;}
		body .h20 {width: 100%!important; height: 20px!important;}
		body .h30 {width: 100%!important; height: 30px!important;}
		body .h40 {width: 100%!important; height: 40px!important;}
		body .image197 img {width: 100%!important;}
		body .image400 img{width: 100%!important;}
		body .image560 img {width: 100%!important;}
		body .image600 img {width: 100%!important;}
		body .premadeFullScale img{width:100%!important;}
		body .buttonScale2 {float: none!important; text-align: center!important; display: inline-block!important; clear: both; margin-left: 15px; margin-right: 15px; margin-bottom: 15px;}
}</style>

</head>
<body style='margin: 0; padding: 0;'>
 <table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#dfe7e0" align="center" style="background-color: #dfe7e0;">
	<tbody>
	<tr>
		<td valign="top" align="center" bgcolor="#dfe7e0" style="background-color: #dfe7e0;">
			<table width="800" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center" class="full">
				<tbody><tr>
					<td valign="top" align="center"> 
					      
					<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);">
						<tbody><tr>
							<td align="center">							
								<table class="mobile" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
									<tbody><tr>
										<td align="center">										
											<!-- Start Nav -->
											<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
												<tbody><tr>
													<td width="100%" height="37" class="h20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
												</tr>
												<tr>
													<td width="100%" valign="middle" align="center" class="logoTop">													
														<!-- Logo -->
														<table width="122" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tbody><tr>
																<td height="50" valign="middle" align="left" width="100%" class="fullCenter" style="line-height: 1px;">
																	<a style="text-decoration: none;"> 
																		 <img src="http://expoasoinducalscuero.com/images/templates/base-emails/logo.png" width="107" alt="" border="0" class="hover" style="width: auto;">
																	</a>
																</td>
															</tr>
														</tbody></table>														
														<table width="30" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="erase">
															<tbody><tr>
																<td width="100%" height="40">									
																</td>
															</tr>
														</tbody></table>													
														
										
										</td>
									</tr>
								</tbody></table>
								
							</td>
						</tr>
						</tbody>
					<!--—EndModule-->    
					</table></td></tr></tbody></table>
					<table class="full" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);" align="center">
						<tbody><tr>
							<td width="100%" valign="top" align="center" style="background-image: url('http://expoasoinducalscuero.com/images/templates/base-emails/bg1.png'); border-collapse: collapse;   background-position: left center; background-repeat: no-repeat; background-size:200px;" background="http://expoasoinducalscuero.com/images/templates/base-emails/bg1.png">
								
								<table class="full" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
									<tbody><tr>
										<td align="center">
											
											<!-- Column Left -->
											<table class="full" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" width="49%" cellspacing="0" cellpadding="0" border="0" align="left">
												<tbody><tr>
													<td width="100%" align="center">
											
														<!-- Wrapper -->
														<table class="mobile" width="300" cellspacing="0" cellpadding="0" border="0" align="right">
															<tbody><tr>
																<td width="100%" align="center">
																	
																	<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter" width="300" cellspacing="0" cellpadding="0" border="0" align="left">
																		<tbody>
																		<tr>
																			<td width="100%" height="60" class="h20"></td>
																		</tr>												 
																		<tr>
																			<td style="text-align: left; font-family: Helvetica, Arial, sans-serif, 'Raleway'; font-size:26px; color: #303030; line-height: 32px; font-weight:300;" class="raleway inline fullCenter" width="100%" valign="top">
																				<p>Saludos</p> 
																			</td>
																		</tr>
																		<tr>
																			<td width="100%" height="40" class="h30"></td>
																		</tr>
																		<tr>
																			<td style="text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 15px; color: #6e6e6e; line-height: 24px; font-weight: 400;" class="fullCenter" width="100%" valign="top">
																				<p>Tienes una solicitud de Contacto</p>
																				<p><b>Nombre Solicitante</b> {{$datos['nombreSolicita']}}</p>
																				<p><b>Teléfono Solicitante</b> {{$datos['telefonoSolicita']}}</p>
																				<p><b>Correo Solicitante</b> {{$datos['correoSolicita']}}</p>
																				<p>{{$datos['mensaje']}}</p>
																				
																			</td>
																		</tr>
																		<tr>
																			<td width="100%" height="40" class="h30">
																			
																			</td>
																		</tr>
																		
																		
																		  
																		<tr>
																			<td width="100%" height="25" class="h20"></td>
																		</tr>
																	</tbody></table>
																	</td>
																	</tr>
																		
																		
																		
																 
																	
																
														</tbody></table>
													
													</td>
												</tr>
											</tbody></table><!-- End Column Left -->
											
											<!-- Column Right -->
											<table class="full" width="50%" cellspacing="0" cellpadding="0" border="0" align="right">
												<tbody>
												  <tr>                                                
													<td height="40" class="h20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
												   </tr>	
													<tr>
													<td align="right" class="image400">                                    
													  <a style="text-decoration: none;"> 
														  <img src="http://expoasoinducalscuero.com/images/templates/base-emails/img06.png" width="400" alt="" border="0" class="hover" style="width: 400px;">
													   </a>                                    
													</td>
												</tr>
											</tbody></table>
											
											<!-- End Column Right -->
											
										</td>
									</tr>
									<tr>
										<td width="100%" height="50">									
										</td>
									</tr>
									
									<tr>
										<td style="text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size: 16px; color: #6e6e6e; line-height: 24px; font-weight: 400; padding-left: 120px;padding-right: 120px;" class="fullCenter" width="100%" valign="top">
											<p>Si has recibido este e-mail y no tienes información de la feria o de la empresa que te contacta, haz caso omiso a este e-mail, ya que alguien por error debe haber escrito tu dirección.</p>
											<p><strong>Este correo es generado automáticamente, por favor no responder.</strong></p>
										</td>
									</tr>
									<tr>
										<td width="100%" height="50">									
										</td>
									</tr>
								</tbody></table>
							
							</td>
						</tr>
						</tbody>
					<!--—EndModule-->    
					</table>


					
				   
					
					
					

					
					
					
					
                    
					
        
					<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#30353a" style="background-color: rgb(255, 255, 255);">
						<tbody><tr>
							<td width="100%" valign="top" align="center">
							
								<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
									<tbody><tr>
										<td align="center">
										
											
											<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
												<tbody><tr>
													<td width="100%" align="center">
														
														<!-- Headline -->
														<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
															<tbody>
															<tr>
																<td width="100%" height="36" valign="middle" style="text-align: left; font-family: Helvetica, Arial, sans-serif, 'Raleway'; font-size:22px; color: #212222; line-height: 24px; font-weight:300;" class="fullCenter inline">
																 Nuestros<br>
																<span style="font-weight:800; text-decoration:underline;">Patrocinadores.</span> 
																</td>
															</tr>										 
															<tr>
																<td width="100%" height="30"></td>
															</tr>
														</tbody></table>
														
													</td>
												</tr>
											</tbody></table>
											
												<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff">
													<tbody><tr>
														<td width="100%" valign="top">
															
															<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
																<tbody><tr>
																	<td>
																	
																		<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
																			<tbody><tr>
																				<td width="100%" height="13"></td>
																			</tr>
																		</tbody></table>
																				
																		<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
																			<tbody><tr>
																				<td width="100%">
																					
																					<!-- Brand 1 -->
																					<table width="180" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; border-style: solid; border-color: #ececec;" class="full">
																						<tbody><tr>
																							<td width="100%" valign="middle" height="130">
																								<table width="180" border="0" cellpadding="0" cellspacing="0" align="center">
																									<tbody><tr>
																										<td width="100%" height="10"></td>
																									</tr>
																									<tr>
																										<td width="100%" style="text-align: center;" class="image110">
																											<a style="text-decoration: none;">
																												 <img src="{{$NAME_SERVER->valor.$img1->valor}}" width="170" height="auto" style="width: 170px; height: auto;" alt="" border="0" class="">
																											</a>
																										</td>
																									</tr>
																									<tr>
																										<td width="100%" height="10"></td>
																									</tr>
																								</tbody></table>
																							</td>
																						</tr>
																					</tbody></table>
																					
																					<!-- Space -->
																					<table width="22" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
																						<tbody><tr>
																							<td width="100%" height="25">									
																							</td>
																						</tr>
																					</tbody></table>
																					
																					<!-- Brand 2 -->
																					<table width="180" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; border-style: solid; border-color: #ececec;" class="full">
																						<tbody><tr>
																							<td width="100%" valign="middle" height="130">
																								<table width="180" border="0" cellpadding="0" cellspacing="0" align="center">
																									<tbody><tr>
																										<td width="100%" height="10"></td>
																									</tr>
																									<tr>
																										<td width="100%" style="text-align: center;" class="image110">
																											<a style="text-decoration: none;">
																												 <img src="{{$NAME_SERVER->valor.$img2->valor}}" width="170" height="auto" style="width: 170px; height: auto;" alt="" border="0" class="">
																											</a>
																										</td>
																									</tr>
																									<tr>
																										<td width="100%" height="10"></td>
																									</tr>
																								</tbody></table>
																							</td>
																						</tr>
																					</tbody></table>
																					
																					<!-- Space -->
																					<table width="22" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
																						<tbody><tr>
																							<td width="100%" height="25">									
																							</td>
																						</tr>
																					</tbody></table>
																					
																					<!-- Brand 6 -->
																					<table width="180" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; border-style: solid; border-color: #ececec;" class="full">
																						<tbody><tr>
																							<td width="100%" valign="middle" height="130">
																								<table width="180" border="0" cellpadding="0" cellspacing="0" align="center">
																									<tbody><tr>
																										<td width="100%" height="10"></td>
																									</tr>
																									<tr>
																										<td width="100%" style="text-align: center;" class="image110">
																										   <a style="text-decoration: none;">
																												 <img src="{{$NAME_SERVER->valor.$img3->valor}}" width="170" height="auto" style="width: 170px; height: auto;" alt="" border="0" class="">
																											</a>
																										</td>
																									</tr>
																									<tr>
																										<td width="100%" height="10"></td>
																									</tr>
																								</tbody></table>
																							</td>
																						</tr>
																					</tbody></table>
																					<!-- Space -->
																					<table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
																						<tbody><tr>
																							<td width="100%" height="25">									
																							</td>
																						</tr>
																					</tbody></table>
																					
																					<!-- Brand 6 -->
																					
																												
																				</td>
																			</tr>
																		</tbody></table>
																		
																		<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
																			<tbody><tr>
																				<td width="100%" height="22"></td>
																			</tr>
																		</tbody></table>
																		
																		<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
																			<tbody><tr>
																				<td width="100%">
																					
																					<!-- Brand 1 -->
																					<table width="180" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; border-style: solid; border-color: #ececec;" class="full">
																						<tbody><tr>
																							<td width="100%" valign="middle" height="130">
																								<table width="180" border="0" cellpadding="0" cellspacing="0" align="center">
																									<tbody><tr>
																										<td width="100%" height="10"></td>
																									</tr>
																									<tr>
																										<td width="100%" style="text-align: center;" class="image110">
																											<a style="text-decoration: none;">
																												 <img src="{{$NAME_SERVER->valor.$img4->valor}}" width="170" height="auto" style="width: 170px; height: auto;" alt="" border="0" class="">
																											</a>
																										</td>
																									</tr>
																									<tr>
																										<td width="100%" height="10"></td>
																									</tr>
																								</tbody></table>
																							</td>
																						</tr>
																					</tbody></table>
																					
																					<!-- Space -->
																					<table width="22" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
																						<tbody><tr>
																							<td width="100%" height="25">									
																							</td>
																						</tr>
																					</tbody></table>
																					
																					<!-- Brand 2 -->
																					<table width="180" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; border-style: solid; border-color: #ececec;" class="full">
																						<tbody><tr>
																							<td width="100%" valign="middle" height="130">
																								<table width="180" border="0" cellpadding="0" cellspacing="0" align="center">
																									<tbody><tr>
																										<td width="100%" height="10"></td>
																									</tr>
																									<tr>
																										<td width="100%" style="text-align: center;" class="image110">
																											<a style="text-decoration: none;">
																												 <img src="{{$NAME_SERVER->valor.$img5->valor}}" width="170" height="auto" style="width: 170px; height: auto;" alt="" border="0" class="">
																											</a>
																										</td>
																									</tr>
																									<tr>
																										<td width="100%" height="10"></td>
																									</tr>
																								</tbody></table>
																							</td>
																						</tr>
																					</tbody></table>
																					
																					<!-- Space -->
																					<table width="22" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
																						<tbody><tr>
																							<td width="100%" height="25">									
																							</td>
																						</tr>
																					</tbody></table>
																					
																					<!-- Brand 6 -->
																					<table width="180" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; border-style: solid; border-color: #ececec;" class="full">
																						<tbody><tr>
																							<td width="100%" valign="middle" height="130">
																								<table width="180" border="0" cellpadding="0" cellspacing="0" align="center">
																									<tbody><tr>
																										<td width="100%" height="10"></td>
																									</tr>
																									<tr>
																										<td width="100%" style="text-align: center;" class="image110">
																											<a style="text-decoration: none;">
																												 <img src="{{$NAME_SERVER->valor.$img6->valor}}" width="170" height="auto" style="width: 170px; height: auto;" alt="" border="0" class="">
																											</a>
																										</td>
																									</tr>
																									<tr>
																										<td width="100%" height="10"></td>
																									</tr>
																								</tbody></table>
																							</td>
																						</tr>
																					</tbody></table>
																					<!-- Space -->
																					<table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
																						<tbody><tr>
																							<td width="100%" height="25">									
																							</td>
																						</tr>
																					</tbody></table>
																					
																					<!-- Brand 6 -->
												
																												
																				</td>
																			</tr>
																		</tbody></table>
																	
																	</td>
																</tr>
															</tbody></table><!-- Wrapper -->
														
														</td>
													</tr>
												</tbody></table>
												</td>
											</tr>
										</tbody></table>
												
								</td>
							</tr>
						</tbody>
					<!--—EndModule-->	
					</table>        
					<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#30353a" style="background-color: rgb(255, 255, 255);">
						<tbody><tr>
							<td width="100%" valign="top" align="center">
							
								<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
									<tbody><tr>
										<td align="center">
										
											<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
												<tbody><tr>
													<td width="100%" height="65"></td>
												</tr>
											</tbody></table>
											
											<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
												<tbody><tr>
													<td width="100%" align="center">
														
														<!-- Headline -->
														<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
															<tbody>
															<tr>
																<td width="100%" height="36" valign="middle" style="text-align: left; font-family: Helvetica, Arial, sans-serif, 'Raleway'; font-size:22px; color: #212222; line-height: 24px; font-weight:300;" class="fullCenter inline">
																  Visíta nuestra<br>
																	  <span style="font-weight:800; text-decoration:underline;"> Feria Virtual!</span>
																</td>
															</tr>										 
															<tr>
																<td width="100%" height="30"></td>
															</tr>
														</tbody></table>
														
													</td>
												</tr>
											</tbody></table>
											
												<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff">
													 <tbody><tr>
														<td width="100%" valign="top" class="image600">
															 <a href="http://expoasoinducalscuero.com/"><img src="http://expoasoinducalscuero.com/images/templates/base-emails/image_600px_1.png" width="600" height="auto" style="width: 600px; height: auto; margin: 10px 0px 50px 0px;" alt="" border="0" class=""></a>

														</td>
													</tr>
												</tbody></table>
										</td>
									</tr>
								</tbody>
								</table>                             
							</td>
						</tr>
						</tbody>
					<!--—EndModule-->
					</table>                   
					<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#111111" style="background-color: rgb(17, 17, 17);">
						<tbody><tr>
							<td width="100%" valign="top" align="center">
							 
							
								<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
									<tbody><tr>
										<td align="center">
											
											<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
												<tbody>
												<tr>
													<td width="100%" height="20"></td>
												</tr>
												<tr>
													<td width="100%" align="center">
														<table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tbody>										 
															<tr>
																<td width="100%" class="fullCenter">
																	<table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
																		<tbody>	
																		<tr>
																			<td height="5" class="h20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
																		</tr>														
																		<tr>
																			<td align="left" style="font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-size:13px; color: #ffffff; font-weight: 400;" class="fullCenter inline">		 
																		   © 2020 - <a href="http://ciudadtecnopolis.com/" style="text-decoration: none; color: #38ef7d;"> Ciudad Tecnópolis SAS</a>
																			</td>
																		</tr>
																	</tbody></table>
																</td>
															</tr>                                        
															 
														</tbody></table>
														<table width="30" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
															<tbody><tr>
																<td width="100%" height="40" class="h20"></td>
															</tr>
														</tbody></table>                                        
														                                       
													</td>
												</tr>
												<tr>
													<td height="10" class="h20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
												</tr>
											</tbody></table>                           
										</td>
									</tr>
								</tbody></table>          
							
							</td>
						</tr>
						</tbody>
					<!--—EndModule-->    
					</table>    
	
					</td>
        		</tr>    		 
    		</tbody></table>
		</td>
	</tr>
	</tbody>
</table>          
<!-- This is an Android Fix, do not delete it -->
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" class="full" bgcolor="#282828">
    <tbody><tr>
        <td width="100%" align="center" class="fullCenter">			
            <table width="600" align="center" border="0" cellpadding="0" cellspacing="0" class="full" style="width: 600px;">
                <tbody><tr>
                    <td align="center">						
                        <table align="center" class="full" width="100%" border="0" cellspacing="0" cellpadding="0" style="table-layout:fixed;">
                            <tbody><tr>
                                <td class="erase androindfix" style="line-height:1px; font-size:1px;" width="600"> <img src="http://expoasoinducalscuero.com/images/templates/base-emails/transparant.png" height="1" style="max-height:1px; min-height:1px; display:block; width:600px; min-width:600px;" border="0"></td>
                            </tr>
                        </tbody></table>						
                    </td>
                </tr>
            </tbody></table>			
        </td>
    </tr>
</tbody></table>
<!-- End this is an Android Fix, do not delete it -->
</body>
</html>