<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_d68e8c3a9d70e1294fc0118b08ed3f1a25d54dc17896106895165472690f6dbf extends Twig_Template
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
        $__internal_4ee3a38f2c6b66a27b76c9c7cfc1b9ed28f55562d369f22402ff92ef8e8b5625 = $this->env->getExtension("native_profiler");
        $__internal_4ee3a38f2c6b66a27b76c9c7cfc1b9ed28f55562d369f22402ff92ef8e8b5625->enter($__internal_4ee3a38f2c6b66a27b76c9c7cfc1b9ed28f55562d369f22402ff92ef8e8b5625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

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
        
        $__internal_4ee3a38f2c6b66a27b76c9c7cfc1b9ed28f55562d369f22402ff92ef8e8b5625->leave($__internal_4ee3a38f2c6b66a27b76c9c7cfc1b9ed28f55562d369f22402ff92ef8e8b5625_prof);

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
