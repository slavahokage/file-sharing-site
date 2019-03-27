<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 3/20/19
 * Time: 6:36 PM
 */

namespace App\Controller;


use App\Entity\File;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController

{
    /**
     * @Route("/", name="main")
     */
    public function main()
    {
        $files = $this->getDoctrine()->getRepository(File::class)->findAll();

        return $this->render('main.html.twig', ['files' => $files]);
    }


    /**
     * @Route("/documents", name="documents")
     */
    public function documents()
    {
        $files = $this->getDoctrine()->getRepository(File::class)->findBy(['extension' => 'docx']);

        return $this->render('main.html.twig', ['files' => $files]);
    }

    /**
     * @Route("/presentations", name="presentations")
     */
    public function presentations()
    {
        $files = $this->getDoctrine()->getRepository(File::class)->findBy(['extension' => 'pptx']);

        return $this->render('main.html.twig', ['files' => $files]);
    }

    /**
     * @Route("/files/{filename}", name="files")
     */
    public function files($filename)
    {
        $test = __DIR__ . '/../../templates/files/' . $filename;

        return $this->file($test);
    }
}