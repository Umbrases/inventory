<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QueryHelper extends Model
{
    use HasFactory;

    public function getQuery($method, $params)
    {
        $result = CRest::call($method, $params);

        if (!empty($result['error']) && $result['error'] == 'QUERY_LIMIT_EXCEEDED') {
            sleep(1);
            getQuery($method, $params);
        }

        return $result;
    }

    public function getQueryBatch($batch_list)
    {
        $batch_result = CRest::callBatch($batch_list);
        if (!empty($batch_result['error']) && $batch_result['error'] == 'QUERY_LIMIT_EXCEEDED') {
            sleep(1);
            getQueryBatch($batch_list);
        }

        return $batch_result;
    }
}
