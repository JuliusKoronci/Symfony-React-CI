<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_87b4c01b158187ceb8bd1ece7762d754b3087214f16aaeab11097279e47b53d2 extends Twig_Template
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
        $__internal_cfa6583a243d703ea40e1be14e36fabe3b76dfa7f73de128182f977f789f1a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa6583a243d703ea40e1be14e36fabe3b76dfa7f73de128182f977f789f1a24->enter($__internal_cfa6583a243d703ea40e1be14e36fabe3b76dfa7f73de128182f977f789f1a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_51818db440b63c24ce7d93b121907d05312c0a769d71d7cb3f29857ce9bd9129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51818db440b63c24ce7d93b121907d05312c0a769d71d7cb3f29857ce9bd9129->enter($__internal_51818db440b63c24ce7d93b121907d05312c0a769d71d7cb3f29857ce9bd9129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_cfa6583a243d703ea40e1be14e36fabe3b76dfa7f73de128182f977f789f1a24->leave($__internal_cfa6583a243d703ea40e1be14e36fabe3b76dfa7f73de128182f977f789f1a24_prof);

        
        $__internal_51818db440b63c24ce7d93b121907d05312c0a769d71d7cb3f29857ce9bd9129->leave($__internal_51818db440b63c24ce7d93b121907d05312c0a769d71d7cb3f29857ce9bd9129_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
