<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_9431b3c1815c41e4cd893447a1c6974cb6e39d9a7cb043a3a8064eb9679141b0 extends Twig_Template
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
        $__internal_67fcb5a31d7ac7ee01d2a8d5e20c601982fb7f29bfdacac5e74ea091b913612f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67fcb5a31d7ac7ee01d2a8d5e20c601982fb7f29bfdacac5e74ea091b913612f->enter($__internal_67fcb5a31d7ac7ee01d2a8d5e20c601982fb7f29bfdacac5e74ea091b913612f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_ede563d181a44c450e3fbbf7d0cfefe9fc2d7213a12c75cc9f8e782d74ec1251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede563d181a44c450e3fbbf7d0cfefe9fc2d7213a12c75cc9f8e782d74ec1251->enter($__internal_ede563d181a44c450e3fbbf7d0cfefe9fc2d7213a12c75cc9f8e782d74ec1251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_67fcb5a31d7ac7ee01d2a8d5e20c601982fb7f29bfdacac5e74ea091b913612f->leave($__internal_67fcb5a31d7ac7ee01d2a8d5e20c601982fb7f29bfdacac5e74ea091b913612f_prof);

        
        $__internal_ede563d181a44c450e3fbbf7d0cfefe9fc2d7213a12c75cc9f8e782d74ec1251->leave($__internal_ede563d181a44c450e3fbbf7d0cfefe9fc2d7213a12c75cc9f8e782d74ec1251_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
