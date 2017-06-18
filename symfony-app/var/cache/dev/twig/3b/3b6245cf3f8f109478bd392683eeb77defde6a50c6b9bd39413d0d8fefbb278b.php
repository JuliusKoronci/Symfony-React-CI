<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d08b70a4387c87f082489da1c967ffe1c49da82253f40c19053e9bf07da45a6c extends Twig_Template
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
        $__internal_918a213202ddb3c7e078bb183e3f29ffafeb5f7104810f7ef81441db232966ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918a213202ddb3c7e078bb183e3f29ffafeb5f7104810f7ef81441db232966ad->enter($__internal_918a213202ddb3c7e078bb183e3f29ffafeb5f7104810f7ef81441db232966ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_547c7ea08337c293150c0f269999bd920de272644f6f69614b884afca2449279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547c7ea08337c293150c0f269999bd920de272644f6f69614b884afca2449279->enter($__internal_547c7ea08337c293150c0f269999bd920de272644f6f69614b884afca2449279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_918a213202ddb3c7e078bb183e3f29ffafeb5f7104810f7ef81441db232966ad->leave($__internal_918a213202ddb3c7e078bb183e3f29ffafeb5f7104810f7ef81441db232966ad_prof);

        
        $__internal_547c7ea08337c293150c0f269999bd920de272644f6f69614b884afca2449279->leave($__internal_547c7ea08337c293150c0f269999bd920de272644f6f69614b884afca2449279_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
