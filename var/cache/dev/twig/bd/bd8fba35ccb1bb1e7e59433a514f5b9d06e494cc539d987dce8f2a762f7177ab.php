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
        $__internal_eefac1271cd55823cd87c230bdb4a0defc2fcccc6030b7664c1443bbfc1b89af = $this->env->getExtension("native_profiler");
        $__internal_eefac1271cd55823cd87c230bdb4a0defc2fcccc6030b7664c1443bbfc1b89af->enter($__internal_eefac1271cd55823cd87c230bdb4a0defc2fcccc6030b7664c1443bbfc1b89af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eefac1271cd55823cd87c230bdb4a0defc2fcccc6030b7664c1443bbfc1b89af->leave($__internal_eefac1271cd55823cd87c230bdb4a0defc2fcccc6030b7664c1443bbfc1b89af_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_35863eaec27832bad42854f7351348708d6c89f56d7d945eb2ee7492943aefe7 = $this->env->getExtension("native_profiler");
        $__internal_35863eaec27832bad42854f7351348708d6c89f56d7d945eb2ee7492943aefe7->enter($__internal_35863eaec27832bad42854f7351348708d6c89f56d7d945eb2ee7492943aefe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_35863eaec27832bad42854f7351348708d6c89f56d7d945eb2ee7492943aefe7->leave($__internal_35863eaec27832bad42854f7351348708d6c89f56d7d945eb2ee7492943aefe7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_936fe20b4f5745285d3516c34a75ee038fcfda9a88350516870156e0954d3ac4 = $this->env->getExtension("native_profiler");
        $__internal_936fe20b4f5745285d3516c34a75ee038fcfda9a88350516870156e0954d3ac4->enter($__internal_936fe20b4f5745285d3516c34a75ee038fcfda9a88350516870156e0954d3ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_936fe20b4f5745285d3516c34a75ee038fcfda9a88350516870156e0954d3ac4->leave($__internal_936fe20b4f5745285d3516c34a75ee038fcfda9a88350516870156e0954d3ac4_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_91a0596d621c8d779705b28c81cb21796e52f21ddc8d209ececde5dd90a1443b = $this->env->getExtension("native_profiler");
        $__internal_91a0596d621c8d779705b28c81cb21796e52f21ddc8d209ececde5dd90a1443b->enter($__internal_91a0596d621c8d779705b28c81cb21796e52f21ddc8d209ececde5dd90a1443b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_91a0596d621c8d779705b28c81cb21796e52f21ddc8d209ececde5dd90a1443b->leave($__internal_91a0596d621c8d779705b28c81cb21796e52f21ddc8d209ececde5dd90a1443b_prof);

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
