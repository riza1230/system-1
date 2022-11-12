<?php
	require_once __DIR__ . './../../includes/header.php';
	require_once __DIR__ . './../../controllers/mailer-register.php';

	// Check Internet Connection
	if (!$sock = @fsockopen('www.google.com',80,$errorNum,$errorMessage))
	{
		$netError = "<div class='alert alert-secondary p-1 text-center'>No internet connection. Email verification might not work.</div>";
		echo $netError;
	}
?>

<title>Register</title>

<!-- Form Layout -->
<div class="container vh-100 mt-3">
	<div class="row d-flex justify-content-center align-items-center h-100">
		<div class="col-md-6">
			<div class="card shadow">
				<div class="card-body p-5">
					<?php require_once __DIR__ . './register-form.php' ?>
				</div>
			</div>
		</div>
	</div>
</div>
