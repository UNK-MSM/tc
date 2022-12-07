<html>
<head></head>
<body style="direction: rtl;">
<h1>لقد وصلت الرسالة التالية من نموذج طلب المساعدة في الموقع:</h1>
<table style="width: 50%">
	<tr>
		<td style="width: 40%; backgroud-color: #efefef">الاسم</td>
		<td>{{ $full_name }}</td>
	</tr>
	<tr>
		<td style="width: 40%; backgroud-color: #efefef">البريد</td>
		<td>{{ $email_address }}</td>
	</tr>
	<tr>
		<td style="width: 40%; backgroud-color: #efefef">مستخدم موجود</td>
		<td>{{ $previous_member }}</td>
	</tr>
	<tr>
		<td style="width: 40%; backgroud-color: #efefef">العنوان</td>
		<td>{{ $subject }}</td>
	</tr>
	<tr>
		<td style="width: 40%; backgroud-color: #efefef">النص</td>
		<td>{{ $body }}</td>
	</tr>
</table>
</body>
</html>