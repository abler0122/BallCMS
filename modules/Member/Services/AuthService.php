<?php

namespace Modules\Member\Services;

use CodeIgniter\Config\BaseService;
use CodeIgniter\Config\Services;

class AuthService extends BaseService
{
    public static function login()
    {

    }

    public static function user()
    {

    }

    public static function check()
    {
        return Services::session()->has('user');
    }
}
