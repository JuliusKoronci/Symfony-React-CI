<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b084f460aecdf86558e827782ed85545ebb532710ad0a34219eb1efb9f6a38cf extends Twig_Template
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
        $__internal_e0709c3589cf7b96391935495c9aa8360268ee1f7cc1d8523ffc4a5a04557c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0709c3589cf7b96391935495c9aa8360268ee1f7cc1d8523ffc4a5a04557c74->enter($__internal_e0709c3589cf7b96391935495c9aa8360268ee1f7cc1d8523ffc4a5a04557c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a3c11ad55184dce452dea0f8fdc867dae2f96d4d7573c3da7dd758873dc5726e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c11ad55184dce452dea0f8fdc867dae2f96d4d7573c3da7dd758873dc5726e->enter($__internal_a3c11ad55184dce452dea0f8fdc867dae2f96d4d7573c3da7dd758873dc5726e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e0709c3589cf7b96391935495c9aa8360268ee1f7cc1d8523ffc4a5a04557c74->leave($__internal_e0709c3589cf7b96391935495c9aa8360268ee1f7cc1d8523ffc4a5a04557c74_prof);

        
        $__internal_a3c11ad55184dce452dea0f8fdc867dae2f96d4d7573c3da7dd758873dc5726e->leave($__internal_a3c11ad55184dce452dea0f8fdc867dae2f96d4d7573c3da7dd758873dc5726e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
