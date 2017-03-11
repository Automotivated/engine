<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Fuel
 *
 * @ORM\Table(name="automotive_fuel")
 * @ORM\HasLifecycleCallbacks()
 */
class Fuel
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

}
