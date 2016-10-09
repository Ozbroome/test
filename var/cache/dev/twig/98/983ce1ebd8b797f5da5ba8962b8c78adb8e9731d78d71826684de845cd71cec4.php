<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5340c569a192a5ab0233df6d5de33b055099ce81eb80e5e2d57fdebc9fd02457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db72e5ac899808e05ed61cc67fabf262f0f240c9d32548afa3233acc5f64f703 = $this->env->getExtension("native_profiler");
        $__internal_db72e5ac899808e05ed61cc67fabf262f0f240c9d32548afa3233acc5f64f703->enter($__internal_db72e5ac899808e05ed61cc67fabf262f0f240c9d32548afa3233acc5f64f703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db72e5ac899808e05ed61cc67fabf262f0f240c9d32548afa3233acc5f64f703->leave($__internal_db72e5ac899808e05ed61cc67fabf262f0f240c9d32548afa3233acc5f64f703_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b789f0e944a513f39f4348e14742b83a1fa588821c0f31f2b4f4e0d39e2027d = $this->env->getExtension("native_profiler");
        $__internal_1b789f0e944a513f39f4348e14742b83a1fa588821c0f31f2b4f4e0d39e2027d->enter($__internal_1b789f0e944a513f39f4348e14742b83a1fa588821c0f31f2b4f4e0d39e2027d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1b789f0e944a513f39f4348e14742b83a1fa588821c0f31f2b4f4e0d39e2027d->leave($__internal_1b789f0e944a513f39f4348e14742b83a1fa588821c0f31f2b4f4e0d39e2027d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ad95170c04d30a7dc462b5a35eda583757e0a9d86136a31c32db7b927977451 = $this->env->getExtension("native_profiler");
        $__internal_7ad95170c04d30a7dc462b5a35eda583757e0a9d86136a31c32db7b927977451->enter($__internal_7ad95170c04d30a7dc462b5a35eda583757e0a9d86136a31c32db7b927977451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7ad95170c04d30a7dc462b5a35eda583757e0a9d86136a31c32db7b927977451->leave($__internal_7ad95170c04d30a7dc462b5a35eda583757e0a9d86136a31c32db7b927977451_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
