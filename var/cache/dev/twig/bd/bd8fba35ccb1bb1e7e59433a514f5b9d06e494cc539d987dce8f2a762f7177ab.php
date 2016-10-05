<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_4d34c6b13b823e175ca04254ddb7fe7c4c20225af9bf3d07902a4e6f07f6910a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1588d1a8e735d57f6d0c68ac4d42e78db1097cc09d1d0d4ca6485a5421235d2b = $this->env->getExtension("native_profiler");
        $__internal_1588d1a8e735d57f6d0c68ac4d42e78db1097cc09d1d0d4ca6485a5421235d2b->enter($__internal_1588d1a8e735d57f6d0c68ac4d42e78db1097cc09d1d0d4ca6485a5421235d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1588d1a8e735d57f6d0c68ac4d42e78db1097cc09d1d0d4ca6485a5421235d2b->leave($__internal_1588d1a8e735d57f6d0c68ac4d42e78db1097cc09d1d0d4ca6485a5421235d2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c9fb6f7c638790be70d54822bbc4ff34e2ed75274c0a3eb209320b39ee01122 = $this->env->getExtension("native_profiler");
        $__internal_3c9fb6f7c638790be70d54822bbc4ff34e2ed75274c0a3eb209320b39ee01122->enter($__internal_3c9fb6f7c638790be70d54822bbc4ff34e2ed75274c0a3eb209320b39ee01122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3c9fb6f7c638790be70d54822bbc4ff34e2ed75274c0a3eb209320b39ee01122->leave($__internal_3c9fb6f7c638790be70d54822bbc4ff34e2ed75274c0a3eb209320b39ee01122_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2319b8152cd043f2ee40146cee49d758d74a55427696e4d69aff04c2c7c5843b = $this->env->getExtension("native_profiler");
        $__internal_2319b8152cd043f2ee40146cee49d758d74a55427696e4d69aff04c2c7c5843b->enter($__internal_2319b8152cd043f2ee40146cee49d758d74a55427696e4d69aff04c2c7c5843b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_2319b8152cd043f2ee40146cee49d758d74a55427696e4d69aff04c2c7c5843b->leave($__internal_2319b8152cd043f2ee40146cee49d758d74a55427696e4d69aff04c2c7c5843b_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_33cd012901138720f1dddd1b357235a9aa2b33451a0f9f3def06c07e6056a241 = $this->env->getExtension("native_profiler");
        $__internal_33cd012901138720f1dddd1b357235a9aa2b33451a0f9f3def06c07e6056a241->enter($__internal_33cd012901138720f1dddd1b357235a9aa2b33451a0f9f3def06c07e6056a241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_33cd012901138720f1dddd1b357235a9aa2b33451a0f9f3def06c07e6056a241->leave($__internal_33cd012901138720f1dddd1b357235a9aa2b33451a0f9f3def06c07e6056a241_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}
";
    }
}
