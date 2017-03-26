<?php

namespace AppBundle\Entity\Inventory;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Color
 *
 * @ORM\Table(name="inventory_color")
 */
class Color
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="integer")
	 */
	protected $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string")
	 */
	protected $name;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string")
	 */
	protected $label;

	/**
	 * @var ColorGroup
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\ColorGroup")
	 * @ORM\JoinColumn(name="color_group_id", referencedColumnName="id")
	 */
	protected $colorGroup;

	/**
	 * @var ColorType
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\ColorType")
	 * @ORM\JoinColumn(name="color_type_id", referencedColumnName="id")
	 */
	protected $colorType;

	/**
	 * @var Make
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\Make")
	 * @ORM\JoinColumn(name="make_id", referencedColumnName="id")
	 */
	protected $make;

	/**
	 * @var Model
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\Model")
	 * @ORM\JoinColumn(name="model_id", referencedColumnName="id")
	 */
	protected $model;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string", name="color_code"))
	 */
	protected $colorCode;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string", name="hex_code"))
	 */
	protected $hexCode;

	/**
	 * @var bool
	 *
	 * @ORM\Column(type="boolean")
	 */
	protected $metallic = true;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return ColorGroup
     */
    public function getColorGroup()
    {
        return $this->colorGroup;
    }

    /**
     * @return ColorType
     */
    public function getColorType()
    {
        return $this->colorType;
    }

    /**
     * @return Make
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getColorCode()
    {
        return $this->colorCode;
    }

    /**
     * @return string
     */
    public function getHexCode()
    {
        return $this->hexCode;
    }

    /**
     * @return bool
     */
    public function isMetallic()
    {
        return $this->metallic;
    }


}
