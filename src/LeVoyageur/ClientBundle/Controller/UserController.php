<?php
/**
 * Created by PhpStorm.
 * User: reaper
 * Date: 26/01/2017
 * Time: 21:19
 */

namespace LeVoyageur\ClientBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function homeAction(){

            return $this->render('LeVoyageurClientBundle:User:index.html.twig');
    }

}