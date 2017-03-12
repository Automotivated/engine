<?php

namespace AppBundle\Entity\Inventory;

/**
 * Class Model
 *
 * @ORM\Table(name="inventory_object_warranty")
 */
class ObjectWarranty
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var Object
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Inventory\Object")
     * @ORM\JoinColumn(name="object_id", referencedColumnName="id")
     */
    protected $object;

    /**
     * @var Warranty
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Inventory\Warranty")
     * @ORM\JoinColumn(name="warranty_id", referencedColumnName="id")
     */
    protected $warranty;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $value;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Object
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @return Warranty
     */
    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

}