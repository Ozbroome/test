<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_9137483b090fd157ab95fe3e68519e0d5b58c6a2ebf2fcb0a14a3f097cf05e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c71f7f66b790bb0210288c858be4af090cf88e522322f864ded13f315a8540fa = $this->env->getExtension("native_profiler");
        $__internal_c71f7f66b790bb0210288c858be4af090cf88e522322f864ded13f315a8540fa->enter($__internal_c71f7f66b790bb0210288c858be4af090cf88e522322f864ded13f315a8540fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c71f7f66b790bb0210288c858be4af090cf88e522322f864ded13f315a8540fa->leave($__internal_c71f7f66b790bb0210288c858be4af090cf88e522322f864ded13f315a8540fa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c75037f1c5aa9c58ff10eadf949310809e460ef3a34659e022bb7aa97078b455 = $this->env->getExtension("native_profiler");
        $__internal_c75037f1c5aa9c58ff10eadf949310809e460ef3a34659e022bb7aa97078b455->enter($__internal_c75037f1c5aa9c58ff10eadf949310809e460ef3a34659e022bb7aa97078b455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_c75037f1c5aa9c58ff10eadf949310809e460ef3a34659e022bb7aa97078b455->leave($__internal_c75037f1c5aa9c58ff10eadf949310809e460ef3a34659e022bb7aa97078b455_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block body %}

  <h2>Ajouter une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

{% endblock %}
";
    }
}
