<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4d2f00002d37e58db24c0897247f71b0a2a955032a3979a6c84d10defebba817 extends Twig_Template
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
        $__internal_b5cb0b1ec9ed7c8e7bbaadece6379a38254d2fbd6a1ef5dbb18bfc2163fdcfd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5cb0b1ec9ed7c8e7bbaadece6379a38254d2fbd6a1ef5dbb18bfc2163fdcfd3->enter($__internal_b5cb0b1ec9ed7c8e7bbaadece6379a38254d2fbd6a1ef5dbb18bfc2163fdcfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_215ac320a6ea1c388013051a90fb9aafa4bbae2c6c5f6bcfe14b492018b3a81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215ac320a6ea1c388013051a90fb9aafa4bbae2c6c5f6bcfe14b492018b3a81d->enter($__internal_215ac320a6ea1c388013051a90fb9aafa4bbae2c6c5f6bcfe14b492018b3a81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b5cb0b1ec9ed7c8e7bbaadece6379a38254d2fbd6a1ef5dbb18bfc2163fdcfd3->leave($__internal_b5cb0b1ec9ed7c8e7bbaadece6379a38254d2fbd6a1ef5dbb18bfc2163fdcfd3_prof);

        
        $__internal_215ac320a6ea1c388013051a90fb9aafa4bbae2c6c5f6bcfe14b492018b3a81d->leave($__internal_215ac320a6ea1c388013051a90fb9aafa4bbae2c6c5f6bcfe14b492018b3a81d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
