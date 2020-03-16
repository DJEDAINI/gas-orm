<?php

$lang['db_connection_error']       = 'يتعذر الاتصال بقاعدة البيانات مع مجموعة الاتصال هذه أو سلسلة dsn: %s';
$lang['models_not_found']          = 'غير قادر على تحديد مسار Model الذي حددته: %s';
$lang['models_found_no_relations'] = 'Model %s موجود ، لكنه يفتقد خصائص العلاقة.';
$lang['extensions_not_found']      = 'تعذر تحديد مسار الملحقات التي حددتها: %s';
$lang['empty_arguments']           = 'لا يمكن متابعة تنفيذ %s بدون أي متغير تم تمريره.';
$lang['cannot_create_model']       = 'يتعذر على ORM Gas إنشاء ملف (Models) على: %s ';
$lang['cannot_create_migration']   = 'يتعذر على ORM Gas إنشاء ملف (ملفات) الترحيل على: %s ';
$lang['migration_no_setting']      = 'تم إيقاف الترحيل التلقائي ل Gas ORM ، لأنه لم يتم العثور على أي إعدادات.';
$lang['migration_no_dir']          = 'تم إيقاف الترحيل التلقائي ل Gas ORM ، لأنه لم يتم العثور على المجلد المطلوب.';
$lang['migration_no_initial']      = 'تم إيقاف الترحيل التلقائي ل Gas ORM ، لأن إصدار الترحيل أعلى من \'0\'.';
$lang['migration_disabled']        = 'تم إيقاف الترحيل التلقائي ل Gas ORM ، بسبب تعطل مكتبة الترحيل.';
$lang['both_auto_error']           = 'يتعذر على ORM Gas تنفيذ كل من الجداول والنماذج التي تم إنشاؤها تلقائيًا في نفس الوقت ،'
                                    .' الرجاء تعطيل واحد منهم.';

$lang['auto_check']                = 'الحقل %s حقل غير صالح للإدراج التلقائي.';
$lang['char_check']                = 'الحقل %s حقل char غير صالح.';
$lang['date_check']                = 'الحقل %s حقل وقت غير صالح.';
