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
        $__internal_c4bb00f9df63b46fe459a97e37e0603ed0d8e96675c87628444c8a87661d654a = $this->env->getExtension("native_profiler");
        $__internal_c4bb00f9df63b46fe459a97e37e0603ed0d8e96675c87628444c8a87661d654a->enter($__internal_c4bb00f9df63b46fe459a97e37e0603ed0d8e96675c87628444c8a87661d654a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

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
        
        $__internal_c4bb00f9df63b46fe459a97e37e0603ed0d8e96675c87628444c8a87661d654a->leave($__internal_c4bb00f9df63b46fe459a97e37e0603ed0d8e96675c87628444c8a87661d654a_prof);

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
