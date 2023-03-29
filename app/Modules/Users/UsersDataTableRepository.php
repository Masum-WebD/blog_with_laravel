<?php
declare(strict_types=1);
namespace App\Modules\Users;

class UsersDataTableRepository
{
    protected string $table="users";
    protected array $orderColumns=[
        "users.id",
        "users.name",
        "users.email",

    ];
    protected array $searchColumns=[
        "users.name",
        "users.email",
    ];
    protected array $selectColumns=[
        "users.id",
        "users.name",
        "users.email",
    ];
    protected string $joinQuery="";
    protected string $where="users.id > 0";

    public function index (
        array $columns,
        int $start,
        int $length,
        array $order,
        array $search

    ): array
    {
        return [ ];
    }
}
