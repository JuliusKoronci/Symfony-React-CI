<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b513084f4c3de4fd7d132f568d980e58d32031fc5460db9ae42b3c8c1b7cd24a extends Twig_Template
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
        $__internal_34f1a408cea4ab192cb95da66345a09f333b5fa63784ab340fd625305cf55ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f1a408cea4ab192cb95da66345a09f333b5fa63784ab340fd625305cf55ddb->enter($__internal_34f1a408cea4ab192cb95da66345a09f333b5fa63784ab340fd625305cf55ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_18fb0df4201730493f130e1e35d7fa0c47416e2c538a18dc6740bd65add94904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fb0df4201730493f130e1e35d7fa0c47416e2c538a18dc6740bd65add94904->enter($__internal_18fb0df4201730493f130e1e35d7fa0c47416e2c538a18dc6740bd65add94904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_34f1a408cea4ab192cb95da66345a09f333b5fa63784ab340fd625305cf55ddb->leave($__internal_34f1a408cea4ab192cb95da66345a09f333b5fa63784ab340fd625305cf55ddb_prof);

        
        $__internal_18fb0df4201730493f130e1e35d7fa0c47416e2c538a18dc6740bd65add94904->leave($__internal_18fb0df4201730493f130e1e35d7fa0c47416e2c538a18dc6740bd65add94904_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
