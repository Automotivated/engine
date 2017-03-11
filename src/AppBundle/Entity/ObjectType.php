<?php
/**
 * stuff zoals personenauto, fiets, aanhanger
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ObjectType
 *
 * @ORM\Table(name="automotive_object_type")
 * @ORM\HasLifecycleCallbacks()
 */
class ObjectType
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
