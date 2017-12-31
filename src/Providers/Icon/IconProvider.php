<?php
/**
 * Created by IntelliJ IDEA.
 * User: ckunze
 * Date: 8/3/17
 * Time: 18:27
 */

namespace Invoice\Providers\Icon;

use Plenty\Plugin\Templates\Twig;


class IconProvider
{
    public function call(Twig $twig):string
    {
        return $twig->render('Invoice::Icon');
    }

}