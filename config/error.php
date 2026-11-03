<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Error Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور error — همهٔ کلیدهای مستندشده در `docs/03-engines/error.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/error.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('ERROR_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('ERROR_PREFIX', 'error:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('ERROR_LOG_CHANNEL', 'error'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];