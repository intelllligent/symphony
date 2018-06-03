<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Flex\Response;

class FooController extends AbstractController
{
/**
* @Route(
 *     "/welcome/{name}",
 *      name="foo",
 *     defaults={"name"="Whateever"}
 *     requirements=("name"="[A-Za-z]+")
 *     )
 *
 * @param string $name
 * @return Response
*/
public function index(string $name)
{
    return $this->render('foo/index.html.twig', [
        'name'=>$name ]);
}

/**
* @Route("/", name="hello_page")
*/
public function hello_page()
{
return $this->render('hello_page.html.twig');
}

/**
* @Route("/test", name="test")
*/
public function test()
{
return $this->render('foo/test.html.twig');
}
}