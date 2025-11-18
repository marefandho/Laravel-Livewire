<?php

namespace App\Repositories\Contracts;

use App\Models\Company;

interface CompanyRepositoryInterface
{
    public function getData(): ?Company;
    public function update(Company $company, array $data): bool;
}
