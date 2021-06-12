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

/* E01Bundle:symfony2cheatsheet:services.html.twig */
class __TwigTemplate_eb75a0758c31b3e4ac2a1ebcd4e1221f469e83fdc8f6519ff459b900551ed884 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "E01Bundle:symfony2cheatsheet:services.html.twig"));

        $this->parent = $this->loadTemplate("E01Bundle:Default:base.html.twig", "E01Bundle:symfony2cheatsheet:services.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <p>A Service Container (or dependency injection container) is simply a PHP object that manages the instantiation of services (i.e. objects).</p>

";
        // line 25
        echo "<pre><code># src/Acme/HelloBundle/Resources/config/services.yml
parameters:
    newsletter_manager.class: Acme\\HelloBundle\\Newsletter\\NewsletterManager
    my_mailer.transport: sendmail
    my_mailer.gateways:
        - mail1
        - mail2
        - mail3

services:
    my_mailer:
        class: \"%my_mailer.class%\"
        arguments: [%my_mailer.transport%]
    newsletter_manager:
        class: \"%newsletter_manager.class%\"
        arguments: [@my_mailer] //required contructor args. Use @ to refer another service.
        calls:
        - [ setMailer, [ @my_mailer ] ] //Optional dependencies.
        tags:
        - { name: twig.extension } //Twig finds all services tagged with twig.extension and automatically registers them as extensions.
</code></pre>";
        echo "

    <p>Now we can set our class to be a real service:</p>

";
        // line 46
        echo "<pre><code>namespace Acme\\HelloBundle\\Newsletter;

use Symfony\\Component\\Templating\\EngineInterface;

class NewsletterManager
{
    protected \$mailer;
    protected \$templating;

    public function __construct(\\Swift_Mailer \$mailer, EngineInterface \$templating)
    {
        \$this-&gt;mailer = \$mailer;
        \$this-&gt;templating = \$templating;
    }

    // ...
}
</code></pre>";
        echo "

    <p>And for this particual service the corresponding services.yml would be:</p>

";
        // line 54
        echo "<pre><code> services:
    newsletter_manager:
        class: \"%newsletter_manager.class%\"
        arguments: [@mailer, @templating]
</code></pre>";
        echo "

    <p>In YAML, the special @my_mailer syntax tells the container to look for a service named my_mailer and to pass that object into the constructor of NewsletterManager. In this case, however, the specified service my_mailer must exist. If it does not, an exception will be thrown. You can mark your dependencies as optional - this will be discussed in the next section</p>

    <p><strong>Making References Optional</strong></p>

";
        // line 64
        echo "<pre><code>services:
    newsletter_manager:
        class: \"%newsletter_manager.class%\"
        arguments: [@?my_mailer]
</code></pre>";
        echo "

    <h3>Debugging services</h3>

    <p>You can find out what services are registered with the container using the console. To show all services and the class for each service, run:</p>

";
        // line 73
        echo "<pre><code>\$ php app/console container:debug
\$ php app/console container:debug --show-private
\$ php app/console container:debug my_mailer
</code></pre>";
        echo "

    <p>See also:</p>

    <ul>
        <li>
            <a href=\"http://symfony.com/doc/current/components/dependency_injection/parentservices.html\">Managing Common Dependencies with Parent Services</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "E01Bundle:symfony2cheatsheet:services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 73,  119 => 64,  106 => 54,  82 => 46,  55 => 25,  51 => 3,  45 => 2,  29 => 1,);
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
    <p>A Service Container (or dependency injection container) is simply a PHP object that manages the instantiation of services (i.e. objects).</p>

{% raw %}<pre><code># src/Acme/HelloBundle/Resources/config/services.yml
parameters:
    newsletter_manager.class: Acme\\HelloBundle\\Newsletter\\NewsletterManager
    my_mailer.transport: sendmail
    my_mailer.gateways:
        - mail1
        - mail2
        - mail3

services:
    my_mailer:
        class: \"%my_mailer.class%\"
        arguments: [%my_mailer.transport%]
    newsletter_manager:
        class: \"%newsletter_manager.class%\"
        arguments: [@my_mailer] //required contructor args. Use @ to refer another service.
        calls:
        - [ setMailer, [ @my_mailer ] ] //Optional dependencies.
        tags:
        - { name: twig.extension } //Twig finds all services tagged with twig.extension and automatically registers them as extensions.
</code></pre>{% endraw %}

    <p>Now we can set our class to be a real service:</p>

{% raw %}<pre><code>namespace Acme\\HelloBundle\\Newsletter;

use Symfony\\Component\\Templating\\EngineInterface;

class NewsletterManager
{
    protected \$mailer;
    protected \$templating;

    public function __construct(\\Swift_Mailer \$mailer, EngineInterface \$templating)
    {
        \$this-&gt;mailer = \$mailer;
        \$this-&gt;templating = \$templating;
    }

    // ...
}
</code></pre>{% endraw %}

    <p>And for this particual service the corresponding services.yml would be:</p>

{% raw %}<pre><code> services:
    newsletter_manager:
        class: \"%newsletter_manager.class%\"
        arguments: [@mailer, @templating]
</code></pre>{% endraw %}

    <p>In YAML, the special @my_mailer syntax tells the container to look for a service named my_mailer and to pass that object into the constructor of NewsletterManager. In this case, however, the specified service my_mailer must exist. If it does not, an exception will be thrown. You can mark your dependencies as optional - this will be discussed in the next section</p>

    <p><strong>Making References Optional</strong></p>

{% raw %}<pre><code>services:
    newsletter_manager:
        class: \"%newsletter_manager.class%\"
        arguments: [@?my_mailer]
</code></pre>{% endraw %}

    <h3>Debugging services</h3>

    <p>You can find out what services are registered with the container using the console. To show all services and the class for each service, run:</p>

{% raw %}<pre><code>\$ php app/console container:debug
\$ php app/console container:debug --show-private
\$ php app/console container:debug my_mailer
</code></pre>{% endraw %}

    <p>See also:</p>

    <ul>
        <li>
            <a href=\"http://symfony.com/doc/current/components/dependency_injection/parentservices.html\">Managing Common Dependencies with Parent Services</a>
        </li>
    </ul>
{% endblock %}", "E01Bundle:symfony2cheatsheet:services.html.twig", "/Users/hcho/Desktop/d04/src/E01Bundle/Resources/views/symfony2cheatsheet/services.html.twig");
    }
}
