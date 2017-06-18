<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_beae75847698ba6566a7e8095f2ef6b2adeb5b6a83c66be891ea098810e43850 extends Twig_Template
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
        $__internal_42a3f4e7c5cde7a720bebb0caa612a6b180fcd9832849ca6dc1c54065cf61070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42a3f4e7c5cde7a720bebb0caa612a6b180fcd9832849ca6dc1c54065cf61070->enter($__internal_42a3f4e7c5cde7a720bebb0caa612a6b180fcd9832849ca6dc1c54065cf61070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ffdb1106f643699e9dac882067d1039ea2ff808b91c15793683d2181d8ed8909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdb1106f643699e9dac882067d1039ea2ff808b91c15793683d2181d8ed8909->enter($__internal_ffdb1106f643699e9dac882067d1039ea2ff808b91c15793683d2181d8ed8909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_42a3f4e7c5cde7a720bebb0caa612a6b180fcd9832849ca6dc1c54065cf61070->leave($__internal_42a3f4e7c5cde7a720bebb0caa612a6b180fcd9832849ca6dc1c54065cf61070_prof);

        
        $__internal_ffdb1106f643699e9dac882067d1039ea2ff808b91c15793683d2181d8ed8909->leave($__internal_ffdb1106f643699e9dac882067d1039ea2ff808b91c15793683d2181d8ed8909_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
