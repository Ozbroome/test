<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_cea3429aeba15bd8880e5394d55fe4a080d3ca49896cf3142e7aaf72b9e0b7cd extends Twig_Template
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
        $__internal_0021defaf6581200a63f729d062c1b6a0c42785a3b1e2255b3865ff2cdb6feb7 = $this->env->getExtension("native_profiler");
        $__internal_0021defaf6581200a63f729d062c1b6a0c42785a3b1e2255b3865ff2cdb6feb7->enter($__internal_0021defaf6581200a63f729d062c1b6a0c42785a3b1e2255b3865ff2cdb6feb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0021defaf6581200a63f729d062c1b6a0c42785a3b1e2255b3865ff2cdb6feb7->leave($__internal_0021defaf6581200a63f729d062c1b6a0c42785a3b1e2255b3865ff2cdb6feb7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0fbb9aa15d49611f9d1bc0afcb179eb09b72ebd55ad358a736d70a0dd1fc474 = $this->env->getExtension("native_profiler");
        $__internal_c0fbb9aa15d49611f9d1bc0afcb179eb09b72ebd55ad358a736d70a0dd1fc474->enter($__internal_c0fbb9aa15d49611f9d1bc0afcb179eb09b72ebd55ad358a736d70a0dd1fc474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c0fbb9aa15d49611f9d1bc0afcb179eb09b72ebd55ad358a736d70a0dd1fc474->leave($__internal_c0fbb9aa15d49611f9d1bc0afcb179eb09b72ebd55ad358a736d70a0dd1fc474_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c1a0f778d45c80e1a176a3c1d2f3c6a02a8706005080341fdc7ad2ac546cb7f = $this->env->getExtension("native_profiler");
        $__internal_5c1a0f778d45c80e1a176a3c1d2f3c6a02a8706005080341fdc7ad2ac546cb7f->enter($__internal_5c1a0f778d45c80e1a176a3c1d2f3c6a02a8706005080341fdc7ad2ac546cb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5c1a0f778d45c80e1a176a3c1d2f3c6a02a8706005080341fdc7ad2ac546cb7f->leave($__internal_5c1a0f778d45c80e1a176a3c1d2f3c6a02a8706005080341fdc7ad2ac546cb7f_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e67872c8e53375a6dbcba73f33ae3e215f46a275db8a8ced05b23a37a875a8cb = $this->env->getExtension("native_profiler");
        $__internal_e67872c8e53375a6dbcba73f33ae3e215f46a275db8a8ced05b23a37a875a8cb->enter($__internal_e67872c8e53375a6dbcba73f33ae3e215f46a275db8a8ced05b23a37a875a8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_e67872c8e53375a6dbcba73f33ae3e215f46a275db8a8ced05b23a37a875a8cb->leave($__internal_e67872c8e53375a6dbcba73f33ae3e215f46a275db8a8ced05b23a37a875a8cb_prof);

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
