<?php

namespace App\Enum;

enum ContactStatusEnum:string
{
    case READ = 'read';
    case UNREAD = 'unread';
    case REPLIED = 'replied';
}
