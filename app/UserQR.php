<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class UserQR extends Model{
    public $timestamps = false;
    protected $fileable = [
        'username',
        'password,',
        'fullname',
        'gender',
        // 'address',
        // 'dateOfBirth',
        // 'avatarImg',
        // 'qrCodeImg',
        // 'phoneNumber',
        'email',
        'idRole'
    ];

    protected $primaryKey = 'username';
    protected $table = 'users';
}