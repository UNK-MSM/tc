لقد قمت بطلب رابط استعادة كلمة المرور، لاستعادة كلمة المرور يرجى النقر هنا: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>