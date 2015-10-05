<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 05/10/15
 * Time: 21.25
 */

namespace Priz\FoodBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RecipeType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('name', 'text')
            ->add('ingredients', 'entity', array(
                'class'=>'Priz\FoodBundle\Entity\Ingredient',
                'property'=>'name',
                'multiple'=>true,
                'expanded'=>true
            ))
            ->add('save', 'submit', array('label'=>'salva'))
            ->getForm();
    }

    public function getName()
    {
        return 'recipe';
    }

}