<?php

namespace AppBundle\Entity\Inventory;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Feature
 *
 * @ORM\Table(name="inventory_feature")
 * @ORM\HasLifecycleCallbacks()
 */
class Feature
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
	 * @ORM\Column(type="text")
	 */
	protected $description;

	/**
	 * @var FeatureCategory
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\FeatureCategory")
	 * @ORM\JoinColumn(name="feature_category_id", referencedColumnName="id")
	 */
	protected $featureCategory;

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
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return FeatureCategory
     */
    public function getFeatureCategory()
    {
        return $this->featureCategory;
    }

}
