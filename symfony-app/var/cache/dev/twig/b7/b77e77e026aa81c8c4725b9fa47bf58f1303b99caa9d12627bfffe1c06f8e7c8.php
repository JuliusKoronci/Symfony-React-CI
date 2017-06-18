<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ec50c30cf7bea86286bff82a94c4e2ca475e24a29083d71aef6684108a17bccd extends Twig_Template
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
        $__internal_e3c12d3ca3f69c422806f42ac748d1709e1ded79785c6a80ce1d01dd38273c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c12d3ca3f69c422806f42ac748d1709e1ded79785c6a80ce1d01dd38273c21->enter($__internal_e3c12d3ca3f69c422806f42ac748d1709e1ded79785c6a80ce1d01dd38273c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_96709263530857427afc108b044ab5e9c79401e1b7ab28359afdb756087e5de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96709263530857427afc108b044ab5e9c79401e1b7ab28359afdb756087e5de6->enter($__internal_96709263530857427afc108b044ab5e9c79401e1b7ab28359afdb756087e5de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e3c12d3ca3f69c422806f42ac748d1709e1ded79785c6a80ce1d01dd38273c21->leave($__internal_e3c12d3ca3f69c422806f42ac748d1709e1ded79785c6a80ce1d01dd38273c21_prof);

        
        $__internal_96709263530857427afc108b044ab5e9c79401e1b7ab28359afdb756087e5de6->leave($__internal_96709263530857427afc108b044ab5e9c79401e1b7ab28359afdb756087e5de6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
