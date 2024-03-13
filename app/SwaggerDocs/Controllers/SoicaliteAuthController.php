<?php

namespace App\SwaggerDocs\Controllers;

use App\Http\Controllers\Controller;

abstract class SoicaliteAuthController extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/social-auth/{facebook||google||twitter}/redirect-url",
    *     summary="Get social provider redirect url",
    *     @OA\Response(
    *       response="200",
    *       description="Social provider redirect url",
    *       @OA\JsonContent(
    *          type="string",
    *          default="https://accounts.google.com/o/oauth2/auth?client_id=458839291603-q6plji6916r260aqfhcoj0dv3m6ds2ho.apps.googleusercontent.com&redirect_uri=http%3A%2F%2F127.0.0.1%3A8000%2Fsocial-auth%2Fgoogle%2Fcallback&scope=openid+profile+email&response_type=code",
    *       )
    *     ),
    *     @OA\Response(response="422", description="Validation errors"),
    * )
    */
    abstract public function redirectUrl(string $driver);

    /**
    * @OA\Get(
    *     path="/api/social-auth/{facebook||google||twitter}/callback",
    *     summary="After sign in successfully with social provider it will redirect you to this url which will return the user and token",
    *     @OA\Response(
    *       response="200",
    *       description="Correct Credentials to log in",
    *       @OA\JsonContent(
    *          type="object",
    *          @OA\Property(
    *            type="string",
    *            default="2|YK3g5VEgtGzNFwStx58axySIJISzX8GOX2edeh6Zb19b3fe7",
    *            description="token",
    *            property="token"
    *          ),
    *          @OA\Property(
    *            property="user",
    *             ref="#/components/schemas/User"
    *          )
    *       )
    *     ),
    *     @OA\Response(response="422", description="Validation errors"),
    * )
    */
    abstract public function callback(string $driver);
}
