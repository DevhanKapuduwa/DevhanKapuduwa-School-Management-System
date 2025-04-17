<?php

namespace App;

enum ClassRoomStatus: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';

    public function label(): string
    {
        return match ($this) {
            ClassRoomStatus::DRAFT => 'Draft',
            ClassRoomStatus::PUBLISHED => 'Published',
        };
    }
}