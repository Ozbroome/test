<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_d47a2546f68cd107b095464a2c2c38336be3c8900300c00f279c878f4d430ff4 extends Twig_Template
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
        $__internal_0e848bb91418763c923f994cec9ad216ce1f4510a296e310d4113c6508238caa = $this->env->getExtension("native_profiler");
        $__internal_0e848bb91418763c923f994cec9ad216ce1f4510a296e310d4113c6508238caa->enter($__internal_0e848bb91418763c923f994cec9ad216ce1f4510a296e310d4113c6508238caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e848bb91418763c923f994cec9ad216ce1f4510a296e310d4113c6508238caa->leave($__internal_0e848bb91418763c923f994cec9ad216ce1f4510a296e310d4113c6508238caa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da9363bae02065c9cd4f818758260b4270dd027a5f546c97397132f56dca9c77 = $this->env->getExtension("native_profiler");
        $__internal_da9363bae02065c9cd4f818758260b4270dd027a5f546c97397132f56dca9c77->enter($__internal_da9363bae02065c9cd4f818758260b4270dd027a5f546c97397132f56dca9c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_da9363bae02065c9cd4f818758260b4270dd027a5f546c97397132f56dca9c77->leave($__internal_da9363bae02065c9cd4f818758260b4270dd027a5f546c97397132f56dca9c77_prof);

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
