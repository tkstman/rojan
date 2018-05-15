<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    // use Illuminate\Contracts\Auth\Authenticatable;
    use Notifiable;

    protected $primaryKey = 'user_id';
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function products()
    {
      return $this->hasMany('App\Product','audit_user','prod_id');
      //https://laravel.com/docs/5.6/eloquent-relationships
      //http://laraveldaily.com/pivot-tables-and-many-to-many-relationships/
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role','user_role','user_id','role_id');
    }

    public static function reserved_ip($ip)
    {
        $reserved_ips = array( // not an exhaustive list
        '167772160'  => 184549375,  /*    10.0.0.0 -  10.255.255.255 */
        '3232235520' => 3232301055, /* 192.168.0.0 - 192.168.255.255 */
        '2130706432' => 2147483647, /*   127.0.0.0 - 127.255.255.255 */
        '2851995648' => 2852061183, /* 169.254.0.0 - 169.254.255.255 */
        '2886729728' => 2887778303, /*  172.16.0.0 -  172.31.255.255 */
        '3758096384' => 4026531839, /*   224.0.0.0 - 239.255.255.255 */
        );

        $ip_long = sprintf('%u', ip2long($ip));

        foreach ($reserved_ips as $ip_start => $ip_end)
        {
            if (($ip_long >= $ip_start) && ($ip_long <= $ip_end))
            {
              echo "True " . $ip;
                //return TRUE;
            }
        }
        echo "false " . $ip;
        //return FALSE;
    }

    //var_dump(reserved_ip('127.0.0.1')); // reserved (localhost)
    //var_dump(reserved_ip('74.125.140.101')); // not reserved (Google)
}
