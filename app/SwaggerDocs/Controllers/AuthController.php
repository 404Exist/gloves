<?php

namespace App\SwaggerDocs\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignUpRequest;
use Illuminate\Http\Request;

abstract class AuthController extends Controller
{
    /**
    * @OA\Post(
        *     path="/api/signup",
        *     summary="Register a new user",
        *     @OA\Parameter(
        *         name="name",
        *         in="query",
        *         description="User's name",
        *         required=true,
        *         @OA\Schema(type="string")
        *     ),
        *     @OA\Parameter(
        *         name="email",
        *         in="query",
        *         description="User's email",
        *         required=true,
        *         @OA\Schema(type="string"),
        *     ),
        *     @OA\Parameter(
        *         name="password",
        *         in="query",
        *         description="User's password",
        *         required=true,
        *         @OA\Schema(type="string")
        *     ),
        *     @OA\Parameter(
        *         name="password_confirmation",
        *         in="query",
        *         description="User's password confirm",
        *         required=true,
        *         @OA\Schema(type="string")
        *     ),
        *     @OA\Response(
        *       response="200",
        *       description="User registered successfully",
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
        *     @OA\Response(response="422", description="Validation errors")
        * )
        */
    abstract public function signUp(SignUpRequest $request);

    /**
    * @OA\Post(
        *     path="/api/login",
        *     summary="Login",
        *     @OA\Parameter(
        *         name="email",
        *         in="query",
        *         description="User's email",
        *         required=true,
        *         @OA\Schema(type="string"),
        *     ),
        *     @OA\Parameter(
        *         name="password",
        *         in="query",
        *         description="User's password",
        *         required=true,
        *         @OA\Schema(type="string")
        *     ),
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
        *       @OA\Response(response="422", description="Validation errors")
        * )
        */
    abstract public function login(LoginRequest $request);

    /**
        * @OA\Post(
        *     path="/api/logout",
        *     summary="Remove User Tokens",
        *     @OA\Parameter(
        *         name="Authorization",
        *         in="header",
        *         required=true,
        *         description="Bearer 2|YK3g5VEgtGzNFwStx58axySIJISzX8GOX2edeh6Zb19b3fe7"
        *     ),
        *     @OA\Response(response="200", description="User tokens deleted successfully"),
        *     @OA\Response(response="422", description="Validation errors"),
        * )
    */
    abstract public function logout(Request $request);

    /**
    * @OA\Get(
    *     path="/api/user",
    *     summary="Get current user",
    *     @OA\Parameter(
    *         name="Authorization",
    *         in="header",
    *         required=true,
    *         description="Bearer 2|YK3g5VEgtGzNFwStx58axySIJISzX8GOX2edeh6Zb19b3fe7"
    *     ),
    *     @OA\Response(
    *       response="200",
    *       description="Current user",
    *       @OA\JsonContent(
    *          type="object",
    *          ref="#/components/schemas/User"
    *       )
    *     ),
    *     @OA\Response(response="422", description="Validation errors"),
    * )
    */
    abstract public function user(Request $request);
}
