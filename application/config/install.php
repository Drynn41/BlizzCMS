<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Installation active
|--------------------------------------------------------------------------
|
| Config directly related to the status of the CMS installation.
|
*/
$config['installation_active'] = filter_var(getenv('BLIZZ_CMS_INSTALL') ?: true, FILTER_VALIDATE_BOOLEAN);
