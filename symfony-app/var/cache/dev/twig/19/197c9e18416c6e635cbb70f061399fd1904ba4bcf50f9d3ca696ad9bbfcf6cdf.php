<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3ec16240a2a44270274e6b87699fec7bb8f1bd683f9e983fb5b6df294a26bb3d extends Twig_Template
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
        $__internal_fd4efac6ac5170de489ee7ab0b73f7bdaeb9928cc98c878731b72db75e792b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4efac6ac5170de489ee7ab0b73f7bdaeb9928cc98c878731b72db75e792b15->enter($__internal_fd4efac6ac5170de489ee7ab0b73f7bdaeb9928cc98c878731b72db75e792b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4a76f4a70e8c29a63a1fd63feae273da3f65ed3e57a2fbaa3ce1fb7abc15ca29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a76f4a70e8c29a63a1fd63feae273da3f65ed3e57a2fbaa3ce1fb7abc15ca29->enter($__internal_4a76f4a70e8c29a63a1fd63feae273da3f65ed3e57a2fbaa3ce1fb7abc15ca29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_fd4efac6ac5170de489ee7ab0b73f7bdaeb9928cc98c878731b72db75e792b15->leave($__internal_fd4efac6ac5170de489ee7ab0b73f7bdaeb9928cc98c878731b72db75e792b15_prof);

        
        $__internal_4a76f4a70e8c29a63a1fd63feae273da3f65ed3e57a2fbaa3ce1fb7abc15ca29->leave($__internal_4a76f4a70e8c29a63a1fd63feae273da3f65ed3e57a2fbaa3ce1fb7abc15ca29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/juliuskoronci/Desktop/sites/CI/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
