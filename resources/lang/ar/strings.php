<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'users' => [
                'delete_user_confirm' => 'هل أنت متأكد من رغبتك في حذف هذا المستخدم نهائياً؟ إذا إخترت المتابعة سيتم ظهور خطأ في أي مكان يتعلق برقم ID هذا المستخدم.تابع بحذر وعلى مسؤوليتك الكاملة. لايمكن إستعادة المستخدم مرة أخرى إذا إخترت المتابعة.',
                'if_confirmed_off' => '(إذا كان خيار التفعيل مفعلاً في الإعدادات)',
                'no_deactivated' => 'لا يوجد مستخدمين معطلين.',
                'no_deleted' => 'لا يوجد مستخدمين محذوفين.',
                'restore_user_confirm' => 'هل تريد استعادة هذا المستخدم إلى حالته الأصلية؟',
            ],
        ],

        'dashboard' => [
            'title' => 'لوحة تحكم الإدارة',
            'welcome' => 'أهلاً وسهلاً',
        ],

        'general' => [
            'all_rights_reserved' => 'جميع الحقوق محفوظة.',
            'are_you_sure' => 'هل أنت متأكد؟',
            'boilerplate_link' => 'GloablEyeT Solutions',
            'continue' => 'متابعة',
            'member_since' => 'عضو منذ',
            'minutes' => ' الدقائق',
            'search_placeholder' => 'بحث...',
            'timeout' => 'تم تسجيل خروجك تلقائيًا لأسباب تتعلق بالأمان حيث لم يكن لديك أي نشاط',

            'see_all' => [
                'messages' => 'رؤية جميع الرسائل',
                'notifications' => 'عرض الكل',
                'tasks' => 'عرض جميع المهمات',
            ],

            'status' => [
                'online' => 'موجود',
                'offline' => 'غير موجود',
            ],

            'you_have' => [
                'messages' => '{0} ليس لديك أي رسائل|{1} لديك رسالة واحدة|{2} لديك رسالتان|[3,10] لديك :number رسائل|[11,inf] لديك :number رسالة',
                'notifications' => '{0} ليس لديك أي إشعارات|{1} لديك إشعار واحد|{2} لديك إشعاران|[3,10] لديك :number إشعارات|[11,inf] لديك :number إشعاراً',
                'tasks' => '{0} ليس لديك أي مهمات|{1} لديك مهمة واحدة|{2} لديك مهمتان|[3,10] لديك :number مهمات|[11,inf] لديك :number مهمة',
            ],
        ],

        'search' => [
            'empty' => 'الرجاء إدخال مصطلح البحث.',
            'incomplete' => 'يجب عليك كتابة منطق البحث الخاص بك لهذا النظام.',
            'title' => 'نتائج البحث',
            'results' => 'نتائج البحث عن :query',
        ],

        'welcome' => 'مرحبًا بك في لوحة التحكم',
    ],

    'emails' => [
        'auth' => [
            'account_confirmed' => 'تم تأكيد حسابك.',
            'error' => 'عفوًا!',
            'greeting' => 'مرحبا!',
            'regards' => 'مع تحياتي,',
            'trouble_clicking_button' => 'إذا كنت تواجه مشكلة في النقر فوق ":action_text" الزر ، انسخ عنوان URL أدناه والصقه في متصفح الويب:',
            'thank_you_for_using_app' => 'شكرا لك على استخدام تطبيقنا!',

            'password_reset_subject' => 'رابط إعادة تعيين كلمة المرور',
            'password_cause_of_email' => 'أنت تتلقى هذا البريد الإلكتروني لأننا تلقينا طلب إعادة تعيين كلمة المرور لحسابك.',
            'password_if_not_requested' => 'إذا لم تطلب إعادة تعيين كلمة المرور ، فلا يلزم اتخاذ أي إجراء آخر.',
            'reset_password' => 'إضغط هنا لإعادة تعيين كلمة مرورك',

            'click_to_confirm' => 'إضغط هنا لتفعيل account:',
        ],

        'contact' => [
            'email_body_title' => 'لديك طلب نموذج اتصال جديد: فيما يلي التفاصيل:',
            'subject' => 'جديد :app_name تقديم نموذج الاتصال!',
        ],
    ],

    'frontend' => [
        'test' => 'تجربة',

        'tests' => [
            'based_on' => [
                'permission' => 'صلاحية بناء ًعلى - ',
                'role' => 'دور بناء ًعلى - ',
            ],

            'js_injected_from_controller' => 'Javascript Injected from a Controller',

            'using_blade_extensions' => 'Using Blade Extensions',

            'using_access_helper' => [
                'array_permissions' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does have to possess all.',
                'array_permissions_not' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does not have to possess all.',
                'array_roles' => 'Using Access Helper with Array of Role Names or ID\'s where the user does have to possess all.',
                'array_roles_not' => 'Using Access Helper with Array of Role Names or ID\'s where the user does not have to possess all.',
                'permission_id' => 'Using Access Helper with Permission ID',
                'permission_name' => 'Using Access Helper with Permission Name',
                'role_id' => 'Using Access Helper with Role ID',
                'role_name' => 'Using Access Helper with Role Name',
            ],

            'view_console_it_works' => 'View console, you should see \'it works!\' which is coming from FrontendController@index',
            'you_can_see_because' => 'أنت ترى هذا لأن لديك دور \':role\'!',
            'you_can_see_because_permission' => 'أنت ترى هذا لإن لديك صلاحية \':permission\'!',
        ],

        'general' => [
            'joined' => 'Joined',
        ],

        'user' => [
            'change_email_notice' => 'If you change your e-mail you will be logged out until you confirm your new e-mail address.',
            'email_changed_notice' => 'You must confirm your new e-mail address before you can log in again.',
            'profile_updated' => 'تم تحديث الملف الشخصي بنجاح.',
            'password_updated' => 'تم تحديث كلمة المرور بنجاح.',
        ],

        'welcome_to' => 'مرحبا بك في :place',
    ],
];
