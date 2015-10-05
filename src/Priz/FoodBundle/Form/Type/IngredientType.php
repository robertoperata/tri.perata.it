<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 28/09/15
 * Time: 22.32
 */

namespace Priz\FoodBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class IngredientType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('name', 'text')
            ->add('description', 'textarea')
            ->add('save', 'submit', array('label'=>'salva'))
            ->getForm();
    }

    public function getName(){
        return "ingredient";
    }
}