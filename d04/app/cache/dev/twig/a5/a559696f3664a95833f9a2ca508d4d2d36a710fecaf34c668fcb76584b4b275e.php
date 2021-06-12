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

/* E01Bundle:symfony2cheatsheet:controller.html.twig */
class __TwigTemplate_0c5e08f06724c9f62011c4994cd1816936c862699498bfa198c9e7af10c63a8e extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "E01Bundle:symfony2cheatsheet:controller.html.twig"));

        $this->parent = $this->loadTemplate("E01Bundle:Default:base.html.twig", "E01Bundle:symfony2cheatsheet:controller.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <p>Here are some useful shortcuts and functions regarding the request in Symfony 2 controllers.</p>

    <h4>REQUEST and RESPONSE objects</h4>

    <div class=\"row\">

        <div class=\"span6\">

";
        // line 26
        echo "
<pre><code>\$request-&gt;query-&gt;get('foo'); //gets foo GET var.
\$request-&gt;request-&gt;get('bar'); //gets POST var.
\$request-&gt;getMethod();

\$request-&gt;server-&gt;get('HTTP_HOST'); //server variables.
\$request-&gt;getPathInfo(); //gets the URI.
\$request-&gt;files-&gt;get('file'); //files posted in a form.

\$request-&gt;headers-&gt;get('content-type');
\$request-&gt;cookies-&gt;get('PHPSESSID'); //cookies

\$request-&gt;getLanguages();
\$request-&gt;getPreferedLanguage(array('es','fr'));
\$request-&gt;isXmlHttpRequest();
</code></pre>";
        echo "
        </div>

        <div class=\"span6\">

            <p>Redirecting in a controller:</p>

";
        // line 38
        echo "
<pre><code>\$this-&gt;redirect(\$this-&gt;generateUrl(\"homepage\"));
// 2.6 and above
\$this->redirectToRoute('homepage');
</code></pre>
";
        echo "

            <p>Rendering text from a controller:</p>

";
        // line 44
        echo "
<pre><code>return new Response('&lt;html&gt;…&lt;/html&gt;');
</code></pre>";
        echo "

            <p>Forwarding:</p>

";
        // line 50
        echo "
<pre><code>return \$this-&gt;forward('Bundle:Controller:Action');
</code></pre>";
        echo "

            <p>Redirect to 404 not found:</p>

";
        // line 56
        echo "
<pre><code>throw \$this-&gt;createNotFoundException(message);
</code></pre>";
        echo "
        </div>

    </div>

    <div class=\"row\">

        <div class=\"span6\">

            <h4>Working with the session</h4>

            <p>You can manage session attributes with:</p>

";
        // line 71
        echo "
<pre><code>\$session = \$this-&gt;getRequest()-&gt;getSession();
</code></pre>";
        echo "

            <p>or the shortcut version</p>

";
        // line 77
        echo "
<pre><code>\$this-&gt;get('session');
</code></pre>";
        echo "

            <p>and to work with the data:</p>

";
        // line 84
        echo "
<pre><code>\$session-&gt;get('foo','default value');
\$session-&gt;set('foo','bar');
</code></pre>";
        echo "
        </div>

        <div class=\"span6\">

            <h4>Flash messages</h4>

            <p>Flash messages only last one request and they are stored in a FlashBag:</p>

";
        // line 95
        echo "
<pre><code>\$this-&gt;addFlash('notice','message');
</code></pre>";
        echo "

            <p>To iterate trough all flash messages in a template you can use:</p>

";
        // line 105
        echo "
<pre><code>{% for flashMessage in app.session.flashbag.get('notice') %}
    &lt;div class=\"flash notice\"&gt;
        {{ flashMessage }}
    &lt;/div&gt;
{% endfor %}
</code></pre>";
        echo "
        </div>

    </div>

    <p>Finally, here is an example of a controller class with Request and Response object in use.</p>


    ";
        // line 133
        echo "<pre><code>namespace Symfony\\CheatSheetBundle\\Controller;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return \$this->render('SymfonyCheatSheetBundle:Default:index.html.twig');
    }

    public function contactAction(Request \$request)
    {
        //get request variables.
        //do something, call service, go to database, create form, send emails, etc...
        return \$this->render('SymfonyCheatSheetBundle:Default:feedback.html.twig', array([template vars]));
    }
}
</code></pre>";
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "E01Bundle:symfony2cheatsheet:controller.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 133,  176 => 105,  167 => 95,  152 => 84,  143 => 77,  134 => 71,  116 => 56,  107 => 50,  98 => 44,  86 => 38,  61 => 26,  51 => 3,  45 => 2,  29 => 1,);
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
    <p>Here are some useful shortcuts and functions regarding the request in Symfony 2 controllers.</p>

    <h4>REQUEST and RESPONSE objects</h4>

    <div class=\"row\">

        <div class=\"span6\">

{% raw %}
<pre><code>\$request-&gt;query-&gt;get('foo'); //gets foo GET var.
\$request-&gt;request-&gt;get('bar'); //gets POST var.
\$request-&gt;getMethod();

\$request-&gt;server-&gt;get('HTTP_HOST'); //server variables.
\$request-&gt;getPathInfo(); //gets the URI.
\$request-&gt;files-&gt;get('file'); //files posted in a form.

\$request-&gt;headers-&gt;get('content-type');
\$request-&gt;cookies-&gt;get('PHPSESSID'); //cookies

\$request-&gt;getLanguages();
\$request-&gt;getPreferedLanguage(array('es','fr'));
\$request-&gt;isXmlHttpRequest();
</code></pre>{% endraw %}
        </div>

        <div class=\"span6\">

            <p>Redirecting in a controller:</p>

{% raw %}
<pre><code>\$this-&gt;redirect(\$this-&gt;generateUrl(\"homepage\"));
// 2.6 and above
\$this->redirectToRoute('homepage');
</code></pre>
{% endraw %}

            <p>Rendering text from a controller:</p>

{% raw %}
<pre><code>return new Response('&lt;html&gt;…&lt;/html&gt;');
</code></pre>{% endraw %}

            <p>Forwarding:</p>

{% raw %}
<pre><code>return \$this-&gt;forward('Bundle:Controller:Action');
</code></pre>{% endraw %}

            <p>Redirect to 404 not found:</p>

{% raw %}
<pre><code>throw \$this-&gt;createNotFoundException(message);
</code></pre>{% endraw %}
        </div>

    </div>

    <div class=\"row\">

        <div class=\"span6\">

            <h4>Working with the session</h4>

            <p>You can manage session attributes with:</p>

{% raw %}
<pre><code>\$session = \$this-&gt;getRequest()-&gt;getSession();
</code></pre>{% endraw %}

            <p>or the shortcut version</p>

{% raw %}
<pre><code>\$this-&gt;get('session');
</code></pre>{% endraw %}

            <p>and to work with the data:</p>

{% raw %}
<pre><code>\$session-&gt;get('foo','default value');
\$session-&gt;set('foo','bar');
</code></pre>{% endraw %}
        </div>

        <div class=\"span6\">

            <h4>Flash messages</h4>

            <p>Flash messages only last one request and they are stored in a FlashBag:</p>

{% raw %}
<pre><code>\$this-&gt;addFlash('notice','message');
</code></pre>{% endraw %}

            <p>To iterate trough all flash messages in a template you can use:</p>

{% raw %}
<pre><code>{% for flashMessage in app.session.flashbag.get('notice') %}
    &lt;div class=\"flash notice\"&gt;
        {{ flashMessage }}
    &lt;/div&gt;
{% endfor %}
</code></pre>{% endraw %}
        </div>

    </div>

    <p>Finally, here is an example of a controller class with Request and Response object in use.</p>


    {% raw %}<pre><code>namespace Symfony\\CheatSheetBundle\\Controller;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return \$this->render('SymfonyCheatSheetBundle:Default:index.html.twig');
    }

    public function contactAction(Request \$request)
    {
        //get request variables.
        //do something, call service, go to database, create form, send emails, etc...
        return \$this->render('SymfonyCheatSheetBundle:Default:feedback.html.twig', array([template vars]));
    }
}
</code></pre>{% endraw %}
{% endblock %}", "E01Bundle:symfony2cheatsheet:controller.html.twig", "/Users/hcho/Desktop/d04/src/E01Bundle/Resources/views/symfony2cheatsheet/controller.html.twig");
    }
}
