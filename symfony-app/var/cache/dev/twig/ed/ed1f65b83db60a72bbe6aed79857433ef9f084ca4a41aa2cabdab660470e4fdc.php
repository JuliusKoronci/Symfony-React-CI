<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_ae1a6c3a01211a34870aaf51add60211f2b565f1bc8aa3ad059d84ccfc880588 extends Twig_Template
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
        $__internal_ccca827bd4a85ada7ced711039a2ead90f1d912d7f147599ee1aec9126e0221f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccca827bd4a85ada7ced711039a2ead90f1d912d7f147599ee1aec9126e0221f->enter($__internal_ccca827bd4a85ada7ced711039a2ead90f1d912d7f147599ee1aec9126e0221f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_2b03915dc0c190239712bc7c8a197506562062c5da44f3f0511ceea5b352b4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b03915dc0c190239712bc7c8a197506562062c5da44f3f0511ceea5b352b4c3->enter($__internal_2b03915dc0c190239712bc7c8a197506562062c5da44f3f0511ceea5b352b4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_ccca827bd4a85ada7ced711039a2ead90f1d912d7f147599ee1aec9126e0221f->leave($__internal_ccca827bd4a85ada7ced711039a2ead90f1d912d7f147599ee1aec9126e0221f_prof);

        
        $__internal_2b03915dc0c190239712bc7c8a197506562062c5da44f3f0511ceea5b352b4c3->leave($__internal_2b03915dc0c190239712bc7c8a197506562062c5da44f3f0511ceea5b352b4c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
