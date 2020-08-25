<?php
namespace Bregananta\ClosureTable\Tests;

use Bregananta\ClosureTable\Models\Entity;

class Page extends Entity
{
    protected $table = 'entities';
    protected $fillable = ['id', 'parent_id', 'title', 'excerpt', 'body', 'position'];
}
