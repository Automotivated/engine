<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Color
 *
 * @ORM\Table(name="automotive_color")
 * @ORM\HasLifecycleCallbacks()
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
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ColorGroup")
	 * @ORM\JoinColumn(name="color_group_id", referencedColumnName="id")
	 */
	protected $colorGroup;

	/**
	 * @var ColorType
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ColorType")
	 * @ORM\JoinColumn(name="color_type_id", referencedColumnName="id")
	 */
	protected $colorType;

	/**
	 * @var Make
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Make")
	 * @ORM\JoinColumn(name="make_id", referencedColumnName="id")
	 */
	protected $make;

	/**
	 * @var Model
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Model")
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
}
