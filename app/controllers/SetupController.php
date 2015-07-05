<?php

class SetupController extends BaseController {

  public function migrate(){
    Artisan::call('migrate', ['--force'=>true]);
  }
}
