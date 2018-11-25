<?php
/**
 * Created by PhpStorm.
 * User: dadeng
 * Date: 2018/11/25
 * Time: 下午1:57
 */

class AuthenticationFactory
{
    public function getUnlockMethod($method)
    {
        switch ($method) {
            case 'fingerprint':
                return new HuaWeiFingerprintUnlock();
            case 'faceid':
                return new HuaWeiFaceIdUnlock();
            case 'passcode':
                return new HuaWeiPassCodeUnlock();
        }
        return true;
    }
}