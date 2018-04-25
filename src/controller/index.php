<?php

declare(strict_types = 1);

namespace Demo\Controller;

require_once "const.php";
require_once "../../vendor/autoload.php";
require_once "../service/Contents.php";
require_once "../service/LinkInserter.php";

use Demo\Service\Contents as ContentsService;
use Demo\Service\LinkInserter;

$tunnelToDB = new ContentsService();

$pageContents = $tunnelToDB->getContentsFromPage('baseTypes.php');
//var_dump($pageContents);

$pageTitleCouples = $tunnelToDB->getPageTitleCouples();
//var_dump($pageTitleCouples);

$listsFromPage = $pageContents["lists"];
//var_dump($listsFromPage);

$codesWithAttachments = $pageContents["codes"];
var_dump($codesWithAttachments);
/*$pageContents = $tunnelToDB->getContentsFromPage(basename(__FILE__));
$elements = $tunnelToDB->getSpouse(
    $pageContents["lists"][0]["name"],
    "list",
    "element"
    );
$pageTitleCouples = $tunnelToDB->getPageTitleCouples();

$linkInserter = new LinkInserter();
$externalLinks = $tunnelToDB->getLinksAssociationsFromPage(basename(__FILE__));
$innerLinks = [
    "MVC conception"                            => $pageTitleCouples[5]["page"],
    "interaction with a database"               => $pageTitleCouples[2]["page"],
    "form processing"                           => $pageTitleCouples[3]["page"],
    "high level solutions of trivial issues"    => $pageTitleCouples[0]["page"],
    "writing your own functions"                => $pageTitleCouples[6]["page"],
    "issues of database design"                 => $pageTitleCouples[1]["page"],
];
$elements = $linkInserter->insertLinksIntoTexts($externalLinks, $elements);
$pageContents["articles"] = $linkInserter->insertLinksIntoTexts($innerLinks, $pageContents["articles"]);

$loader = new \Twig_Loader_Filesystem(TEMPLATES_PATH_FOR_TWIG);
$twig = new \Twig_Environment($loader);

echo $twig->render("index.tpl.twig", [
    "title"         => $pageContents["titles"][0]["name"],
    "header"        => $pageContents["titles"][0]["name"],
    "siteBar"       => $pageTitleCouples,
    "article_1"     => $pageContents["articles"][0]["name"],
    "article_2"     => $pageContents["articles"][1]["name"],
    "sources"       => $elements,
    "image_1_src"   => IMAGES_FOLDER_PATH . $pageContents["images"][0]["name"],
    "up_url"        => basename(__FILE__),
]);*/
