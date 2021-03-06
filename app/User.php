<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

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
        $client = new Client(); //GuzzleHttp\Client
        $result = $client->post('http://spider.nitt.edu/~vishnu/auth.php', [
            'body' => [
            'rollno' => $rollno,
            'password' => $password
          ],
          'connect_timeout' => 20
        ]);
        return $result->getBody()->getContents();
    }

    public static function getUser($username) {
      return User::select('*')->where('username', $username)->first();
    }

    public function verifyPassword($password) {
      return sha1($password.$this->created_at) == $this->password;
    }
}
