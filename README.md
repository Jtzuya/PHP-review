#### OOP in PHP vs. Javascript
- $this (php)
- this (javascript)

- $this->property (php)
- $this->method() (php)

- $this.property (javascript)
- $this.method() (javascript)

###### 3 TASKS PHP DOES:
- Query to the database & connect to it
- Handle the data submitted by the user(s)
- Show database data to the user(s)

#### MVC
M - Model
V - View
C - Controller


#### Visibility & Inheritance   
- private: Can only be accessed inside the class
- public: Can be accessed anywhere where it is being included/required
- protected: Property can be only be accessed in the same class (like private). However if any classes inherits any sort of any properties/methods from this class using **Extends** we can also use that inside other class.

### Folder Structure + Naming
```html
- Main Folder
            - classes(folder)
                            - properties.class.php
                            - visibility.class.php
            - includes(folder)
                            - properties.inc.php
                            - visibility.inc.php
            - index.php
```
