# Asset Component

For developing you'll want JS-Files and CSS Files to load each file
separate for improving debugging.



### Define Asset Scopes

```php
The main Application will define its Assets

class SomeContext extends Application {
    
    public function __construct() {
        parent::__construct();
        
        $this->asset->define("js")->version("1.0.2");
        $this->asset->define("css")->version("1.0.3");
    }

}
```

### Register Assets

```php
if ($context instanceof SomeContext) {
    $context->asset["js"]->scanDirectory("somePrefix", __DIR__ . "/path/to/jsRoot", "*.js");
    $context->asset["css"]->scanDirectory("somePrefix", __DIR__ . "/cssPath", "*.css");
    
}
```

Will register some Actions:

```
/asset/js/somePrefix/file1.js   => Access single file
```

```
/asset/js/combine.js            => All JS in one File
```

```
/asset/js/debug.js              => One JS-file including all other files
```

will generate

```
<script language="JavaScript" src="/asset/js/somePrefix/file1.js"></script>
<script language="JavaScript" src="/asset/js/somePrefix/file2.js"></script>
.. 
```


### Append to template

```
$di->asset["js"]->generateHtml(AssetType::CSS);
```
will generate

```
<script language="JavaScript" src="/asset/js/somePrefix/file1.js?v=1.0.1"></script>
<script language="JavaScript" src="/asset/js/somePrefix/file2.js?v=1.0.1"></script>
.. 
```

