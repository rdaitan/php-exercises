<?php
function getCallableMethods($object) {
//    $methods = get_class_methods(get_class($object));
    $methods = get_class_methods($object);
    
//    if (get_parent_class($object)) {
//        $parent_methods = get_class_methods(get_parent_class($object));
//        $methods = array_merge($methods, $parent_methods);
//    }
    
    return $methods;
}

function getInheritedMethods($object) {
    $methods = get_class_methods($object);
    
    if (get_parent_class($object)) {
        $parent_methods = get_class_methods(get_parent_class($object));
        $methods = array_intersect($methods, $parent_methods);
    }
    
    return $methods;
}

function getLineage($object) {
    if (get_parent_class($object)) {
        $parent  = get_parent_class($object);
        $parent_object = new $parent;
        
        $lineage = getLineage($parent_object);
        $lineage[] = get_class($object);
    }
    else {
        $lineage = array(get_class($object));
    }
    
    return $lineage;
}

function getChildClasses($object) {
    $classes = get_declared_classes();
    
    $children = array();
    
    foreach ($classes as $class) {
        if (substr($class, 0, 2) ==  "__") continue;
        
//        $child = new $class;
        
//        if (get_parent_class($child) == get_class($object)) {
        if (get_parent_class($class) == get_class($object)) {
            $children []= $class;
        }
    }
    return $children;
}

function printObjectInfo($object) {
    $class = get_class($object);
    echo '<h2>Class</h2>';
    echo "<p>{$class}</p>";
    
    echo '<h2>Inheritance</h2>';
    
    echo '<h3>Parents</h3>';
    $lineage = getLineage($object);
    array_pop($lineage);
    
    if (count($lineage) > 0)
        echo '<p>' . implode('-&gt', $lineage) . '</p>';
    else
        echo '<p>NONE</p>';
    
    echo '<h3>Children</h3>';
    $children = getChildClasses($object);

    
    if (count($children) > 0) {
        echo join(', ', $children);
    }
    else {
        echo "<i>None</i>";
    }
    echo "</p>";

    echo "<h2>Methods</h2>";
    $methods = getCallableMethods($class);
    $parent_methods = get_class_methods(get_parent_class($object));
    
    if(is_null($parent_methods)) $parent_methods = array();
    
    if (!count($methods))
        echo '<p>NONE</p>';
    else {
        echo '<p>Inherited methods are in <i>italics</i>.</p>';
        
        foreach($methods as $method) {
            if (!in_array($method, $parent_methods))
                echo "<p>{$method}</p>";
            else
                echo "<p><i>{$method}</i></p>";
        }
    }
    
    echo '<h2>Properties</h2>';
    $properties = get_class_vars($class);
    
    if(!count($properties))
        echo '<p>NONE</p>';
    else {
        foreach (array_keys($properties) as $property)
            echo "<p><b>\${$property}</b> = " . $object->$property . '</p>';
    }
    
    echo '<hr/>';
}
        
                
    
        


class A {
    public $foo = 'foo';
    public $bar = 'bar';
    public $baz = 17.0;
    
    function firstFunction() {}
    function seconfFunction() {}
}

class B extends A {
    public $quux = 'false';
    
    function thirdFunction() {}    
}

class C extends B {}

$a = new A;
$a->foo = 'sylvie';
$a->bar = 23;

$b = new B;
$b->foo = 'Bruno';
$b->quux = 'true';

$c = new C;

printObjectInfo($a);
printObjectInfo($b);
printObjectInfo($c);
