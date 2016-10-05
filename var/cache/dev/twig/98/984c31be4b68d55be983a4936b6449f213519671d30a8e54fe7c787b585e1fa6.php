<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_9117cf52d11c06b3bbeeb02555c0e488d2ba1e42a1b5be68e897b3d4a5e0d4a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df8a5635c44f78856fdaef6eec78d6c331c22a41b777c9a76561d3975e400bd6 = $this->env->getExtension("native_profiler");
        $__internal_df8a5635c44f78856fdaef6eec78d6c331c22a41b777c9a76561d3975e400bd6->enter($__internal_df8a5635c44f78856fdaef6eec78d6c331c22a41b777c9a76561d3975e400bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 11
        echo "<div class=\"well\">
  ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>";
        
        $__internal_df8a5635c44f78856fdaef6eec78d6c331c22a41b777c9a76561d3975e400bd6->leave($__internal_df8a5635c44f78856fdaef6eec78d6c331c22a41b777c9a76561d3975e400bd6_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  30 => 11,  25 => 6,  22 => 2,);
    }

    public function getSource()
    {
        return "{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

{# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,
   elles, hériteront probablement du layout. Je dis « probablement » car,
   ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}

<h3>Formulaire d'annonce</h3>

{# On laisse vide la vue pour l'instant, on la comblera plus tard
   lorsqu'on saura afficher un formulaire. #}
<div class=\"well\">
  {{ form(form) }}
</div>";
    }
}
