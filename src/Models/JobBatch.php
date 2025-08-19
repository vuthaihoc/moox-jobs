<?php

namespace Moox\Jobs\Models;

use Illuminate\Database\Eloquent\Model;

class JobBatch extends Model
{
    public const UPDATED_AT = null;

    public function getConnectionName()
    {
        return config('jobs.job_connection') ?: $this->connection;
    }

}
