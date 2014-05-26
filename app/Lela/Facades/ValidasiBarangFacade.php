<?php namespace Lela\Facades;

use Illuminate\Support\Facades\Facade;

class ValidasiBarangFacade extends Facade {

  protected static function getFacadeAccessor()
  {
    return 'validasi_barang';
  }

}