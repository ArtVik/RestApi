<?php
/**
 * Created by PhpStorm.
 * User: fullcontroll
 * Date: 17.6.19
 * Time: 08.43
 */

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\Annotations;


/**
 * Class RestLoginController
 * @package AppBundle\Controller
 * @RouteResource("login", pluralize=false)
 */
class RestLoginController extends FOSRestController implements ClassResourceInterface
{
    public function postAction()
    {
        throw new \DomainException('Should never see this error');
    }
}