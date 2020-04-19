# design-mode framework

**一个基于设计模式的简易框架，遵守PSR-0规范**

## PSR-0规范

1. 必须使用命名空间，命名空间必须与绝对路径一致。
2.  类名首字母必须大写。
3.  除入口文件外，其他 “.php” 必须只有一个类。
4.  所有PHP文件必须自动载入，不能有incude/require。

## PHP面向对象高级特性

##### SPL库的使用

 	1. SplStack，SplQueue，SplHeap，SplFixedArray等数据结构类。
 	2. ArrayIterator，AppendIterator，Countable，ArrayObject。
 	3. SPL提供的函数。

##### PHP链式操作的实现

```php
//$db对象中where()和limit()函数都返回了$this。
$db->where()->limit()->order();
```

##### PHP魔术方法的使用

1. \_\_get/\_\_set ：当调用一个对象中未定义的属性时访问\_\_get方法，\__set则是在给该对象中一个未定义的属性赋值时调用。
2. \_\_call/_\_callStatic ：当调用一个对象中未定义的方法时访问\_\_call方法。
3. \__toString ：将一个对象转化成字符串时自动调用，如使用 echo 打印对象时，未实现此方法则无法打印。
4. \__invoke ：当尝试以调用一个函数的方式调用一个对象时，\_\_invoke方法会被自动调用。

## 3种基本设计模式

##### 1. 工厂模式

工厂方法或类生成对象，而不是在代码种直接new。

##### 2. 单例模式

使某个类的对象仅允许创建一个。

##### 3. 注册模式

全局共享和交换对象。

## 其它设计模式

##### 适配器模式

可以将截然不同的函数接口封装成统一的API。

eg：PHP的数据库操作有mysql，mysqli，pdo 3种，可以用适配器模式统一成一致。