<?php

/**
 * @file
 * Contains \Drupal\dg_styleguide\TwigStyleguideRender.
 */

namespace Drupal\dg_styleguide;


/**
 * Class TwigStyleguideRender.
 *
 * @package Drupal\dg_styleguide
 */
class TwigStyleguideRender extends \Twig_Extension
{

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('renderForm', array($this, 'renderForm')),
        );
    }

    public function renderForm()
    {
        $renderer = \Drupal::service('renderer');
        $form = \Drupal::formBuilder();
        $form = $form->getForm('\Drupal\dg_styleguide\Form\StyleguideForm');
        return $renderer->render($form);
    }

    public function getName()
    {
        return 'styleguide_render';
    }

}
