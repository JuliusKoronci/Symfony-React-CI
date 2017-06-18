<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c6c4ab46bef6eb3703a1ef22bfadd5e9bd0259fa1191c4c3da36219bf7342f38 extends Twig_Template
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
        $__internal_b9017192598b6d002ff89275c9bcd3256fa9c8b5edf814d6cbd4e158f6644aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9017192598b6d002ff89275c9bcd3256fa9c8b5edf814d6cbd4e158f6644aed->enter($__internal_b9017192598b6d002ff89275c9bcd3256fa9c8b5edf814d6cbd4e158f6644aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_87f12062ae28345fa314346c5a34609d50f7bd11167c5e49a15aaa13b5f74880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f12062ae28345fa314346c5a34609d50f7bd11167c5e49a15aaa13b5f74880->enter($__internal_87f12062ae28345fa314346c5a34609d50f7bd11167c5e49a15aaa13b5f74880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b9017192598b6d002ff89275c9bcd3256fa9c8b5edf814d6cbd4e158f6644aed->leave($__internal_b9017192598b6d002ff89275c9bcd3256fa9c8b5edf814d6cbd4e158f6644aed_prof);

        
        $__internal_87f12062ae28345fa314346c5a34609d50f7bd11167c5e49a15aaa13b5f74880->leave($__internal_87f12062ae28345fa314346c5a34609d50f7bd11167c5e49a15aaa13b5f74880_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
