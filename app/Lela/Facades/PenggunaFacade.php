<?php namespace Lela\Facades;

use Illuminate\Support\Facades\Facade;

class PenggunaFacade extends Facade {

  protected static function getFacadeAccessor()
  {
    return 'pengguna';
  }

}