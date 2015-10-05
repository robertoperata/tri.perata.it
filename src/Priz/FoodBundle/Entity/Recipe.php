<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 01/10/15
 * Time: 21.10
 */

namespace Priz\FoodBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query\Expr\Base;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="recipes")
 */
class Recipe extends Base{


    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     */
    protected $name;

    /**
     * @ORM\ManyToMany(targetEntity="Priz\FoodBundle\Entity\Ingredient", inversedBy="$recipes")
     *
     */
    protected $ingredients;


    public function __construct() {
        $this->ingredients = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Recipe
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add ingredients
     *
     * @param \Priz\FoodBundle\Entity\Ingredient $ingredients
     * @return Recipe
     */
    public function addIngredient(\Priz\FoodBundle\Entity\Ingredient $ingredients)
    {
        $this->ingredients[] = $ingredients;

        return $this;
    }

    /**
     * Remove ingredients
     *
     * @param \Priz\FoodBundle\Entity\Ingredient $ingredients
     */
    public function removeIngredient(\Priz\FoodBundle\Entity\Ingredient $ingredients)
    {
        $this->ingredients->removeElement($ingredients);
    }

    /**
     * Get ingredients
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }
}
