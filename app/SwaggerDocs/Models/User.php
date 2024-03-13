<?php

namespace App\SwaggerDocs\Models;
/**
 * Class User
 *
 * @OA\Schema(
 *     description="User model"
 * )
 */

class User
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID of the User",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *      title="Name",
     *      description="Name of the User",
     *      example="Gloves"
     * )
     *
     * @var string
     */
    public $name;
    /**
     * @OA\Property(
     *      title="Email",
     *      description="Name of the User",
     *      example="gloves@gloves.com"
     * )
     *
     * @var string
     */
    public $email;

    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Created at",
     *     example="2024-02-29T09:55:47.000000Z",
     *     format="datetime",
     *     type="string"
     * )
     *
     */
    private string $created_at;

    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Updated at",
     *     example="2024-02-29T09:55:47.000000Z",
     *     format="datetime",
     *     type="string"
     * )
     *
     */
    private string $updated_at;
}
