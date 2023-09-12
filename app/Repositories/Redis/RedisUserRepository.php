<?php
namespace App\Repositories\Redis;

use App\Repositories\Contracts\UserRepositoryInterface;

class RedisUserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return 'Get all user from redis';
    }

    public function find($id)
    {
        return sprintf("Get single user by id: %s",$id);
    }
}
