<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */

class Tournament
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column (type="integer")
     */
    public $id;
    /**
     * @ORM\Column (type="string")
     */
    public $name;
    /**
     * @ORM\Column (type="datetime")
     */
    public $createdAt;
}