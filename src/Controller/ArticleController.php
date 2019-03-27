<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 3/21/19
 * Time: 10:11 AM
 */

namespace App\Controller;



use App\Entity\File;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("article/create", name="create_article")
     */
    public function create(): Response
    {
        return $this->render('create_article.html.twig');
    }


    /**
     * @Route("article/save", name="save_article")
     */
    public function save(): Response
    {
        $realName = $_FILES['newfile']['name'];
        $info = pathinfo($realName);
        $extension = $info['extension'];
        $newName = $this->generateRandomString() . '.' . $extension;
        $target = __DIR__ . '/../../templates/files/' . $newName;
        move_uploaded_file($_FILES['newfile']['tmp_name'], $target);

        $entityManager = $this->getDoctrine()->getManager();
        $file = new File();
        $file->setRealName($realName);
        $file->setExtension($extension);
        $file->setSource($newName);
        $file->setTitle($_POST['title']);
        $entityManager->persist($file);
        $entityManager->flush();

        return $this->redirectToRoute('main');
    }

    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}