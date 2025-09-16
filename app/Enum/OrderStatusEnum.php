<?php

namespace App\Enum;

enum OrderStatusEnum:string
{

    case PENDING = 'pending';
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';
    case PROCESSING = 'processing';

}
