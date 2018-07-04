<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';//设置表名
    protected $primaryKey = 'user_id';//设置主键
    public $timestamps = false;//把update_at更新时间戳禁用掉
}
