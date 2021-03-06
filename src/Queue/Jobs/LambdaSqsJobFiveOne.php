<?php

namespace Intouch\LaravelAwsLambda\Queue\Jobs;

/**
 * A Laravel 5.1 and 5.2 compatible Job.
 */
class LambdaSqsJobFiveOne extends LambdaSqsJob
{
    /**
     * Fire the job.
     *
     * @return void
     */
    public function fire()
    {
        $this->resolveAndFire(json_decode($this->getRawBody(), true));
    }
}
