<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* E01Bundle:symfony2cheatsheet:translations.html.twig */
class __TwigTemplate_27ebbc1a0a956af763b6a28f2a9aaf195238fd20b100533d5186e619784daba6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "E01Bundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "E01Bundle:symfony2cheatsheet:translations.html.twig"));

        $this->parent = $this->loadTemplate("E01Bundle:Default:base.html.twig", "E01Bundle:symfony2cheatsheet:translations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <p>Translations are handled by a Translator service that uses the user's locale to lookup and return translated messages. Before using it, enable the Translator in your configuration:</p>

";
        // line 9
        echo "<pre><code># app/config/config.yml
framework:
    translator: { fallback: en }
    default_locale: en
</code></pre>";
        echo "

    <p><strong>Basic translation</strong></p>

";
        // line 15
        echo "<pre><code>\$t = \$this-&gt;get('translator')-&gt;trans('Symfony2 is great');
\$t = \$this-&gt;get('translator')-&gt;trans('Hello %name%', array('%name%' =&gt; \$name));
</code></pre>";
        echo "

    <p>When this code is executed, Symfony2 will attempt to translate the message \"Symfony2 is great\" based on the locale of the user.</p>

";
        // line 35
        echo "<pre><code>&lt;!-- messages.fr.xliff --&gt;
&lt;?xml version=\"1.0\"?&gt;
&lt;xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\"&gt;
    &lt;file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\"&gt;
        &lt;body&gt;
            &lt;trans-unit id=\"1\"&gt;
            &lt;source&gt;Symfony2 is great&lt;/source&gt;
            &lt;target&gt;J'aime Symfony2&lt;/target&gt;
            &lt;/trans-unit&gt;
            &lt;trans-unit id=\"2\"&gt;
            &lt;source&gt;Hello %name%&lt;/source&gt;
            &lt;target&gt;Bonjour %name%&lt;/target&gt;
            &lt;/trans-unit&gt;
        &lt;/body&gt;
    &lt;/file&gt;
&lt;/xliff&gt;
</code></pre>";
        echo "

    <p>Each time you create a new translation resource (or install a bundle that includes a translation resource), be sure to clear your cache so that Symfony can discover the new translation resource:</p>

    <p><strong>Using Real or Keyword Messages</strong></p>

";
        // line 43
        echo "<pre><code>\$t = \$translator-&gt;trans('Symfony2 is great');
\$t = \$translator-&gt;trans('symfony2.great');
</code></pre>";
        echo "

    <p>In the first method, messages are written in the language of the default locale (English in this case). That message is then used as the \"id\" when creating translations.
        In the second method, messages are actually \"keywords\" that convey the idea of the message. The keyword message is then used as the \"id\" for any translations. In this case, translations must be made for the default locale (i.e. to translate symfony2.great to Symfony2 is great).</p>

";
        // line 52
        echo "<pre><code>symfony2.is.great: Symfony2 is great
symfony2.is.amazing: Symfony2 is amazing
symfony2.has.bundles: Symfony2 has bundles
user.login: Login
</code></pre>";
        echo "

    <p><strong>Using Message Domains</strong></p>

    <p>When translating strings that are not in the default domain (messages), you must specify the domain as the third argument of trans():</p>

";
        // line 63
        echo "<pre><code>* messages.fr.xliff
* admin.fr.xliff
* navigation.fr.xliff

\$this-&gt;get('translator')-&gt;trans('Symfony2 is great', array(), 'admin');
</code></pre>";
        echo "

    <p><strong>Pluralization</strong></p>

    <p>To translate pluralized messages, use the transChoice() method:</p>

";
        // line 74
        echo "<pre><code>\$t = \$this-&gt;get('translator')-&gt;transChoice(
    'There is one apple|There are %count% apples',
    10,
    array('%count%' =&gt; 10)
);
</code></pre>";
        echo "

    <h3>Translations in Templates</h3>

    <p>Translating in Twig templates example:</p>

