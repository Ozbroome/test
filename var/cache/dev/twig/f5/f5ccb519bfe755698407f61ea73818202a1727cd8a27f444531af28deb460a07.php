<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_04f5e3896f77acedd1e2c8f14e10537d1db83002d85d187d58e56f12e4319d15 extends Twig_Template
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
        $__internal_cdeacc9e1f15381da7220d4e670e7c1bd16df79a9985e0ba5ccd6c164f6607ae = $this->env->getExtension("native_profiler");
        $__internal_cdeacc9e1f15381da7220d4e670e7c1bd16df79a9985e0ba5ccd6c164f6607ae->enter($__internal_cdeacc9e1f15381da7220d4e670e7c1bd16df79a9985e0ba5ccd6c164f6607ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdeacc9e1f15381da7220d4e670e7c1bd16df79a9985e0ba5ccd6c164f6607ae->leave($__internal_cdeacc9e1f15381da7220d4e670e7c1bd16df79a9985e0ba5ccd6c164f6607ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_134df1c9db8f1861efd1a998244baf0af639c547a3bd9ca5e83d053a32671b62 = $this->env->getExtension("native_profiler");
        $__internal_134df1c9db8f1861efd1a998244baf0af639c547a3bd9ca5e83d053a32671b62->enter($__internal_134df1c9db8f1861efd1a998244baf0af639c547a3bd9ca5e83d053a32671b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_134df1c9db8f1861efd1a998244baf0af639c547a3bd9ca5e83d053a32671b62->leave($__internal_134df1c9db8f1861efd1a998244baf0af639c547a3bd9ca5e83d053a32671b62_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_90045faaf2b69ad762bfe0479860e7e465285bbe6d34d410484643305bb5e562 = $this->env->getExtension("native_profiler");
        $__internal_90045faaf2b69ad762bfe0479860e7e465285bbe6d34d410484643305bb5e562->enter($__internal_90045faaf2b69ad762bfe0479860e7e465285bbe6d34d410484643305bb5e562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_90045faaf2b69ad762bfe0479860e7e465285bbe6d34d410484643305bb5e562->leave($__internal_90045faaf2b69ad762bfe0479860e7e465285bbe6d34d410484643305bb5e562_prof);

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
