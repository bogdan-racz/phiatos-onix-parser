<?php 

namespace BBMParser\Model;

class Author extends Contributor
{
    public const ROLE_ID = 'A01';

    public function __construct()
    {
        parent::setRole(self::ROLE_ID);
    }
}