<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Feature
 *
 * @ORM\Table(name="automotive_feature")
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
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FeatureCategory")
	 * @ORM\JoinColumn(name="feature_category_id", referencedColumnName="id")
	 */
	protected $featureCategory;

}
