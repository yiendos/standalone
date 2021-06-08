<?php
ini_set('error_reporting', E_ALL); //For development
//ini_set('error_reporting', E_ERROR | E_PARSE);  //For production

return [

    /* Site */
    'sitename'   => 'Example Site',
    'list_limit' => '20',

    /* Locale */
    'offset'     => 'UTC',
    'language'   => 'en-GB',

    /* Mail */
    'mailer'     => 'mail',
    'mailfrom'   => 'noreply@example.com',
    'fromname'   => 'Example Site',
    'sendmail'   => '/usr/sbin/sendmail',
    'smtpauth'   => '0',
    'smtpuser'   => '',
    'smtppass'   => '',
    'smtphost'   => 'localhost',
    'smtpsecure' => 'none',

    /* Cache */
    'caching'     => 0,
    'lifetime'    => '15',

    /* Debug */
    'debug'     => 1,
    'KOOWA_DEBUG' => 1
];