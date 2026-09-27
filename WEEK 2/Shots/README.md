# PHP Programming Screenshots

This folder contains screenshots of my Week 2 PHP practice in the course **Web Application Development - PHP & MySQL**.

**Student:** Mohamed Aden Abukar  
**Practice files:** `WEEK 2/loops.php` · `WEEK 2/numericArray.php` · `WEEK 2/associativeArray.php`

---

# PHP Loops & Arrays Screenshots

This folder contains screenshots explaining the PHP tasks I solved in Week 2:

**Web Application Development - PHP & MySQL**

---

# 1. For Loop

## Screenshot Name

`01 - for Loop.png`

## Description

This screenshot shows a `for` loop from `loops.php`.

Task solved:

- Count from `1` to `5`
- Print **The number is:** on each line

```php
// For Loop Example
echo "<h2>For Loop Example</h2>";
for ($i = 1; $i <= 5; $i++) {
    echo "The number is: $i <br>";
}
```

Main concepts covered:

- `$i = 1` starts the loop.
- `$i <= 5` is the condition.
- `$i++` increases the counter after each run.

## Screenshot

![For Loop](01%20-%20for%20Loop.png)

---

# 2. Do-While Loop

## Screenshot Name

`02 - do-while Loop.png`

## Description

This screenshot shows two `do-while` examples from `loops.php`.

Task solved:

- Print numbers from `0` to `5`
- Calculate the factorial of `5` (result is `120`)

A `do-while` loop runs the body **first**, then checks the condition.

```php
// do-while Loop Example
$count = 0;
do {
    echo "The number is: $count <br>";
    $count++;
} while ($count <= 5);

// Factorial Example using do-while Loop
$result = 1;
$n = 5;
do {
    $result *= $n;
    echo "The factorial of $n is: $result <br>";
    $n--;
} while ($n > 0);
echo "The factorial of 5 is: $result <br>";
```

## Screenshot

![Do-While Loop](02%20-%20do-while%20Loop.png)

---

# 3. While Loop

## Screenshot Name

`03 - While Loop.png`

## Description

This screenshot shows `while` loops from `loops.php`.

Task solved:

- Print numbers from `1` to `5`
- Print the **12 times table** from `1` to `12`

A `while` loop checks the condition **before** each run.

```php
// While Loop Example
$count = 1;
while ($count <= 5) {
    echo "The number is: $count <br>";
    $count++;
}

// Multiplication for While Loop Example
$count = 1;
while ($count <= 12) {
    echo "$count times 12 is: " . $count * 12 . "<br>";
    ++$count;
}
```

## Screenshot

![While Loop](03%20-%20While%20Loop.png)

---

# 4. Break & Continue Using For Loop

## Screenshot Name

`04 - Break & Continue Using for Loop.png`

## Description

This screenshot shows `break` and `continue` inside a `for` loop in `loops.php`.

Task solved:

- Loop from `1` to `10`
- At `3`, skip that number with `continue`
- At `5`, stop the loop with `break`

Output numbers: **1, 2, then skip 3, print 4, then stop at 5**.

```php
// Break & Continue using for Loop Example
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "Breaking the loop at $i <br>";
        break;
    }
    if ($i == 3) {
        echo "Skipping the iteration at $i <br>";
        continue;
    }
    echo "The number is: $i <br>";
}
```

Important points:

- `continue` jumps to the next iteration.
- `break` exits the loop completely.

## Screenshot

![Break and Continue Using for Loop](04%20-%20Break%20%26%20Continue%20Using%20for%20Loop.png)

---

# 5. Nested Loop

## Screenshot Name

`05 - Nested Loop.png`

## Description

This screenshot shows nested `for` loops from `loops.php`.

Task solved:

- Outer loop: rows `1` to `3`
- Inner loop: columns `1` to `5`
- Print a small **multiplication table** (`$i x $j`)

```php
// Example of Nested Loops to create a multiplication table
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "$i x $j = " . $i * $j . "<br>";
    }
    echo "<br>";
}
```

## Screenshot

![Nested Loop](05%20-%20Nested%20Loop.png)

