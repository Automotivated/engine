<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Warranty
 *
 * @ORM\Table(name="automotive_warranty")
 */
class Warranty
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
	 * @var string
	 *
	 * @ORM\Column(type="string")
	 */
	protected $option;
}
