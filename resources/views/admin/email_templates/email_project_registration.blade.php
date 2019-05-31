
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
<title>Verz Design :: Our Newsletter</title>
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
html { width:100%; }
body { background-color:#e7e7e7; margin:0; padding:0; font-family:'Poppins', sans-serif; font-weight:300; }
table { margin:0px auto; padding:0px; border-collapse:collapse; border:none; }
img { border:0px; text-decoration:none; outline:none; }
@media only screen and (max-width:640px) {
body { width:auto!important; }
}
</style>
</head>

<body>
    <table style="background:#e7e7e7; margin:0px auto; padding:0px; font-family:'Poppins', sans-serif; font-size:15px; color:#363636; width:100%; border:0px; border-collapse:collapse;">
		<tr>
        	<td style="text-align:left; vertical-align:top; padding:0px;">
            	<!--Table Start-->
                	<table style="width:600px; margin:0px auto; padding:0px; border:0px; border-collapse:collapse; overflow:hidden;">
                        <tr>
                        	<td style="padding:30px 0px; text-align:center; vertical-align:top;">
                                <a href="javascript:void(0);" style="display:block; color:#ffffff; text-decoration:none;"><img src="{{ asset('images/Verzdesign-Logo.png') }}" alt="Verz Design" style="margin:0px; padding:0px; border:none;" /></a>
                        	</td>
                        </tr>
                        
                    	<tr>
                        	<td style="height:280px; background:url({{ asset('images/banner-img2.png') }}) center center no-repeat; overflow:hidden; vertical-align:bottom; text-align:left; padding:0px;">
                            	<div style="display:inline-block; vertical-align:middle; color:#ffffff; font-size:35px; line-height:40px; font-weight:700; padding:0px 40px 40px; letter-spacing:-2px;">We'd love to hear<br />your voice</div>
                            </td>
                        </tr>
                        
                        <tr>
                        	<td style="padding:40px; background:#ffffff; vertical-align:top; text-align:left;">
                            	<table style="width:100%; margin:0px auto; padding:0px; border:0px; border-collapse:collapse;">
                                	<tr>
                                        <td style="vertical-align:top; text-align:left; padding:0px;">
                                        	<div style="font-size:20px; font-weight:600; margin-bottom:30px;">Dear {{ $receiver_name }},</div>
                                            <p style="line-height:24px; margin:0px auto 20px;">Thank you for your support rendered during the development of your project. You have been served by our Project Manager, <strong>{{ $sender_name }}</strong>.</p>
                                            <p style="line-height:24px; margin:0px auto 20px;">We hope that you are happy with our service and support. In order for us to continuously improve, please help us with a short survey by clicking on the link below.</p>
                                            
                                            <p style="line-height:24px; margin:0px auto 20px;"><a href="{{ $url }}" style="display:inline-block; color:#ffffff; text-decoration:none; background:#f37936; border-radius:20px; line-height:24px; padding:8px 30px; text-align:center; letter-spacing:4px; font-weight:600; font-size:13px; text-transform:uppercase;">TAKE OUR 2 minute SURVEY</a></p>
                                            
                                            <p style="line-height:24px; margin:0px auto 20px;">If the button above is not working, please use this URL directly:<br />
                                            <a href="{{ $url }}" style="display:block; color:#f37936; text-decoration:none; word-break:break-all;">{{ $url }}</a></p>
                                            <p style="line-height:24px; margin:0px auto 20px;">The information you provide will be kept strictly confidential, and will only be used to improve our services standards. We value and appreciate your input. Thank you for your participation!</p>
                                            
                                            <p style="line-height:24px; margin:0px auto 0px;">Regards,</p>
                                            <p style="line-height:24px; margin:0px auto 30px; font-weight:600;">Verz Design</p>
                                            
                                            <p style="line-height:24px; margin:0px auto 20px; font-size:14px; color:#808080; font-weight:300; font-style:italic;">Please do not reply directly to this invitation, as any reply to this email account will not be received. Should you wish to speak to us, kindly contact our <span style="font-weight:500;">Hotline at 6841 1680.</span></p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top; height:37px; padding:0px; overflow:hidden;"><img src="{{ asset('images/footer.png') }}" alt="Verz Design" style="margin:0px; padding:0px; border:none;" /></td>
                        </tr>
                        <tr>
                            <td style="height:40px; overflow:hidden; vertical-align:top; padding:0px;"></td>
                        </tr>
					</table>
				<!--Table End-->
			</td>
		</tr>
	</table>
</body>
</html>