---

# 6. Numeric Index Array

## Screenshot Name

`06 - Numeric Index Array.png`

## Description

This screenshot shows how I created a numeric (indexed) array in `numericArray.php`.

Task solved:

- Create `$collection` with `array()`
- Set values by index: `10`, **Mohamed Aden Abukar**, `3.14`
- Create the same array in one line
- Add a new item: **I am a student at JUST**

```php
// Example of numeric index array
$collection = array();

$collection[0] = 10;
$collection[1] = "Mohamed Aden Abukar";
$collection[2] = 3.14;

$collection = array(10, "Mohamed Aden Abukar", 3.14);
$collection[] = "I am a student at JUST";
```

Important points:

- Numeric arrays use numbers as keys (`0`, `1`, `2`, …).
- `$collection[]` adds a new element at the next index.

## Screenshot

![Numeric Index Array](06%20-%20Numeric%20Index%20Array.png)

---

# 7. Display Array (var_dump & Pre Tag)

## Screenshot Name

`07 - Display (Var_Dump & Pre tag) Array.png`

## Description

This screenshot shows how I displayed the numeric array in `numericArray.php`.

Task solved:

- Use `var_dump()` to show type, length, and values
- Print the first and second elements by index
- Loop through all values with `foreach`
- Wrap `var_dump()` in `<pre>` so the output is easier to read

```php
// Displaying array elements
var_dump($collection);

echo "<br>First element: " . $collection[0];
echo "<br>Second element: " . $collection[1];

echo "<br>Using for each loop:<br>";
foreach ($collection as $value) {
    echo $value . "<br>";
}

echo "<pre>";
var_dump($collection);
```

## Screenshot

![Display Var Dump and Pre Tag Array](07%20-%20Display%20%28Var_Dump%20%26%20Pre%20tag%29%20Array.png)

---

# 8. Associative Array

## Screenshot Name

`08 - Associative Array.png`

## Description

This screenshot shows an associative array in `associativeArray.php`.

Task solved:

- Store person data with **named keys** (`name`, `age`, `city`)
- Print each value using `$person["key"]`

```php
// Associative array
$person = array(
    "name" => "Mohamed A. Abukar",
    "age" => 30,
    "city" => "Mogadishu"
);
echo "Name: " . $person["name"] . "<br>";
echo "Age: " . $person["age"] . "<br>";
echo "City: " . $person["city"] . "<br>";
```

Important points:

- Associative arrays use string keys, not only numbers.
- `=>` links a key to its value.

## Screenshot

![Associative Array](08%20-%20Associative%20Array.png)

---

# 9. Display Associative Array

## Screenshot Name

`09 - Display.png`

## Description

This screenshot shows two ways to display the associative array in `associativeArray.php`.

Task solved:

- First `foreach`: print **values only**
- Second `foreach`: print **key and value** together

```php
// display for array
foreach ($person as $list) {
    echo $list . "<br>";
}

// Display for array for key and value
foreach ($person as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
```

## Screenshot

![Display](09%20-%20Display.png)

---

# Screenshot List

| File Name | Task Solved | Practice File |
| --- | --- | --- |
| `01 - for Loop.png` | Count 1 to 5 with `for` | `loops.php` |
| `02 - do-while Loop.png` | Count and factorial with `do-while` | `loops.php` |
| `03 - While Loop.png` | Count and 12 times table with `while` | `loops.php` |
| `04 - Break & Continue Using for Loop.png` | Skip 3 and stop at 5 | `loops.php` |
| `05 - Nested Loop.png` | Multiplication table with nested `for` | `loops.php` |
| `06 - Numeric Index Array.png` | Create and add numeric array items | `numericArray.php` |
| `07 - Display (Var_Dump & Pre tag) Array.png` | Display array with `var_dump`, index, `foreach`, and `<pre>` | `numericArray.php` |
| `08 - Associative Array.png` | Create person array with named keys | `associativeArray.php` |
| `09 - Display.png` | Display associative array with `foreach` | `associativeArray.php` |

---

*Mohamed Aden Abukar · Week 2 · Loops & Arrays*
