<?php
/**
 * Created by PhpStorm.
 * User: 22876
 * Date: 2020/4/19
 * Time: 9:35
 */
define('BASEDIR', __DIR__);
include BASEDIR.'/Classes/Loader.php';
spl_autoload_register('\\Classes\Loader::autoload');

$db = Classes\Register::get('db1');

class Page
{
    /*
     * @var \Classes\UserStrategy
     */

    protected $strategy;
    function index()
    {
        echo "AD:";
        $this->strategy->showAd();
        echo "<br/>";

        echo "Category:";
        $this->strategy->showCategory();
        echo "<br/>";
    }

    function setStrategy(\Classes\UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}

$page = new Page;
if(isset($_GET['female'])) {
    $strategy = new \Classes\FemaleUserStrategy();
} else {
    $strategy = new \Classes\MaleUserStrategy();
}
$page->setStrategy($strategy);
$page->index();