<?php
/**
 * Created by PhpStorm.
 * User: juliuskoronci
 * Date: 29/06/2017
 * Time: 22:26
 */

namespace Igsem\AuthBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{

    /**
     * @Route("/api/login", name="api_login_check", methods={"POST"})
     * @SWG\Post(
     *     path="/api/login",
     *     description="Login to get a JWT token",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *     in="body",
     *     type="string",
     *     name="_username",
     *     required=true,
     *   ),
     *     @SWG\Parameter(
     *     in="body",
     *     type="string",
     *     name="_password",
     *     required=true,
     *   ),
     *     @SWG\Response(
     *         response=200,
     *         description="Dashboard overview."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */
    public function LoginAction()
    {
    }
}