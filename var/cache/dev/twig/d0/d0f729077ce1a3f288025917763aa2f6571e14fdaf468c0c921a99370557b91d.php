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
        $__internal_d176008f2b4bf79d94728451f1fe7b5476c8359aec0cc65c225ff0a92a9b656c = $this->env->getExtension("native_profiler");
        $__internal_d176008f2b4bf79d94728451f1fe7b5476c8359aec0cc65c225ff0a92a9b656c->enter($__internal_d176008f2b4bf79d94728451f1fe7b5476c8359aec0cc65c225ff0a92a9b656c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d176008f2b4bf79d94728451f1fe7b5476c8359aec0cc65c225ff0a92a9b656c->leave($__internal_d176008f2b4bf79d94728451f1fe7b5476c8359aec0cc65c225ff0a92a9b656c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96e6ddc1735529ff23549d9ca279470afb241bb7e213f6b0b5dc3de47df51cd8 = $this->env->getExtension("native_profiler");
        $__internal_96e6ddc1735529ff23549d9ca279470afb241bb7e213f6b0b5dc3de47df51cd8->enter($__internal_96e6ddc1735529ff23549d9ca279470afb241bb7e213f6b0b5dc3de47df51cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_96e6ddc1735529ff23549d9ca279470afb241bb7e213f6b0b5dc3de47df51cd8->leave($__internal_96e6ddc1735529ff23549d9ca279470afb241bb7e213f6b0b5dc3de47df51cd8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25028659e9b4bc06cf567a62ac02203718093c53897747bc0ad157228df65b0d = $this->env->getExtension("native_profiler");
        $__internal_25028659e9b4bc06cf567a62ac02203718093c53897747bc0ad157228df65b0d->enter($__internal_25028659e9b4bc06cf567a62ac02203718093c53897747bc0ad157228df65b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_25028659e9b4bc06cf567a62ac02203718093c53897747bc0ad157228df65b0d->leave($__internal_25028659e9b4bc06cf567a62ac02203718093c53897747bc0ad157228df65b0d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fc38c4f605981671fb61ebce121c4f390afc40a17fea4cd3cb865785de978b3 = $this->env->getExtension("native_profiler");
        $__internal_3fc38c4f605981671fb61ebce121c4f390afc40a17fea4cd3cb865785de978b3->enter($__internal_3fc38c4f605981671fb61ebce121c4f390afc40a17fea4cd3cb865785de978b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3fc38c4f605981671fb61ebce121c4f390afc40a17fea4cd3cb865785de978b3->leave($__internal_3fc38c4f605981671fb61ebce121c4f390afc40a17fea4cd3cb865785de978b3_prof);

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