";
        // line 97
        echo "<pre><code>//you can set de translation domain for entire twig temples
{% trans_default_domain \"app\" %}

{% trans %}Hello %name%{% endtrans %}

{% transchoice count %}
    {0} There are no apples|{1} There is one apple|]1,Inf] There are %count% apples
{% endtranschoice %}

//variables traduction
{{ message|trans }}

{{ message|transchoice(5) }}

{{ message|trans({'%name%': 'Fabien'}, \"app\") }}

{{ message|transchoice(5, {'%name%': 'Fabien'}, 'app') }}
</code></pre>";
        echo "

    <p>If you need to use the percent character (%) in a string, escape it by doubling it: ";
        // line 99
        echo "{% trans %}Percent: %percent%%%{% endtrans %}";
        echo "</p>

    <h3>Translating Database Content</h3>

    <p>The translation of database content should be handled by Doctrine through the
        <a href=\"https://github.com/l3pp4rd/DoctrineExtensions/blob/master/README.md\">Translatable Extension</a></p>

    <p><strong>Translating constraint messages</strong></p>

";
        // line 113
        echo "<pre><code># src/Acme/BlogBundle/Resources/config/validation.yml
Acme\\BlogBundle\\Entity\\Author:
    properties:
        name:
            - NotBlank: { message: \"author.name.not_blank\" }
</code></pre>";
        echo "

    <p>Create a translation file under the validators catalog:</p>

";
        // line 129
        echo "<pre><code>&lt;!-- validators.en.xliff --&gt;
&lt;?xml version=\"1.0\"?&gt;
&lt;xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\"&gt;
    &lt;file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\"&gt;
        &lt;body&gt;
            &lt;trans-unit id=\"1\"&gt;
            &lt;source&gt;author.name.not_blank&lt;/source&gt;
            &lt;target&gt;Please enter an author name.&lt;/target&gt;
            &lt;/trans-unit&gt;
        &lt;/body&gt;
    &lt;/file&gt;
&lt;/xliff&gt;
</code></pre>";
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "E01Bundle:symfony2cheatsheet:translations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 129,  185 => 113,  173 => 99,  151 => 97,  137 => 74,  123 => 63,  110 => 52,  100 => 43,  75 => 35,  66 => 15,  55 => 9,  51 => 3,  45 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"E01Bundle:Default:base.html.twig\" %}
{% block content %}
    <p>Translations are handled by a Translator service that uses the user's locale to lookup and return translated messages. Before using it, enable the Translator in your configuration:</p>

{% raw %}<pre><code># app/config/config.yml
framework:
    translator: { fallback: en }
    default_locale: en
</code></pre>{% endraw %}

    <p><strong>Basic translation</strong></p>

{% raw %}<pre><code>\$t = \$this-&gt;get('translator')-&gt;trans('Symfony2 is great');
\$t = \$this-&gt;get('translator')-&gt;trans('Hello %name%', array('%name%' =&gt; \$name));
</code></pre>{% endraw %}

    <p>When this code is executed, Symfony2 will attempt to translate the message \"Symfony2 is great\" based on the locale of the user.</p>

{% raw %}<pre><code>&lt;!-- messages.fr.xliff --&gt;
&lt;?xml version=\"1.0\"?&gt;
&lt;xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\"&gt;
    &lt;file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\"&gt;
        &lt;body&gt;
            &lt;trans-unit id=\"1\"&gt;
            &lt;source&gt;Symfony2 is great&lt;/source&gt;
            &lt;target&gt;J'aime Symfony2&lt;/target&gt;
            &lt;/trans-unit&gt;
            &lt;trans-unit id=\"2\"&gt;
            &lt;source&gt;Hello %name%&lt;/source&gt;
            &lt;target&gt;Bonjour %name%&lt;/target&gt;
            &lt;/trans-unit&gt;
        &lt;/body&gt;
    &lt;/file&gt;
&lt;/xliff&gt;
</code></pre>{% endraw %}

    <p>Each time you create a new translation resource (or install a bundle that includes a translation resource), be sure to clear your cache so that Symfony can discover the new translation resource:</p>

    <p><strong>Using Real or Keyword Messages</strong></p>

{% raw %}<pre><code>\$t = \$translator-&gt;trans('Symfony2 is great');
\$t = \$translator-&gt;trans('symfony2.great');
</code></pre>{% endraw %}

    <p>In the first method, messages are written in the language of the default locale (English in this case). That message is then used as the \"id\" when creating translations.
        In the second method, messages are actually \"keywords\" that convey the idea of the message. The keyword message is then used as the \"id\" for any translations. In this case, translations must be made for the default locale (i.e. to translate symfony2.great to Symfony2 is great).</p>

{% raw %}<pre><code>symfony2.is.great: Symfony2 is great
symfony2.is.amazing: Symfony2 is amazing
symfony2.has.bundles: Symfony2 has bundles
user.login: Login
</code></pre>{% endraw %}

    <p><strong>Using Message Domains</strong></p>

    <p>When translating strings that are not in the default domain (messages), you must specify the domain as the third argument of trans():</p>

{% raw %}<pre><code>* messages.fr.xliff
* admin.fr.xliff
* navigation.fr.xliff

\$this-&gt;get('translator')-&gt;trans('Symfony2 is great', array(), 'admin');
</code></pre>{% endraw %}

    <p><strong>Pluralization</strong></p>

    <p>To translate pluralized messages, use the transChoice() method:</p>

{% raw %}<pre><code>\$t = \$this-&gt;get('translator')-&gt;transChoice(
    'There is one apple|There are %count% apples',
    10,
    array('%count%' =&gt; 10)
);
</code></pre>{% endraw %}

    <h3>Translations in Templates</h3>

    <p>Translating in Twig templates example:</p>

{% raw %}<pre><code>//you can set de translation domain for entire twig temples
{% trans_default_domain \"app\" %}

{% trans %}Hello %name%{% endtrans %}

{% transchoice count %}
    {0} There are no apples|{1} There is one apple|]1,Inf] There are %count% apples
{% endtranschoice %}

//variables traduction
{{ message|trans }}

{{ message|transchoice(5) }}

{{ message|trans({'%name%': 'Fabien'}, \"app\") }}

{{ message|transchoice(5, {'%name%': 'Fabien'}, 'app') }}
</code></pre>{% endraw %}

    <p>If you need to use the percent character (%) in a string, escape it by doubling it: {% raw %}{% trans %}Percent: %percent%%%{% endtrans %}{%  endraw %}</p>

    <h3>Translating Database Content</h3>

    <p>The translation of database content should be handled by Doctrine through the
        <a href=\"https://github.com/l3pp4rd/DoctrineExtensions/blob/master/README.md\">Translatable Extension</a></p>

    <p><strong>Translating constraint messages</strong></p>

{% raw %}<pre><code># src/Acme/BlogBundle/Resources/config/validation.yml
Acme\\BlogBundle\\Entity\\Author:
    properties:
        name:
            - NotBlank: { message: \"author.name.not_blank\" }
</code></pre>{% endraw %}

    <p>Create a translation file under the validators catalog:</p>

{% raw %}<pre><code>&lt;!-- validators.en.xliff --&gt;
&lt;?xml version=\"1.0\"?&gt;
&lt;xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\"&gt;
    &lt;file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\"&gt;
        &lt;body&gt;
            &lt;trans-unit id=\"1\"&gt;
            &lt;source&gt;author.name.not_blank&lt;/source&gt;
            &lt;target&gt;Please enter an author name.&lt;/target&gt;
            &lt;/trans-unit&gt;
        &lt;/body&gt;
    &lt;/file&gt;
&lt;/xliff&gt;
</code></pre>{% endraw %}
{% endblock %}", "E01Bundle:symfony2cheatsheet:translations.html.twig", "/Users/hcho/Desktop/d04/src/E01Bundle/Resources/views/symfony2cheatsheet/translations.html.twig");
    }
}
