<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_6fb02bb81259441d4a1076af8c36e064977aecd001eda626dba62f9dd7fde7cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60a20eaf91b7b2ae880c5a1fe2463d61cb0d3b9390de11b9cb40be40ec8fbbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a20eaf91b7b2ae880c5a1fe2463d61cb0d3b9390de11b9cb40be40ec8fbbdc->enter($__internal_60a20eaf91b7b2ae880c5a1fe2463d61cb0d3b9390de11b9cb40be40ec8fbbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_2c5216572f2bd5d2d970c22a581c96ad867cbf47ea7ffb22ed63d617810dc42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c5216572f2bd5d2d970c22a581c96ad867cbf47ea7ffb22ed63d617810dc42b->enter($__internal_2c5216572f2bd5d2d970c22a581c96ad867cbf47ea7ffb22ed63d617810dc42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60a20eaf91b7b2ae880c5a1fe2463d61cb0d3b9390de11b9cb40be40ec8fbbdc->leave($__internal_60a20eaf91b7b2ae880c5a1fe2463d61cb0d3b9390de11b9cb40be40ec8fbbdc_prof);

        
        $__internal_2c5216572f2bd5d2d970c22a581c96ad867cbf47ea7ffb22ed63d617810dc42b->leave($__internal_2c5216572f2bd5d2d970c22a581c96ad867cbf47ea7ffb22ed63d617810dc42b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_919615b1f507f32cd14aaca9f26af9387698379b3c1fbef6a2fb9236f1e05356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919615b1f507f32cd14aaca9f26af9387698379b3c1fbef6a2fb9236f1e05356->enter($__internal_919615b1f507f32cd14aaca9f26af9387698379b3c1fbef6a2fb9236f1e05356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f6a863d17d0aef07024ca73b5dc2ccae10af1bfb612fc2f268f0e927a822ff08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a863d17d0aef07024ca73b5dc2ccae10af1bfb612fc2f268f0e927a822ff08->enter($__internal_f6a863d17d0aef07024ca73b5dc2ccae10af1bfb612fc2f268f0e927a822ff08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f6a863d17d0aef07024ca73b5dc2ccae10af1bfb612fc2f268f0e927a822ff08->leave($__internal_f6a863d17d0aef07024ca73b5dc2ccae10af1bfb612fc2f268f0e927a822ff08_prof);

        
        $__internal_919615b1f507f32cd14aaca9f26af9387698379b3c1fbef6a2fb9236f1e05356->leave($__internal_919615b1f507f32cd14aaca9f26af9387698379b3c1fbef6a2fb9236f1e05356_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3492407160e66336b61cd04ee4ec67d16cc5eb46b3b0aa39f1233c87c5ce6f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3492407160e66336b61cd04ee4ec67d16cc5eb46b3b0aa39f1233c87c5ce6f7->enter($__internal_b3492407160e66336b61cd04ee4ec67d16cc5eb46b3b0aa39f1233c87c5ce6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01889c8471b0ce199b207dc796456107a7185c508993d842492de8420640f0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01889c8471b0ce199b207dc796456107a7185c508993d842492de8420640f0e2->enter($__internal_01889c8471b0ce199b207dc796456107a7185c508993d842492de8420640f0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_01889c8471b0ce199b207dc796456107a7185c508993d842492de8420640f0e2->leave($__internal_01889c8471b0ce199b207dc796456107a7185c508993d842492de8420640f0e2_prof);

        
        $__internal_b3492407160e66336b61cd04ee4ec67d16cc5eb46b3b0aa39f1233c87c5ce6f7->leave($__internal_b3492407160e66336b61cd04ee4ec67d16cc5eb46b3b0aa39f1233c87c5ce6f7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
