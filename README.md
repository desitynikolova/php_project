# php_project
 
Проект на тема Системи за продукти изграден с Laravel Framework, който събира данни за различни продукти(име на продукт, категория), също така снимка за всеки съответен продукт. В случая моите продукти са Дрехи.
Темата ми е взета от интернет като тя се добавя съответно в папка public на проекта (assets и images).
Имам търсачка като чрез нея хората могат да търсят по дадена категория, например Тениски и ще им излязат добавените тениски. Също така има възможност по дата на публикация да се търси, като така потребителят ще намери по-скорошни продукти. Може да се търси и по име на продукт, като например ако имаме добавена червена рокля, той като напише рокля или червена съответно ще му излезе тази рокля. 

MODELS:
Имам създадени 4 модела: 
Category, Product_categories, Product, User

CONTROLLERS:
В папката app -> Http -> Controllers -> Admin, където е и логиката за CRUD операциите, чрез които можем да създаваме, редактираме, ъпдейтваме и изтриваме дадените продукти и категории имам следните контролери: CategoryCrudController, Product_categoriesCrudController, ProductCrudController, UserCrudController

Освен тези контролери имам и извън папката админ:
CategoryController, 
Controller, 
HomeController, 
IndexController, 
ProductController, 
Цялата логика в тях се създава от php команди.


VIEWS:
Те се намират в recources -> views 
Изгледа за моята начална страница на проекта се намира в home.blade.php. 
Имам си отделни папки съответно за всеки изглед. В папка navigation съм добавила файлове с изгледите за навигацията. В папка partials имам подпапки за категориите и за продуктите. 
В папката categories имам следните файлове:
current-category.blade.php 
В папката products имам следните файлове:
current-product-categories.blade.php, 
current-product-products.blade.php, 
current-product.blade.php 
За страниците, които са ми начални за продукти, категории и за търсенето по дадени критерии имам следните вюта, които съм оформяла с малко CSS извън добавената тема:
category.blade.php, 
product.blade.php, 
search.blade.php

Routes
Описани са в web.php, който файл се намира в routes->web.php

Визуално изглеждаш сайта ми:
![image](https://user-images.githubusercontent.com/57368045/149376516-95183713-81d2-46a4-a3e4-5e0d3c892d33.png)

