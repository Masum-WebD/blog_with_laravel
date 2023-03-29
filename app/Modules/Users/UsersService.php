<?php
declare(strict_types=1);
namespace App\Modules\Users;

class UsersService
{
    public function __construct(
        private readonly UsersDataTableRepository $datatableRepository
    )
    {

    }
    public function index(array $data):array
    {
        return  $this ->datatableRepository->index(
            $data["columns"],
            $data["start"],
            $data["length"],
            $data["order"],
            $data["earch"]
        );
        return [];
    }
}
