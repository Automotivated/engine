<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Emission
 *
 * @ORM\Table(name="automotive_emission")
 * @ORM\HasLifecycleCallbacks()
 */
class Emission
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
