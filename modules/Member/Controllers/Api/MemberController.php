<?php namespace  Modules\Member\Controllers\Api;

use Modules\Member\Controllers\BaseResourceController;

class MemberController extends BaseResourceController
{
	protected $modelName = 'Modules\Member\Models\MemberModel';
    protected $format = 'json';

    public function index()
    {
        return $this->respond(['test' => '1']);
    }
}
