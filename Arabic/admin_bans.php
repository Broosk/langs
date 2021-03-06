<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'			      =>	'لا يوجد مستخدم مسجل بهذا الاسم. إذا أردت أن تطرد أحد لا يتبع لاسم مستخدم، فقط اترك اسم المستخدم فارغاً.',
'No user ID message'		    =>	'لا يوجد مستخدم له هذا المعرف ID.',
'User is admin message'	  	=>	'المستخدم %s مدير منتدى لا يمكنك طرده. إذا أردت أن تطرد مدير يجب تغيير وضعه إلى مستخدم.',
'User is mod message'		    =>	'المستخدم %s مشرف منتدى لا يمكنك طرده. إذا أردت أن تطرد مشرف يجب تغيير وضعه إلى مستخدم.',
'Must enter message'		    =>	'يجب أن تدخل على الأقل اسم مستخدم أو عنوان IP أو عنوان بريدي.',
'Cannot ban guest message'	=>	'لا يمكن طرد زائر.',
'Invalid IP message'		    =>	'أدخلت عنوان IP أو مجال IP خاطىء.',
'Invalid e-mail message'	  =>	'العنوان البريدي (مثال: user@domain.com) أو جزء النطاق للعنوان البريدي (مثال: domain.com) أما ما أدخلته أنت ليس عنواناً بريدياً.',
'Invalid date message'		=>	'قمت بإدخال تاريخ انتهاء خاطىء.',
'Invalid date reasons'		=>	'صيغة التاريخ YYYY-MM-DD و يجب أن يكون يوما للأمام من التاريخ الحالي على الأقل.',
'Ban added redirect'		=>	'تم إضافة الطرد. توجيه …' ,
'Ban edited redirect'		=>	'تم تعديل الطرد. توجيه …',
'Ban removed redirect'		=>	'تم إزالة الطرد. توجيه …',

'New ban head'				=>	'طرد جديد',
'Add ban subhead'			=>	'طرد مستخدم',
'Username label'			=>	'اسم المستخدم',
'Username help'				=>	'اسم المستخدم المطرود (حساس لحالة الأحرف).',
'Username advanced help'	=>	'اسم المستخدم ليتم طرده من المنتدى (حساس لحالة الأحرف). الصفحة التالية سوف تمكنك من ادخال عنوان الشبكة IP و العنوان البريدي. إذا أردت أن تدخل فقط مجال لعنوان شبكة أو عنوان بريدي أترك هذا الحقل فارغا.',

'Ban search head'			=>	'بحث عن المطرودين',
'Ban search subhead'		=>	'أدخل شروط البحث',
'Ban search info'			=>	'ابحث عن المطرودين في قاعدة البيانات. أدخل شرط أو أكثر للبحث. يمكنك استخدام أحرف التجاوز  (*) في شروط البحث.',
'Date help'					=>	'(yyyy-mm-dd)',
'Message label'				=>	'الرسالة',
'Expire after label'		=>	'بعد تاريخ الانتهاء',
'Expire before label'		=>	'قبل تاريخ الانتهاء',
'Order by label'			=>	'ترتيب حسب',
'Order by username'			=>	'اسم المستخدم',
'Order by ip'				=>	'IP',
'Order by e-mail'			=>	'البريد',
'Order by expire'			=>	'تاريخ الانتهاء',
'Ascending'					=>	'تصاعدياً',
'Descending'				=>	'تنازلياً',
'Submit search'				=>	'أرسل البحث',

'E-mail label'				=>	'البريد',
'E-mail help'				=>	'أدخل العنوان البريدي أو نطاق العنوان البريدي لطرده (مثال: someone@somewhere.com أو somewhere.com) أنظر "السماح بالطرد بواسطة العنوان البريدي" في الصلاحيات من أجل معلومات أكثر.',
'IP label'					=>	'عنوان IP/مجال IP',
'IP help'					=>	'عنوان الشبكة IP أو مجال عنواين لطرده (مثال: 150.11.110.1 أو 150.11.110). افصل العناوين بواسطة الفراغ. إذا كان العنوان مذكور مسبقا فهو من آخر عنوان في قاعدة البيانات لهذا المستخدم.',
'IP help link'				=>	'أنقر %s لتشاهد احصائيات الـ IP لهذا المستخدم.',
'Reason label'				=>	'السبب',
'Banned by label'			=>	'طرد من',
'Ban advanced head'			=>	'إعدادات الطرد المتقدمة',
'Ban advanced subhead'		=>	'تزويد معلومات الطرد الـ IP و العنوان البريدي',
'Ban message label'			=>	'رسالة الطرد',
'Ban message help'			=>	'رسالة الطرد تظهر للمستخدم عندما يحاول زيارة المنتدى.',
'Message expiry subhead'	=>	'رسالة الطرد و تاريخ الانتهاء',
'Ban IP range info'			=>	'يجب أن تكون حذرا عندما تدخل مجال IP لأن ذلك سوف يطرد عدة مستخدمين ينتمون لهذا العنوان الجزئي للـ IP.',
'Expire date label'			=>	'تاريخ الانتهاء',
'Expire date help'			=>	'سوف يحذف الطرد تلقائياً عند تاريخ الانتهاء (التنسيق: yyyy-mm-dd). يجب عليك حذفه يدويا ًإذا تركته فارغا.',

'Results head'				=>	'نتائج البحث',
'Results username head'		=>	'اسم المستخدم',
'Results e-mail head'		=>	'البريد',
'Results IP address head'	=>	'IP/مجال IP',
'Results expire head'		=>	'الانتهاء',
'Results message head'		=>	'الرسالة',
'Results banned by head'	=>	'طرد من',
'Results actions head'		=>	'أوامر',
'No match'					=>	'لا يوجد تطابق',
'Unknown'					=>	'مجهول',

);
