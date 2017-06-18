<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_76c43388ec57f1008468fcb77bea952129825f8ea2be52e81b60e8857737dd4d extends Twig_Template
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
        $__internal_b301cd2624bac2843fcf07c49b77d1437c1018cca231570ea1100467d73ad9c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b301cd2624bac2843fcf07c49b77d1437c1018cca231570ea1100467d73ad9c7->enter($__internal_b301cd2624bac2843fcf07c49b77d1437c1018cca231570ea1100467d73ad9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_2f1e57f686f98f8f96b44af10feb1ffae3958cec06581e902f871ea30d9b668d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1e57f686f98f8f96b44af10feb1ffae3958cec06581e902f871ea30d9b668d->enter($__internal_2f1e57f686f98f8f96b44af10feb1ffae3958cec06581e902f871ea30d9b668d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new Twig_Error_Runtime('Variable "month" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new Twig_Error_Runtime('Variable "day" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b301cd2624bac2843fcf07c49b77d1437c1018cca231570ea1100467d73ad9c7->leave($__internal_b301cd2624bac2843fcf07c49b77d1437c1018cca231570ea1100467d73ad9c7_prof);

        
        $__internal_2f1e57f686f98f8f96b44af10feb1ffae3958cec06581e902f871ea30d9b668d->leave($__internal_2f1e57f686f98f8f96b44af10feb1ffae3958cec06581e902f871ea30d9b668d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
