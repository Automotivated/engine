<?php

namespace AppBundle\Entity\Inventory;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ObjectComment
 *
 * @ORM\Table(name="inventory_object_comment")
 * @ORM\HasLifecycleCallbacks()
 */
class ObjectComment
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="integer")
	 */
	protected $id;

	/**
	 * @var text
	 *
	 * @ORM\Column(type="text")
	 */
	protected $comment;


	/**
	 * @var Object
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\Object")
	 * @ORM\JoinColumn(name="object_id", referencedColumnName="id")
	 */
	protected $object;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(type="datetime")
	 */
	protected $created;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return text
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return Object
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

	/**
	 * @ORM\PrePersist()
	 */
	public function prePersist()
	{
		if ($this->id === null) {
			$this->created = new \DateTime();
		}
	}
}
