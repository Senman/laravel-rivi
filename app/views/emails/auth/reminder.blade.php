<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>{{ trans('messages.password.reset') }}</h2>

		<div>
            {{ trans('messages.password.reset.complete.form') }} {{ URL::to('password/reset', array($token)) }}.
		</div>
	</body>
</html>
