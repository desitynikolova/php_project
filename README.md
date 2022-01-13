# php_project
 
Проект на тема Системи за продукти изграден с Laravel Framework, който събира данни за различни продукти(име на продукт, категория), също така снимка за всеки съответен продукт. В случая моите продукти са Дрехи.
Темата ми е взета от интернет като тя се добавя съответно в папка public на проекта (assets и images).
Имам търсачка като чрез нея хората могат да търсят по дадена категория, например Тениски и ще им излязат добавените тениски. Също така има възможност по дата на публикация да се търси, като така потребителят ще намери по-скорошни продукти. Може да се търси и по име на продукт, като например ако имаме добавена червена рокля, той като напише рокля или червена съответно ще му излезе тази рокля. 
<br>
<br>
MODELS:
<br>
Имам създадени 4 модела: 
Category
<br>
Product_categories
<br>
Product
<br>
User
<br>
<br>
CONTROLLERS:
<br>
В папката app -> Http -> Controllers -> Admin, където е и логиката за CRUD операциите, чрез които можем да създаваме, редактираме, ъпдейтваме и изтриваме дадените продукти и категории имам следните контролери: 
<br>
CategoryCrudController
<br>
Product_categoriesCrudController
<br>
ProductCrudController
<br>
UserCrudController
<br>
Освен тези контролери имам и извън папката админ:
<br>
CategoryController
<br>
Controller 
<br>
HomeController
<br>
IndexController
<br>
ProductController
<br>
Цялата логика в тях се създава от php команди.
<br>
<br>
VIEWS:
<br>
Те се намират в recources -> views 
Изгледа за моята начална страница на проекта се намира в home.blade.php. 
Имам си отделни папки съответно за всеки изглед. В папка navigation съм добавила файлове с изгледите за навигацията. В папка partials имам подпапки за категориите и за продуктите. 
В папката categories имам следните файлове:
<br>
current-category.blade.php 
<br>
В папката products имам следните файлове:
<br>
current-product-categories.blade.php
<br>
current-product-products.blade.php
<br>
current-product.blade.php 
<br>
За страниците, които са ми начални за продукти, категории и за търсенето по дадени критерии имам следните вюта, които съм оформяла с малко CSS извън добавената тема:
<br>
category.blade.php
<br>
product.blade.php
<br>
search.blade.php
<br>
<br>
Routes:
<br>
Описани са в web.php, който файл се намира в routes->web.php
<br>
<br>
Визуално изглеждаш сайта ми:
Това е главната ми страница:
![image](https://user-images.githubusercontent.com/57368045/149376516-95183713-81d2-46a4-a3e4-5e0d3c892d33.png)
<br>
Това е в главната страница по надолу:
![image](https://user-images.githubusercontent.com/57368045/149376775-ab2f87c1-9cb4-4567-bf70-e6c147caeaaf.png)
<br>
Имам добавен footer за всяка страница:
![image](https://user-images.githubusercontent.com/57368045/149377217-158b4512-8a45-4b35-92e8-174cf1662031.png)
<br>

На главната страница също съм направила така че да излизат последните добавени продукти и също така категориите:
![image](https://user-images.githubusercontent.com/57368045/149377430-2fccdd60-1bbb-4a6c-8d8c-86b3825bef78.png)
<br>
Имам Search, като с него можем да търсим съответно по име на продукт, категория и дата на добавяне с цел да можем да видим по-скорошни или по-стари продукти:
![image](https://user-images.githubusercontent.com/57368045/149377602-9409110a-2071-4883-912f-11ee34e0dd8a.png)
<br>
Като отидем на страницата с продукти визуализирам продуктите:
![image](https://user-images.githubusercontent.com/57368045/149377787-db58c53a-ca93-4950-9c09-feba3c95ccc1.png)
<br>
За текущ продукт виждаме следното:
![image](https://user-images.githubusercontent.com/57368045/149377880-3daf414e-5eff-449a-a08b-0fccf948f5ca.png)
<br>
Това е страницата с категориите:
![image](https://user-images.githubusercontent.com/57368045/149377952-10a01483-0ced-4d41-89c4-dd0de1a566d0.png)
<br>
Страница със съответните продукти за съответната категория:
![image](https://user-images.githubusercontent.com/57368045/149378040-b6ab0d42-4451-4a95-9d84-eec8871d1d1e.png)
<br>
В самата навигация имам също Search за по-бързо и лесно търсене:
![image](https://user-images.githubusercontent.com/57368045/149378214-e52c3c6f-ab0e-43bd-96a8-693c3c8bc1f6.png)




