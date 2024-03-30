<?php


  /*Essa requisição será necessária para trabalhar 
      com o authoload das classes e dos arquivos*/
  require '../vendor/autoload.php';
  class User
    {
        public function walk()
        {
            var_dump('walking');
        }
    }

    $user = new User;
    $user->walk();