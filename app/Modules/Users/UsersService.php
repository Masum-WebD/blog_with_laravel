<?php

declare(strict_types=1);

namespace App\Modules\Users;

class UsersService
{
    public function __construct(
        private readonly UsersDataTableRepository $datatableRepository
    ) {
    }
    public function index(array $data): array
    {
        $result =  $this->datatableRepository->index(
            $data["columns"],
            $data["start"],
            $data["length"],
            $data["order"],
            $data["search"]
        );
        $result["data"] = array_map(
            function ($row) {
                $row["action"] = "";
                return $row;
            },
            $result["data"]
        );
        dd($result);
        return $result;
    }
}
