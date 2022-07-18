<?php


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\GeneralSetting;

if (! function_exists('fromSettings')) {
    function fromSettings(string $key, $alternative = null)
    {
        return GeneralSetting::where('key', $key)->first()->value ?? $alternative;
    }
}

if (! function_exists('setSettings')) {
    function setSettings(string $key, string $value)
    {
        GeneralSetting::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
        return true;
    }
}

if (! function_exists('getuser')) {
    function getuser()
    {
        return Auth::user();
    }
}

if (! function_exists('getFullName')) {
    function getFullName()
    {
        $user = Auth::user();
        return $user->first_name.' '.$user->last_name;
    }
}
if (! function_exists('getFullNameById')) {
    function getFullNameById($id)
    {
        $user = User::find($id);
        return $user->first_name.' '.$user->last_name;
    }
}
if (! function_exists('getUserStatus')) {
    function getUserStatus($id)
    {
        $user = User::find($id);
        if ($user->status==1) {
            return 'Active';
        } else {
            return 'In Active';
        }
    }
}
// make a function that will print 15 char random string 
if (! function_exists('getRandomString')) {
    function getRandomString($length = 15)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

if (! function_exists('generateAlphaNumeric')) {
    function generateAlphaNumeric($length = 3)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $random1 = rand(100, 999);
        $random2 = rand(100, 999);

        $alphanumeric = $randomString.$random1.$random2;
        return $alphanumeric;
    }
}
if (! function_exists('generateAlpha')) {
    function generateAlpha($length = 5)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        // $random1 = rand(100, 999);
        // $random2 = rand(100, 999);

        $alphanumeric = $randomString;
        return $alphanumeric;
    }
}
if (! function_exists('generateNumeric')) {
    function generateNumeric()
    {
        $random1 = rand(100, 999);
        $random2 = rand(100, 999);
        $random3 = rand(100, 999);
 

        $alphanumeric = $random1.$random2.$random3;
        return $alphanumeric;
    }
}
if (! function_exists('generateNumericSix')) {
    function generateNumericSix()
    {
        $random1 = rand(10, 99);
        $random2 = rand(10, 99);
        $random3 = rand(10, 99);


        $alphanumeric = $random1.$random2.$random3;
        return $alphanumeric;
    }
}

if (! function_exists('getStatus')) {
    function getStatus($num)
    {
        if ($num==1) {
            return 'Active';
        } elseif ($num==0) {
            return 'In Active';
        } else {
            return 'Contact Support';
        }
    }
}