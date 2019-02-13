<?php
/**
 * Created by PhpStorm.
 * User: matej
 * Date: 13.02.19.
 * Time: 16:04
 */

namespace App\Entity;

class Tag
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
