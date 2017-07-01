<?php
/**
 * Created by PhpStorm.
 * User: juliuskoronci
 * Date: 29/06/2017
 * Time: 22:26
 */

namespace Igsem\AuthBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Swagger\Annotations as SWG;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class LoginController
 *
 * Required for LexikJWTAuth and Swagger
 *
 * @package Igsem\AuthBundle\Controller
 */
class LoginController extends Controller
{

    /**
     * @Route("/api/login", name="api_login_check", methods={"POST"})
     * @SWG\Post(
     *     path="/api/login",
     *     description="Login to get a JWT token",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *          in="formData",
     *          name="_username",
     *          description="login name or email",
     *          required=true,
     *          type="string",
     *          @SWG\Schema(type="string"),
     *   ),
     *     @SWG\Parameter(
     *          in="formData",
     *          name="_password",
     *          description="password",
     *          required=true,
     *          type="string",
     *          @SWG\Schema(type="string"),
     *   ),
     *     @SWG\Response(
     *         response=200,
     *         description="JWT Token ",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(property="token", type="string"),
     *         )
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