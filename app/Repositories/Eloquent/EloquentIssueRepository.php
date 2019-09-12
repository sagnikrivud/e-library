<?php

namespace App\Repositories\Eloquent;

use App\Issue;
use App\Repositories\Contracts\IssueRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentIssueRepository extends AbstractRepository implements IssueRepository
{
    public function entity()
    {
        return Issue::class;
    }
}
