##  后端查询功能

### 数据库连接

##### 连接文件 mysql_connect.php

###### 需要打开把用户名和密码以及数据库改成自己的才可以用

-----

-----

##### 文件部署，整个文件部署到服务器上，比如本地apache默认是htdocs文件夹下，解压htdocs/Search/全部文件，然后修改demo.html中的服务器地址

-----

-----

### 一，查询医生姓名

##### 前端请求文件 search_doctor_name.php

##### 处理类 class_doctor_name.php

##### 前端请求名：doctorName

##### 后端应答：查询有结果：返回JSON对象,包含医院表中的所有信息 [{...}{...}{...}]

#####                    查询无结果：返回-1.

##### 注：可拼音查询，和首字母查询

##### 汉字名字全匹配，返回结果为equal:'true'全匹配成功，equal:'false'全匹配失败

-----

### 二，查询医院名字

##### 前端请求文件 search_doctor_name.php

##### 处理类 class_doctor_name.php

##### 前端请求名：doctorName

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

#####                   查询无结果：返回-1.

##### 医院名字全匹配，返回结果为equal:'true'全匹配成功，equal:'false'全匹配失败

-----

### 三，查询疾病名

##### 前端请求文件 search_disease_name.php

##### 处理类 class_disease_name.php

##### 前端请求名：diseaseName

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

##### 疾病名字全匹配，返回结果为equal:'true'全匹配成功，equal:'false'全匹配失败

-----

### 四，查询药品名

##### 前端请求文件 search_medicine_name.php

##### 处理类 class_medicine_name.php

##### 前端请求名：medicineName

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

##### 药品名字全匹配，返回结果为equal:'true'全匹配成功，equal:'false'全匹配失

------

### 五，查询医院等级

##### 前端请求文件 search_hospital_level.php

##### 处理类 class_hospital_level.php

##### 前端请求名：hospitalLevel

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

------

### 六，查询医院地区

##### 前端请求文件 search_hospital_area.php

##### 处理类 class_hospital_area.php

##### 前端请求名：hospitalArea

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

------

### 七，查询医生科室

##### 前端请求文件 search_doctor_faculty.php

##### 处理类 class_doctor_faculty.php

##### 前端请求名：doctorFaculty

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

##### 注：查询时间有点长，不建议使用

-----

### 八，查询医生专长（主治）

##### 前端请求文件 search_doctor_expertise.php

##### 处理类 class_doctor_expertise.php

##### 前端请求名：doctorExpertise

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

-----

### 九，查询按照症状（发烧、全身酸痛等）查询疾病

##### 前端请求文件 search_disease_symptom.php

##### 处理类 class_disease_symptom.php

##### 前端请求名：diseaseSymptom

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

------

### 十，查询按照科室（内科、儿科等）查询疾病

##### 前端请求文件 search_disease_depart.php

##### 处理类 class_disease_depart.php

##### 前端请求名：diseaseDepart

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

-----

### 十一，查询按照症状（鼻炎、头疼等）查询药品

##### 前端请求文件 search_medicine_symptom.php

##### 处理类 class_medicine_symptom.php

##### 前端请求名：medicineSymptom

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

-----

### 十二，查询按照生产厂家查询药品（制药厂用户可以用）

##### 前端请求文件 search_medicine_company.php

##### 处理类 class_medicine_company.php

##### 前端请求名：medicineCom

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

-----

-----

### 十三，查询文章标题

##### 前端请求文件 search_article_name.php

##### 处理类 class_article_name.php

##### 前端请求名：medicineName

##### 后端应答：查询有结果：返回JSON对象 ，包含文章中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

-----

### 十四，查询文章作者

##### 前端请求文件 search_article_author.php

##### 处理类 class_article_author.php

##### 前端请求名：articleAuthor

##### 后端应答：查询有结果：返回JSON对象 ，包含文章中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

##### 作者名字全匹配，返回结果为equal:'true'全匹配成功，equal:'false'全匹配失败

----

### 十五，查询文章内容

##### 前端请求文件 search_article_content.php

##### 处理类 class_article_content.php

##### 前端请求名：articleContent

##### 后端应答：查询有结果：返回JSON对象 ，包含文章中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

----

-----

### 十六，全体查询

##### 前端请求文件 search_all.php

##### 处理类 class_all.php

##### 前端请求名：information

##### 后端应答：返回JSON对象 (有无结果均返回)，json对象结构如下：

![1575795423725](C:\Users\lemon\AppData\Roaming\Typora\typora-user-images\1575795423725.png)

#### 以上是搜索药品名为优卡丹后的结果

#### 三个尾部为Equal的字段代表的是是否存在全匹配，其余的封装在相应数组中

###### 三个尾部为Equal的字段有三个值，true表示存在全匹配，false表示不存在全匹配，null表示相应的字段无结果（即为-1）

### 比如想获得文章作者结果： data => article  => articleAuthor     即data.article.articleAuthor

### 再比如想获得articleAuthorEqual ： data.articleAuthorEqual

