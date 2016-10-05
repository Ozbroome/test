<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c110f93f3926236436d9aa0733de16b7f8395d69141e3de143ffa7d96afe62f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c72abb702459f6ed2ea4c082f694a9695aa08398f39a92bff848c9cbc65cddd = $this->env->getExtension("native_profiler");
        $__internal_7c72abb702459f6ed2ea4c082f694a9695aa08398f39a92bff848c9cbc65cddd->enter($__internal_7c72abb702459f6ed2ea4c082f694a9695aa08398f39a92bff848c9cbc65cddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c72abb702459f6ed2ea4c082f694a9695aa08398f39a92bff848c9cbc65cddd->leave($__internal_7c72abb702459f6ed2ea4c082f694a9695aa08398f39a92bff848c9cbc65cddd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_507998a7419b5b0cb387c875ce51b17e9795ddc5be059406caea7e72ca2850ce = $this->env->getExtension("native_profiler");
        $__internal_507998a7419b5b0cb387c875ce51b17e9795ddc5be059406caea7e72ca2850ce->enter($__internal_507998a7419b5b0cb387c875ce51b17e9795ddc5be059406caea7e72ca2850ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_507998a7419b5b0cb387c875ce51b17e9795ddc5be059406caea7e72ca2850ce->leave($__internal_507998a7419b5b0cb387c875ce51b17e9795ddc5be059406caea7e72ca2850ce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_488e320d6403b75853f6fbbddf82202a45a463bfd8bf303cd4f63fee2ee689c9 = $this->env->getExtension("native_profiler");
        $__internal_488e320d6403b75853f6fbbddf82202a45a463bfd8bf303cd4f63fee2ee689c9->enter($__internal_488e320d6403b75853f6fbbddf82202a45a463bfd8bf303cd4f63fee2ee689c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_488e320d6403b75853f6fbbddf82202a45a463bfd8bf303cd4f63fee2ee689c9->leave($__internal_488e320d6403b75853f6fbbddf82202a45a463bfd8bf303cd4f63fee2ee689c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d1d6de686f17168fc69808460c118af6ce6b7bbe453a0d8dacf1ce742d92ce5 = $this->env->getExtension("native_profiler");
        $__internal_7d1d6de686f17168fc69808460c118af6ce6b7bbe453a0d8dacf1ce742d92ce5->enter($__internal_7d1d6de686f17168fc69808460c118af6ce6b7bbe453a0d8dacf1ce742d92ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d1d6de686f17168fc69808460c118af6ce6b7bbe453a0d8dacf1ce742d92ce5->leave($__internal_7d1d6de686f17168fc69808460c118af6ce6b7bbe453a0d8dacf1ce742d92ce5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
