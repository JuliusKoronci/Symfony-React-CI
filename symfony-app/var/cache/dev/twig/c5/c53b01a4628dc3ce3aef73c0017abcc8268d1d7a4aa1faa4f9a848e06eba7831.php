<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_434d8e451c1d7ce0cff1ecbd03ed25a1c6d7871d02c763f16e67898fa2af7890 extends Twig_Template
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
        $__internal_b607a1513f4093776ca56db9341a34f92140f2577ecee6a2aca410f033183584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b607a1513f4093776ca56db9341a34f92140f2577ecee6a2aca410f033183584->enter($__internal_b607a1513f4093776ca56db9341a34f92140f2577ecee6a2aca410f033183584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_9a792d8d5e9c3edd2e11f983e6d94d2fdc86760f91e3953048ba17b5917570fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a792d8d5e9c3edd2e11f983e6d94d2fdc86760f91e3953048ba17b5917570fe->enter($__internal_9a792d8d5e9c3edd2e11f983e6d94d2fdc86760f91e3953048ba17b5917570fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_b607a1513f4093776ca56db9341a34f92140f2577ecee6a2aca410f033183584->leave($__internal_b607a1513f4093776ca56db9341a34f92140f2577ecee6a2aca410f033183584_prof);

        
        $__internal_9a792d8d5e9c3edd2e11f983e6d94d2fdc86760f91e3953048ba17b5917570fe->leave($__internal_9a792d8d5e9c3edd2e11f983e6d94d2fdc86760f91e3953048ba17b5917570fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
