<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f5536c0937f62d096d262cbceb73150a0239a6377f117dc99ffc172f5c3806ed extends Twig_Template
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
        $__internal_c50e4a64fd6f9b970ce5b26e5ca025f86b56ef87c16989677ec9ae243850f4bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50e4a64fd6f9b970ce5b26e5ca025f86b56ef87c16989677ec9ae243850f4bd->enter($__internal_c50e4a64fd6f9b970ce5b26e5ca025f86b56ef87c16989677ec9ae243850f4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_4851f7545a8272e97ae6377fbf17dfa96d5f9428099b2083dd0fd28319de25cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4851f7545a8272e97ae6377fbf17dfa96d5f9428099b2083dd0fd28319de25cc->enter($__internal_4851f7545a8272e97ae6377fbf17dfa96d5f9428099b2083dd0fd28319de25cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_c50e4a64fd6f9b970ce5b26e5ca025f86b56ef87c16989677ec9ae243850f4bd->leave($__internal_c50e4a64fd6f9b970ce5b26e5ca025f86b56ef87c16989677ec9ae243850f4bd_prof);

        
        $__internal_4851f7545a8272e97ae6377fbf17dfa96d5f9428099b2083dd0fd28319de25cc->leave($__internal_4851f7545a8272e97ae6377fbf17dfa96d5f9428099b2083dd0fd28319de25cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
