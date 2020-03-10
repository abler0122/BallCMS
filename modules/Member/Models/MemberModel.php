<?php

namespace Modules\Member\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table         = 'members';
    protected $allowedFields = [
        'name', 'email', 'password'
    ];
    protected $returnType    = 'App\Entities\Member';
    protected $useTimestamps = true;
}
