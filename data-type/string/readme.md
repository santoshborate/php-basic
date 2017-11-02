# String

Strings are sequences of characters, where every character is the same as a byte.

A string is series of characters, where a character is the same as a byte. This means that PHP only supports a 256-character set, and hence does not offer native Unicode support.

A string can hold letters, numbers, and special characters and it can be as large as up to 2GB (2147483647 bytes maximum). The simplest way to specify a string is to enclose it in single quotes (e.g. 'Hello world!'), however you can also use double quotes ("Hello world!").

**A string literal can be specified in four different ways:**

    single quoted
    double quoted
    heredoc syntax
    nowdoc syntax (since PHP 5.3.0)
    
**Single quoted**

The simplest way to specify a string is to enclose it in single quotes (the character ').
     

**Double quoted**

If the string is enclosed in double-quotes ("), PHP will interpret the following escape sequences for special characters:
 \n 	linefeed (LF or 0x0A (10) in ASCII)
 \r 	carriage return (CR or 0x0D (13) in ASCII)
 \t 	horizontal tab (HT or 0x09 (9) in ASCII)
 \v 	vertical tab (VT or 0x0B (11) in ASCII) (since PHP 5.2.5)
 \e 	escape (ESC or 0x1B (27) in ASCII) (since PHP 5.4.4)
 \f 	form feed (FF or 0x0C (12) in ASCII) (since PHP 5.2.5)
 \\ 	backslash
 \$ 	dollar sign
 \" 	double-quote
 
 **Heredoc**
 
 A third way to delimit strings is the heredoc syntax: <<<. After this operator, an identifier is provided, then a newline. The string itself follows, and then the same identifier again to close the quotation. 
 
 example:
 ```apacheconfig


<?php
class foo {
    public $bar = <<<EOT
bar
EOT;
}
?>


```

**Nowdoc**

Nowdocs are to single-quoted strings what heredocs are to double-quoted strings. A nowdoc is specified similarly to a heredoc, but no parsing is done inside a nowdoc. The construct is ideal for embedding PHP code or other large blocks of text without the need for escaping. It shares some features in common with the SGML <![CDATA[ ]]> construct, in that it declares a block of text which is not for parsing.
 
example 1

```apacheconfig
<?php
$str = <<<'EOD'
Example of string
spanning multiple lines
using nowdoc syntax.
EOD;

```


example 2

```apacheconfig

<?php
class foo {
    public $bar = <<<'EOT'
bar
EOT;
}
?>

```


