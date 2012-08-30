MoufTemplate: the HTML template used for Mouf
=============================================

MoufTemplate is the HTML template used for the [Mouf project](http://mouf-php.com).

It is obviously a Mouf package, and extends the [Mouf TemplateInterface](https://github.com/thecodingmachine/html.template.templateinterface).
This means that if you are using Mouf, you can use the MoufTemplate in every place you would need a template implementing the TemplateInterface.

MoufTemplate has 5 zones: *content*, *top*, *left*, *right* and *bottom*.
Fill these zones using the Mouf UI.

Here is a sample pseudo code:

```php
// Let's access the "content" block:
Mouf::getContent()->addText("Hello world!");
Mouf::getLeftBlock()->addText("My left block!");

// Let's write the template:
Mouf::getTemplate()->toHtml();
```