<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d3da08b1907f48b2b05934df4d567efd0817eeb338965c3f43a2f27fe7a71ad4 extends Twig_Template
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
        $__internal_8bc3123f90c794e3f35ebba0ebf18dd334909663b3c816b4f916d9b1b14de0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc3123f90c794e3f35ebba0ebf18dd334909663b3c816b4f916d9b1b14de0c1->enter($__internal_8bc3123f90c794e3f35ebba0ebf18dd334909663b3c816b4f916d9b1b14de0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6072493527a46730607528429a6b6916c9ff857b74b99a0c44695adf2730da99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6072493527a46730607528429a6b6916c9ff857b74b99a0c44695adf2730da99->enter($__internal_6072493527a46730607528429a6b6916c9ff857b74b99a0c44695adf2730da99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_8bc3123f90c794e3f35ebba0ebf18dd334909663b3c816b4f916d9b1b14de0c1->leave($__internal_8bc3123f90c794e3f35ebba0ebf18dd334909663b3c816b4f916d9b1b14de0c1_prof);

        
        $__internal_6072493527a46730607528429a6b6916c9ff857b74b99a0c44695adf2730da99->leave($__internal_6072493527a46730607528429a6b6916c9ff857b74b99a0c44695adf2730da99_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
