<?php

namespace App\Repositories\Eloquent;

use App\Models\Company;
use App\Repositories\Contracts\CompanyRepositoryInterface;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function getData(): ?Company
    {
        return Company::first();
    }

    public function update(Company $company, array $data): bool
    {
        return $company->update($data);
    }
}
