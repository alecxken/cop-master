
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
	<h1>Dear {{ $user->name }},</h1>

	<p>Thanks for registering on ecp .Please click on the following link to confirm / activate your 

	   ecp account ,Proceed to login into your account.

	   Thank you !!! 

	  Regards ,

	  ecp Team

	<a href="{{ url('register/verify',$user->token) }}">activate account</a>

	Email : contact@ecp.co.ke

	</p>
</body>