<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3ca557c8542371d3b07683b4c59e2be6549a6f746c67bb1e6c7964f15e6e173e extends Twig_Template
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
        $__internal_2bfe8503e6913d04190c9918de04e324ae3404a37dbe1d72dd37678aa083118e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfe8503e6913d04190c9918de04e324ae3404a37dbe1d72dd37678aa083118e->enter($__internal_2bfe8503e6913d04190c9918de04e324ae3404a37dbe1d72dd37678aa083118e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_dd4052f5ee5d6766683a12cc30e41323c31b5bcb78cfec5362f3750edee3959f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4052f5ee5d6766683a12cc30e41323c31b5bcb78cfec5362f3750edee3959f->enter($__internal_dd4052f5ee5d6766683a12cc30e41323c31b5bcb78cfec5362f3750edee3959f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2bfe8503e6913d04190c9918de04e324ae3404a37dbe1d72dd37678aa083118e->leave($__internal_2bfe8503e6913d04190c9918de04e324ae3404a37dbe1d72dd37678aa083118e_prof);

        
        $__internal_dd4052f5ee5d6766683a12cc30e41323c31b5bcb78cfec5362f3750edee3959f->leave($__internal_dd4052f5ee5d6766683a12cc30e41323c31b5bcb78cfec5362f3750edee3959f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
