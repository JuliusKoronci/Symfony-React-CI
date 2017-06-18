<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f07344bf86418e428d3659a515e376e2f90219c9e8749d91dd9182c213bafb45 extends Twig_Template
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
        $__internal_00d986c45c0ced8716db6eb86db34ace18d0cae9c0d520c32e3ce3aaa1b143e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d986c45c0ced8716db6eb86db34ace18d0cae9c0d520c32e3ce3aaa1b143e4->enter($__internal_00d986c45c0ced8716db6eb86db34ace18d0cae9c0d520c32e3ce3aaa1b143e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_203fdef58c1dee86aabfcf3a2c3f39d8a7476c2ed791611c5361c54497354058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203fdef58c1dee86aabfcf3a2c3f39d8a7476c2ed791611c5361c54497354058->enter($__internal_203fdef58c1dee86aabfcf3a2c3f39d8a7476c2ed791611c5361c54497354058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_00d986c45c0ced8716db6eb86db34ace18d0cae9c0d520c32e3ce3aaa1b143e4->leave($__internal_00d986c45c0ced8716db6eb86db34ace18d0cae9c0d520c32e3ce3aaa1b143e4_prof);

        
        $__internal_203fdef58c1dee86aabfcf3a2c3f39d8a7476c2ed791611c5361c54497354058->leave($__internal_203fdef58c1dee86aabfcf3a2c3f39d8a7476c2ed791611c5361c54497354058_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
