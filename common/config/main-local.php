<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=projectyii',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'transport' => [

                'class' => 'Swift_SmtpTransport',

                'host' => 'smtp.gmail.com',

                'username' => 'radhikarani@mansainfotech.com',

                'password' => '11111111',

                'port' => '465', 

                'encryption' => 'ssl', //depends if you need it

            ],
            'useFileTransport' => true,
        ],
        /*'mailer' => [
                'class' => 'yii\swiftmailer\Mailer',
                'viewPath' => '@common/mail',
                'transport' => [
                    'class' => 'Swift_MailTransport',
                ],
                'useFileTransport' => false,
            ],*/
     
        
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            // Disable index.php
            'showScriptName' => false,
            // Disable r= routes
            'enablePrettyUrl' => true,
            'rules' => [
               '<action:(.*)>' => 'site/<action>',
            ],
        ],
        'urlManagerFrontEnd' => [

            'class' => 'yii\web\urlManager',

            'baseUrl' => '/frontend/web',

            'enablePrettyUrl' => true,

            'showScriptName' => false,

            'rules' => [

            ],

        ],
          'urlManagerBackend' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/admin',
            'scriptUrl'=>'/backend/web/index.php',
            'enablePrettyUrl' => false,
            'showScriptName' => true,
     ],
    ],
];
