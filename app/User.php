<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    protected $table = "users";

    public static function AuthenticateStudent($rollno, $password){
        $imap_token =
            @\imap_open(
                "{vayu.nitt.edu:993/imap/ssl/novalidate-cert}",
                $rollno,
                $password,
                0, 1
            );
        if ($imap_token != false) {
            return 1;
        }
        return 0;
    }

    public static function getUser($username) {
      return User::select('*')->where('username', $username)->first();
    }

    public function verifyPassword($password) {
      return sha1($password.$this->created_at) == $this->password;
    }
}
