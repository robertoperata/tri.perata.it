<?php
namespace Priz\FoodBundle\Controller;


use Priz\FoodBundle\Entity\Recipe;
use Priz\FoodBundle\Form\Type\RecipeType;
use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Request;



class RecipeController extends Controller{

    public function phpinfoAction(Request$request){
        var_dump(phpinfo());
    }

    public function insertIngredientAction(Request $request){
        $recipe = new Recipe();
        $form = $this->createForm(new RecipeType(), $recipe);


        $form->handleRequest($request);


        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $recipe = $form->getData();

            $em->persist($recipe);
            $em->flush();

           return $this->redirectToRoute('priz_food_ingredient_success');
          //  return $this->render('PrizFoodBundle:food:success_ingredient.html.twig');
        }
        return $this->render('PrizFoodBundle:food:new_ingredient.html.twig', array('form'=>$form->createView()));

    }

    public function insertIngredientSuccessAction(Request $request){
        return $this->render('PrizFoodBundle:food:success_ingredient.html.twig');
    }



}