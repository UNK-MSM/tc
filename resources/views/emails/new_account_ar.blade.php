<html>
<head></head>
<body style="direction: rtl;">
<h1>مرحباً بك في TrendCast</h1>
<p>تم تسجيل اشتراكك بنجاح لدينا، بالتفاصيل التالية:</p>
<table>
	<tr>
		<td>اسم مستخدم</td>
		<td>{{ $username }}</td>
	</tr>
	<tr>
		<td>كلمة المرور</td>
		<td>{{ $password }}</td>
	</tr>
</table>
<p>قبل أن تتمكن من استخدام حسابك يتوجب عليك تفعيل حسابك من خلال هذا الرابط:<br /><br /><a href="{{ asset('') }}activate?token={{ $token }}">{{ asset('') }}activate?token={{ $token }}</a><br /></p>
</body>
</html>