<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    // Setup form fields
    'setup' => [
        'email'            => 'Correu electrònic',
        'username'         => 'Nom de l\'usuari',
        'password'         => 'Contrasenya',
        'site_name'        => 'Nom del lloc',
        'site_domain'      => 'Domini del lloc',
        'site_timezone'    => 'Seleccionau la vostra zona horària',
        'site_locale'      => 'Seleccionau el vostre idioma',
        'enable_google2fa' => 'Habilita l\'autenticació en dos passos de Google',
        'cache_driver'     => 'Controlador de memòria cau',
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'Controlador de sessió',
        'mail_driver'      => 'Mail Driver',
        'mail_host'        => 'Mail Host',
        'mail_address'     => 'Mail From Address',
        'mail_username'    => 'Mail Username',
        'mail_password'    => 'Mail Password',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Usuari o correu electrònic',
        'email'         => 'Correu electrònic',
        'password'      => 'Contrasenya',
        '2fauth'        => 'Codi d\'autenticació',
        'invalid'       => 'El nom d\'usuari o contrasenya no és vàlid',
        'invalid-token' => 'Token invàlid',
        'cookies'       => 'Heu d\'habilitar les galetes (cookies) per poder iniciar sessió.',
        'rate-limit'    => 'Taxa límit excedida.',
        'remember_me'   => 'Recordar-me',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nom',
        'status'             => 'Estat',
        'component'          => 'Component',
        'component_status'   => 'Component Status',
        'message'            => 'Missatge',
        'message-help'       => 'També podeu fer servir Markdown.',
        'occurred_at'        => 'Quan va succeir aquest incident?',
        'notify_subscribers' => 'Notificar els subscriptors?',
        'notify_disabled'    => 'Due to scheduled maintenance, notifications about this incident or its components will be suppressed.',
        'visibility'         => 'Visibilitat de l\'incident',
        'stick_status'       => 'Fixar incident',
        'stickied'           => 'Fixats',
        'not_stickied'       => 'No fixats',
        'public'             => 'Visible pel públic',
        'logged_in_only'     => 'Visible només per a usuaris registrats',
        'templates'          => [
            'name'     => 'Nom',
            'template' => 'Plantilla',
            'twig'     => 'Les plantilles d\'incidents poden fer ús del llenguatge de plantilles <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    'schedules' => [
        'name'         => 'Nom',
        'status'       => 'Estat',
        'message'      => 'Missatge',
        'message-help' => 'També podeu fer servir Markdown.',
        'scheduled_at' => 'Per quan està programat aquest manteniment?',
        'completed_at' => 'Quan s\'ha completat aquest manteniment?',
        'templates'    => [
            'name'     => 'Nom',
            'template' => 'Plantilla',
            'twig'     => 'Les plantilles d\'incidents poden fer ús del llenguatge de plantilles <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nom',
        'status'      => 'Estat',
        'group'       => 'Grup',
        'description' => 'Descripció',
        'link'        => 'Enllaç',
        'tags'        => 'Etiquetes',
        'tags-help'   => 'Separat per comes.',
        'enabled'     => 'Component habilitat?',

        'groups' => [
            'name'                     => 'Nom',
            'collapsing'               => 'Desplega/redueix opcions',
            'visible'                  => 'Sempre ampliat',
            'collapsed'                => 'Per defecte redueix el grup',
            'collapsed_incident'       => 'Per defecte redueix el grup, però amplia\'l si hi ha problemes',
            'visibility'               => 'Visibilitat',
            'visibility_public'        => 'Visible al públic',
            'visibility_authenticated' => 'Visible només per a usuaris registrats',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Nom',
        'description'        => 'Descripció',
        'start_at'           => 'Hora d\'inici de l\'horari',
        'timezone'           => 'Fus horari',
        'schedule_frequency' => 'Freqüència de l\'horari (en segons)',
        'completion_latency' => 'Latència de finalització (en segons)',
        'group'              => 'Grup',
        'active'             => 'Actiu?',
        'groups'             => [
            'name' => 'Nom del grup',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'Nom',
        'suffix'                   => 'Sufix',
        'description'              => 'Descripció',
        'description-help'         => 'També podeu fer servir Markdown.',
        'display-chart'            => 'Mostrar gràfica a la pàgina d\'estat?',
        'default-value'            => 'Valor per defecte',
        'calc_type'                => 'Càlcul d\'indicadors',
        'type_sum'                 => 'Suma',
        'type_avg'                 => 'Mitjana',
        'places'                   => 'Nombre de decimals',
        'default_view'             => 'Vista per defecte',
        'threshold'                => 'Quants minuts de llindar entre punts mètrics?',
        'visibility'               => 'Visibilitat',
        'visibility_authenticated' => 'Visible per als usuaris autenticats',
        'visibility_public'        => 'Visible per a tothom',
        'visibility_hidden'        => 'Sempre amagat',

        'points' => [
            'value' => 'Valor',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => 'Nom del lloc',
            'site-url'                              => 'URL del lloc',
            'display-graphs'                        => 'Mostrar gràfics a la pàgina d\'estat?',
            'about-this-page'                       => 'Sobre aquest lloc',
            'days-of-incidents'                     => 'Quants de dies d\'incidents voleu veure?',
            'time_before_refresh'                   => 'Status page refresh rate (in seconds).',
            'banner'                                => 'Imatge del banner',
            'banner-help'                           => "Es recomana que no carregueu arxius més grans de 930 píxels d'ample.",
            'subscribers'                           => 'Permetre el registre per a notificacions per correu electrònic?',
            'suppress_notifications_in_maintenance' => 'Suppress notifications when incident occurs during maintenance period?',
            'skip_subscriber_verification'          => 'Omet verificació d\'usuaris? (S\'adverteix que podries rebre correu brossa)',
            'automatic_localization'                => 'Localitza automàticament la pàgina d\'estat a la llengua dels seus visitants?',
            'enable_external_dependencies'          => 'Habilitar dependències de tercers (Fonts de Google, Seguiments, etc...)',
            'show_timezone'                         => 'Mostra el fus horari propi de la pàgina d\'estat.',
            'only_disrupted_days'                   => 'Mostrar només els dies que contenen incidències a la línia de temps?',
        ],
        'analytics' => [
            'analytics_google'       => 'Codi de Google Analytics',
            'analytics_gosquared'    => 'Codi de GoSquared Analytics',
            'analytics_piwik_url'    => 'URL de la seva instància Piwik (sense http(s)://)',
            'analytics_piwik_siteid' => 'Identificador de lloc del Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'Seleccioneu el fus horari',
            'site-locale'          => 'Idioma del lloc',
            'date-format'          => 'Format de la data',
            'incident-date-format' => 'Format del fus horari dels incidents',
        ],
        'security' => [
            'allowed-domains'      => 'Dominis permesos',
            'allowed-domains-help' => 'Separats per comes. El domini especificat a dalt és automàticament permès per defecte.',
        ],
        'stylesheet' => [
            'custom-css' => 'Full d\'estils personalitzats',
        ],
        'theme' => [
            'background-color'        => 'Color de fons',
            'background-fills'        => 'Elements del fons (components, incidents, peu de pàgina)',
            'banner-background-color' => 'Color de fons del banner',
            'banner-padding'          => 'Farciment (padding) del banner',
            'fullwidth-banner'        => 'Habilitar la màxima amplada del banner?',
            'text-color'              => 'Color del text',
            'dashboard-login'         => 'Mostrar el botó del dashboard al peu de pàgina?',
            'reds'                    => 'Vermell (utilitzat per trobar errors)',
            'blues'                   => 'Blau (usat per informació)',
            'greens'                  => 'Verd (utilitzat per l\'èxit)',
            'yellows'                 => 'Groc (utilitzat per alertes)',
            'oranges'                 => 'Taronja (utilitzat per a avisos)',
            'metrics'                 => 'Omplir les mètriques',
            'links'                   => 'Enllaços',
        ],
    ],

    'user' => [
        'username'       => 'Nom de l\'usuari',
        'email'          => 'Correu electrònic',
        'password'       => 'Contrasenya',
        'api-token'      => 'Token de l\'API',
        'api-token-help' => 'Regenerar el seu token de l\'API evitarà a les aplicacions existents accedir al Cachet.',
        'gravatar'       => 'Canviau la vostra imatge de perfil a Gravatar.',
        'user_level'     => 'Nivell d\'usuari',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'Usuari',
        ],
        '2fa' => [
            'help' => 'Habilitar l\'autenticació de dos factor augmenta la seguretat del compte. Necessitareu descarregar <a href="https://support.google.com/accounts/answer/1066447?hl=en"> Google Authenticator</a> o un app similar al vostre dispositiu mòbil. Quan us identifiqueu haureu de proporcionar el token generat per l\'app.',
        ],
        'team' => [
            'description' => 'Convidau els membres del vostre d\'equip introduint les seves adreces de correu electrònic aquí.',
            'email'       => 'Adreça electrònica #:id',
        ],
    ],

    'general' => [
        'timezone' => 'Seleccioneu el fus horari',
    ],

    // Buttons
    'add'            => 'Afegeix',
    'save'           => 'Desar',
    'update'         => 'Actualitzar',
    'create'         => 'Crear',
    'edit'           => 'Editar',
    'delete'         => 'Eliminar',
    'submit'         => 'Enviar',
    'cancel'         => 'Cancel·lar',
    'remove'         => 'Treure',
    'invite'         => 'Convidar',
    'signup'         => 'Crea un compte',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* Opcional',
];
