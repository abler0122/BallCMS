<?php

namespace  Modules\Member\Controllers;

/*
 * Class ResourceController
 *
 * ResourceController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\RESTful\ResourceController;

class BaseResourceController extends ResourceController
{
    /**
     * @var string Name of the model class managing this resource's data
     */
    protected $modelName = null;

    /**
     * @var \CodeIgniter\Model the model holding this resource's data
     */
    protected $model = null;

    /**
     * @var string the representation format to return resource data in (json/xml)
     */
    protected $format = 'json';

    /**
     * Constructor.
     */
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        //--------------------------------------------------------------------
        // Preload any models, libraries, etc, here.
        //--------------------------------------------------------------------
        // E.g.:
        // $this->session = \Config\Services::session();
    }
}
