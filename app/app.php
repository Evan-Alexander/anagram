<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug']=true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_results", function() use($app) {
        $input_words = new Anagram;
        $find_anagrams = $input_words->compareWords($_GET['word'], $_GET['list']);
        return $app['twig']->render('results.html.twig', array('result' => $find_anagrams));
    });
    return $app;
?>
