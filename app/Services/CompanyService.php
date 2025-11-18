<?php

namespace App\Services;

use App\Models\Company;
use App\Repositories\Contracts\CompanyRepositoryInterface;

class CompanyService
{
    public function __construct(private CompanyRepositoryInterface $repository) {}

    public function getData(): ?Company 
    {
        return $this->repository->getData();
    }

    public function update(array $data): bool
    {
        $company = $this->repository->getData();
        return $this->repository->update($company, $data);
    }
}
