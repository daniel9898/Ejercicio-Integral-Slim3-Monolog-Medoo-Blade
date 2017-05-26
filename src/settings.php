<?php //Configuracion para poder ver los detalles de los errores
return [ 
       
      'settings'=>[

         'displayErrorDetails'=>true,
         'logger'=>[
              'name'=>'slim-app',
              'path'=>'../logs/app.log',
            ],
          'renderer'=>[
              'template_path'=>'../templates/',
              'cache_path'=>'../cacheBlade/'
           ]
         ],
         'db'=>[
            'database_type'=>'mysql',
            'database_name'=>'slim3',
            'server'=>'localhost',
            'username'=>'root',
            'password'=>'',
            'charset'=>'utf8',
         ],
];

?>