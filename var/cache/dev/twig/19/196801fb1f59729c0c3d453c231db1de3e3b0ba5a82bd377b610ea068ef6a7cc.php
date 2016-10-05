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
        $__internal_8fa5ad66a58709ce244b765e1df42c6ecf9fa90b532465357528746a824ae351 = $this->env->getExtension("native_profiler");
        $__internal_8fa5ad66a58709ce244b765e1df42c6ecf9fa90b532465357528746a824ae351->enter($__internal_8fa5ad66a58709ce244b765e1df42c6ecf9fa90b532465357528746a824ae351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fa5ad66a58709ce244b765e1df42c6ecf9fa90b532465357528746a824ae351->leave($__internal_8fa5ad66a58709ce244b765e1df42c6ecf9fa90b532465357528746a824ae351_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_67f35d4913120899efad7aed4ff4856aad8b70da593eec64fe4101a33123014e = $this->env->getExtension("native_profiler");
        $__internal_67f35d4913120899efad7aed4ff4856aad8b70da593eec64fe4101a33123014e->enter($__internal_67f35d4913120899efad7aed4ff4856aad8b70da593eec64fe4101a33123014e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_67f35d4913120899efad7aed4ff4856aad8b70da593eec64fe4101a33123014e->leave($__internal_67f35d4913120899efad7aed4ff4856aad8b70da593eec64fe4101a33123014e_prof);

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
