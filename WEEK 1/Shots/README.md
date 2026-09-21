# PHP Programming Screenshots

This folder contains screenshots of my Week 1 PHP practice in the course **Web Application Development - PHP & MySQL**.

**Student:** Mohamed Aden Abukar  
**Practice file:** `WEEK 1/home.php`

---

# PHP Introduction Screenshots

This folder contains screenshots explaining the basic PHP tasks I solved in Week 1:

**Web Application Development - PHP & MySQL**

---

# 1. PHP Tags

## Screenshot Name

`01 - PHP Tags.png`

## Description

This screenshot shows the PHP opening and closing tags used in `home.php`.

PHP code must be written between these tags.

```php
<?php

?>
```

Main concepts covered:

- `<?php` starts the PHP script.
- `?>` ends the PHP script.
- Code between the tags is executed by the PHP engine, not shown as HTML.

## Screenshot

![PHP Tags](01%20-%20PHP%20Tags.png)

---

# 2. Display Text

## Screenshot Name

`02 - Display Text.png`

## Description

This screenshot shows how I displayed text in the browser using `echo` and `print`.

Task solved:

- Print **Hello World** with `echo`
- Print **Welcome to PHP** with `print`
- Add a line break with `echo "<br>"`

```php
// Displaying Text
echo "Hello World";
echo "<br>";
print 'Welcome to PHP';
echo "<br>";
```

Important points:

- `echo` and `print` both displays to the browser.
- `"<br>"` creates a new line in the browser.

## Screenshot

![Display Text](02%20-%20Display%20Text.png)

---

# 3. Variables

## Screenshot Name

`03 - Variables.png`

## Description

This screenshot shows how I created a PHP variable and displayed its value.

Task solved:

- Store the name **Mohamed Aden** in `$name`
- Output the sentence **My name is Mohamed Aden**

```php
// Creating & Display Variables
$name = "Mohamed Aden";
echo "My name is $name";
```

Important points:

- Variable names start with `$`.
- Double quotes allow the variable value to appear inside the string.

## Screenshot

![Variables](03%20-%20Variables.png)

---

# 4. Constant

## Screenshot Name

`04 - Constant.png`

## Description

This screenshot shows how I created a constant and displayed it.

Task solved:

- Define a constant named `AGE` with the value `22`
- Display **My age is 22**

```php
// Creating & Display CONSTANT NAME
echo "<br>";
define("AGE", 22);
echo "My age is ", AGE;
echo "<br>";
```

Important points:

- `define()` creates a constant.
- Constant names do not use `$`.
- `echo` can print more than one value, separated by a comma.

## Screenshot

![Constant](04%20-%20Constant.png)

---

# 5. If-Else

## Screenshot Name

`05 - if-else.png`

## Description

This screenshot shows an if-elseif-else statement that grades a mark.

Task solved:

- Store marks as `$marks = 87`
- Check the score and print a result:
  - 90 or more → Excellent
  - 80 or more → Very Good!
  - 50 or more → Make a perfect
  - below 50 → You're Failed!

Because `87` is greater than or equal to `80` and less than `90`, the output is **Very Good!**

```php
// If-Else Example
$marks = 87;
if ($marks >= 90)
    echo "Excellent";
elseif ($marks >= 80)
    echo "Very Good!";
elseif ($marks >= 50)
    echo "Make a perfect";
else {
    echo "You're Failed!";
}
```

## Screenshot

![If-Else](05%20-%20if-else.png)

---

# 6. Switch Examples

## Screenshot Name

`06 - Switch Examples.png`

## Description

This screenshot shows a `switch` statement that grades a mark using the same rules as if-else.

Task solved:

- Store marks as `$marks_switch = 10`
- Use `switch (true)` so each `case` can test a condition
- Print the matching grade and stop with `break`

Because `10` is less than `50`, none of the cases match, so `default` runs and the output is **You're Failed!**

```php
// Switch Example
$marks_switch = 10;
echo "<br>";
switch (true) {
    case ($marks_switch >= 90):
        echo "Excellent";
        break;
    case ($marks_switch >= 80):
        echo "Very Good!";
        break;
    case ($marks_switch >= 50):
        echo "Make a perfect";
        break;
    default:
        echo "You're Failed!";
}
```

## Screenshot

![Switch Examples](06%20-%20Switch%20Examples.png)

---

# Screenshot List


| File Name                  | Task Solved                          |
| -------------------------- | ------------------------------------ |
| `01 - PHP Tags.png`        | PHP opening and closing tags         |
| `02 - Display Text.png`    | Display text with `echo` and `print` |
| `03 - Variables.png`       | Create and display a variable        |
| `04 - Constant.png`        | Create and display a constant        |
| `05 - if-else.png`         | Grade marks using if-else            |
| `06 - Switch Examples.png` | Grade marks using switch             |


---

*Mohamed Aden Abukar · Week 1 ·* `home.php`