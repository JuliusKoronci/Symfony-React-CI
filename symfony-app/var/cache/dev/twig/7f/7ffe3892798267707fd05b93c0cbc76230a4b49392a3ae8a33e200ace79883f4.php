<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a05339de75e5b58bc706aaf676a98d0be829e19c6a0212ef7516a03186a901b1 extends Twig_Template
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
        $__internal_e32d1486a92fa19b34e9d4c95ccd4129f09eeedc43fdc3d230c0fb775861c3e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32d1486a92fa19b34e9d4c95ccd4129f09eeedc43fdc3d230c0fb775861c3e8->enter($__internal_e32d1486a92fa19b34e9d4c95ccd4129f09eeedc43fdc3d230c0fb775861c3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_2eb865a2ca0a16fde39b25e5b7bc0afc0b91a8b6cef3d5daf974a7a449a5c363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb865a2ca0a16fde39b25e5b7bc0afc0b91a8b6cef3d5daf974a7a449a5c363->enter($__internal_2eb865a2ca0a16fde39b25e5b7bc0afc0b91a8b6cef3d5daf974a7a449a5c363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e32d1486a92fa19b34e9d4c95ccd4129f09eeedc43fdc3d230c0fb775861c3e8->leave($__internal_e32d1486a92fa19b34e9d4c95ccd4129f09eeedc43fdc3d230c0fb775861c3e8_prof);

        
        $__internal_2eb865a2ca0a16fde39b25e5b7bc0afc0b91a8b6cef3d5daf974a7a449a5c363->leave($__internal_2eb865a2ca0a16fde39b25e5b7bc0afc0b91a8b6cef3d5daf974a7a449a5c363_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
