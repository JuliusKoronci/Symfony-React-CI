<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_f2e9742907312421333f9814132c82b5e3c0e848092f91eafcc01e51acf9ac0b extends Twig_Template
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
        $__internal_438943203479849b6c11662619938141ce770e86dfe28733bf9c0daf2c78c4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438943203479849b6c11662619938141ce770e86dfe28733bf9c0daf2c78c4c2->enter($__internal_438943203479849b6c11662619938141ce770e86dfe28733bf9c0daf2c78c4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_df75e9a5c5408b677f94ea50319e5b083e71035791e67be6d9ffc1495b8398a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df75e9a5c5408b677f94ea50319e5b083e71035791e67be6d9ffc1495b8398a8->enter($__internal_df75e9a5c5408b677f94ea50319e5b083e71035791e67be6d9ffc1495b8398a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_438943203479849b6c11662619938141ce770e86dfe28733bf9c0daf2c78c4c2->leave($__internal_438943203479849b6c11662619938141ce770e86dfe28733bf9c0daf2c78c4c2_prof);

        
        $__internal_df75e9a5c5408b677f94ea50319e5b083e71035791e67be6d9ffc1495b8398a8->leave($__internal_df75e9a5c5408b677f94ea50319e5b083e71035791e67be6d9ffc1495b8398a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
