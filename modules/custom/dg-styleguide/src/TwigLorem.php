<?php

/**
 * @file
 * Contains \Drupal\dg_styleguide\TwigLorem.
 */

namespace Drupal\dg_styleguide;


/**
 * Class TwigLorem.
 *
 * @package Drupal\dg_styleguide
 */
class TwigLorem extends \Twig_Extension
{

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('lorem', array($this, 'loremFilter')),
        );
    }

    public function loremFilter($words = 10, $type = 'words', $wrap = '')
    {
        $output = "";
        $lipsum = \Drupal::service('dg_styleguide.lorem');
        $allowed = ['words', 'sentences', 'paragraphs'];
        if (in_array($type, $allowed) && method_exists($lipsum, $type)) {
            $output = $lipsum->$type($words, $wrap);
        }
        return $output;
    }

    public function getName()
    {
        return 'lorem';
    }

}
