<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_cb714747aa21ee42d8a534ee9f294f6ed76ddd87718ca5a9adf97d36b5547c18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff4d4f7fdf7d76b82faa05ce00f02bc1d9905936b5ab5f6dab26681bd1d059f0 = $this->env->getExtension("native_profiler");
        $__internal_ff4d4f7fdf7d76b82faa05ce00f02bc1d9905936b5ab5f6dab26681bd1d059f0->enter($__internal_ff4d4f7fdf7d76b82faa05ce00f02bc1d9905936b5ab5f6dab26681bd1d059f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff4d4f7fdf7d76b82faa05ce00f02bc1d9905936b5ab5f6dab26681bd1d059f0->leave($__internal_ff4d4f7fdf7d76b82faa05ce00f02bc1d9905936b5ab5f6dab26681bd1d059f0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6c532847222f1ad4d6c1b88ead3133f6349fffc931b75a6acbad020b472073a = $this->env->getExtension("native_profiler");
        $__internal_a6c532847222f1ad4d6c1b88ead3133f6349fffc931b75a6acbad020b472073a->enter($__internal_a6c532847222f1ad4d6c1b88ead3133f6349fffc931b75a6acbad020b472073a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a6c532847222f1ad4d6c1b88ead3133f6349fffc931b75a6acbad020b472073a->leave($__internal_a6c532847222f1ad4d6c1b88ead3133f6349fffc931b75a6acbad020b472073a_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_6f7358ad2426d0f802d9b3ba4342cdb1bb3b077df2089cda3ccc299c3a006715 = $this->env->getExtension("native_profiler");
        $__internal_6f7358ad2426d0f802d9b3ba4342cdb1bb3b077df2089cda3ccc299c3a006715->enter($__internal_6f7358ad2426d0f802d9b3ba4342cdb1bb3b077df2089cda3ccc299c3a006715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_6f7358ad2426d0f802d9b3ba4342cdb1bb3b077df2089cda3ccc299c3a006715->leave($__internal_6f7358ad2426d0f802d9b3ba4342cdb1bb3b077df2089cda3ccc299c3a006715_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Modifier une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}
";
    }
}
