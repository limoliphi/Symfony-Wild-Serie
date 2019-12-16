<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Comment;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use App\Entity\Program;
use App\Entity\Season;
use App\Entity\Episode;
use App\Repository\SeasonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Actor;
use App\Form\CategoryType;


/**
 *
 * @Route("wild/", name="wild_")
 */
class WildController extends AbstractController
{
    public function showByProgram($program)
    {
        return $program->getSeasons();
    }

    /**
     * Show all rows from Program's entity
     *
     * @Route("/", name="index")
     * @return Response A response instance
     */
    public function index(): Response
    {
        $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findAll();
        if (!$programs) {
            throw $this->createNotFoundException(
                'No program found in program\'s table.'
            );
        }
        return $this->render('wild/index.html.twig', [
            'programs' => $programs,
        ]);
    }


    /**
     * Getting a program with a formatted slug for title
     *
     * @param string $slug The slugger
     * @Route("show/{slug<^[a-z0-9-]+$>}", defaults={"slug" = null}, name="show")
     * @return Response
     */
    public function show(?string $slug): Response
    {
        if (!$slug) {
            throw $this
                ->createNotFoundException('No slug has been sent to find a program in program\'s table.');
        }

        $program = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findOneBy(['slug' => $slug]);
        if (!$program) {
            throw $this->createNotFoundException(
                'No program with ' . $slug . ' slug, found in program\'s table.'
            );
        }

        $seasons = $this->showByProgram($program);
        return $this->render('wild/show.html.twig', [
            'program' => $program,
            'slug' => $slug,
            'seasons' => $seasons
        ]);
    }


    /**
     * @Route("category/{categoryName}", name="category")
     * @param string $categoryName
     * @return Response
     */
    public function showByCategory(string $categoryName): Response
    {
        //on récupère le repertoire categorie en tant qu'objet
        $repositoryCategory = $this->getDoctrine()
            ->getRepository(Category::class);
        //dans le repertoire, on veut les categories, par nom de categorie
        $categories = $repositoryCategory->findOneBy(['name' => $categoryName]);
        //on a les categorie, on veut leur id maintenant
        $idCategory = $categories->getId();
        //sur le repertoire program, on veut l'objet programme
        $repositoryProgram = $this->getDoctrine()
            ->getRepository(Program::class);
        //avec ce repertoire, on a l'objet program sur lequel on veut idcategorie + id
        $programs = $repositoryProgram->findBy(
            ['category' => $idCategory],
            ['id' => 'desc'],
            3
        );
        return $this->render('wild/category.html.twig', [
            'programs' => $programs,
            'category' => $categoryName
        ]);
    }

    /**
     * Getting a program with a formatted slug for title
     *
     * @param string $slug The slugger
     * @Route("season/{id}", name="season")
     * @return Response
     */
    public function showBySeason(?int $id, SeasonRepository $seasonRepository)
    {

        $season = $seasonRepository->findOneBy(['id' => $id]);
        $program = $season->getProgram();
        $episodes = $season->getEpisodes();

        return $this->render('wild/season.html.twig', [
            'episodes' => $episodes,
            'season' => $season,
            'program' => $program,
        ]);
    }


    /**
     * @Route("episode/{slug}", name="episode")
     * @param Episode $episode
     * @param Request $request
     * @return Response
     */
    public function showEpisode(Episode $episode, Request $request): Response
    {
        $season = $episode->getSeason();
        $program = $season->getProgram();

        $comment = new Comment();
        $comments = $episode->getComments();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $comment->setAuthor($this->getUser());
            $comment->setEpisode($episode);
            $comment->setComment($data->getComment());
            $comment->setRate($data->getRate());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('wild_episode', ['slug' => $episode->getSlug()]);
        }
        return $this->render('wild/episode.html.twig', [
            'episode' => $episode,
            'program' => $program,
            'season' => $season,
            'comment' => $comment,
            'comments' => $comments,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("actor/{slug}", name="actor")
     * @return Response
     */
    public function showActor(Actor $actor): Response
    {
        $programs = $actor->getPrograms();

        return $this->render('wild/actor.html.twig', [
            'actor' => $actor,
            'programs' => $programs,
        ]);
    }

}
