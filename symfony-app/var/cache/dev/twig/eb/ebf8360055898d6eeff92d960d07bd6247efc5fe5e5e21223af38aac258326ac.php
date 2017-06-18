<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_57982a0efb4b93ce16e2e7cd8690d46b48d67ff6f447dd19b05d5bf058e76054 extends Twig_Template
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
        $__internal_62cf2b4bdfd2a7d9183859b513428576f495c368843b79c516f24d3df52ba3df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62cf2b4bdfd2a7d9183859b513428576f495c368843b79c516f24d3df52ba3df->enter($__internal_62cf2b4bdfd2a7d9183859b513428576f495c368843b79c516f24d3df52ba3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c3fd11ed537554dd675098f4daab567b20f4c1884eafee7937442799a2f7279d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fd11ed537554dd675098f4daab567b20f4c1884eafee7937442799a2f7279d->enter($__internal_c3fd11ed537554dd675098f4daab567b20f4c1884eafee7937442799a2f7279d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_62cf2b4bdfd2a7d9183859b513428576f495c368843b79c516f24d3df52ba3df->leave($__internal_62cf2b4bdfd2a7d9183859b513428576f495c368843b79c516f24d3df52ba3df_prof);

        
        $__internal_c3fd11ed537554dd675098f4daab567b20f4c1884eafee7937442799a2f7279d->leave($__internal_c3fd11ed537554dd675098f4daab567b20f4c1884eafee7937442799a2f7279d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
