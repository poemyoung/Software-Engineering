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

-----

### 二，查询医院名字

##### 前端请求文件 search_doctor_name.php

##### 处理类 class_doctor_name.php

##### 前端请求名：doctorName

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

#####                   查询无结果：返回-1.

-----

### 三，查询疾病名

##### 前端请求文件 search_disease_name.php

##### 处理类 class_disease_name.php

##### 前端请求名：diseaseName

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

-----

### 四，查询药品名

##### 前端请求文件 search_medicine_name.php

##### 处理类 class_medicine_name.php

##### 前端请求名：medicineName

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.

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

### 十二，查询按照生产厂家查询药品（制药厂用户可以用）

##### 前端请求文件 search_medicine_company.php

##### 处理类 class_medicine_company.php

##### 前端请求名：medicineCom

##### 后端应答：查询有结果：返回JSON对象 ，包含医院表中的所有信息[{...}{...}{...}]

##### 查询无结果：返回-1.