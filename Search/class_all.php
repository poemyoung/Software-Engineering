<?php
require_once 'mysql_connect.php';
require 'class_article_name.php';
require 'class_article_author.php';
require 'class_article_content.php';
require 'class_disease_depart.php';
require 'class_disease_name.php';
require 'class_disease_part.php';
require 'class_disease_symptom.php';
require 'class_doctor_expertise.php';
require 'class_doctor_faculty.php';
require 'class_doctor_name.php';
require 'class_hospital_area.php';
require 'class_hospital_level.php';
require 'class_hospital_name.php';
require 'class_medicine_company.php';
require 'class_medicine_name.php';
require 'class_medicine_symptom.php';

header("Content-Type:text/html;charset=utf-8");
class Allclass
{
    function __construct($information)
    {
        $this->content = $information;
    }
    public function get_result()
    {
        $article = array();
        $disease = array();
        $doctor = array();
        $hospital = array();
        $medicine = array();
        $all_res = array();
        //文章作者
        $article_author_deal = new ArticleAuthorclass($this->content);
        $article_author_result = $article_author_deal->get_result();
        try {
            $i = 0;
            $article_author = array();
            while ($row = mysqli_fetch_array($article_author_result, MYSQLI_ASSOC)) {
                $article_author[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $article_author = array();
        }
        $article['articleAuthor'] = $article_author;
        $all_res['articleAuthorEqual'] = empty($article_author) ? null : $article_author[0]['equal'];
        //文章内容
        $article_content_deal = new ArticleContentclass($this->content);
        $article_content_result = $article_content_deal->get_result();
        try {
            $i = 0;
            $article_content = array();
            while ($row = mysqli_fetch_array($article_content_result, MYSQLI_ASSOC)) {
                $article_content[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $article_content = array();
        }
        $article['articleContent'] = $article_content;
        //文章标题
        $article_name_deal = new ArticleNameclass($this->content);
        $article_name_result = $article_name_deal->get_result();
        try {
            $i = 0;
            $article_name = array();
            while ($row = mysqli_fetch_array($article_name_result, MYSQLI_ASSOC)) {
                $article_name[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $article_name = array();
        }
        $article['articleName'] = $article_name;
        $all_res['article'] = $article;
        //疾病
        //疾病科室
        $disease_depart_deal = new DiseaseDepartclass($this->content);
        $disease_depart_result = $disease_depart_deal->get_result();
        try {
            $i = 0;
            $disease_depart = array();
            while ($row = mysqli_fetch_array($disease_depart_result, MYSQLI_ASSOC)) {
                $disease_depart[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $disease_depart = array();
        }
        $disease['diseaseDepart'] = $disease_depart;

        //疾病症状
        $disease_symptom_deal = new DiseaseSymptomclass($this->content);
        $disease_symptom_result = $disease_symptom_deal->get_result();
        try {
            $i = 0;
            $disease_symptom = array();
            while ($row = mysqli_fetch_array($disease_symptom_result, MYSQLI_ASSOC)) {
                $disease_symptom[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $disease_symptom = array();
        }
        $disease['diseasesymptom'] = $disease_symptom;
        //疾病部位
        $disease_part_deal = new DiseasePartclass($this->content);
        $disease_part_result = $disease_part_deal->get_result();
        try {
            $i = 0;
            $disease_part = array();
            while ($row = mysqli_fetch_array($disease_part_result, MYSQLI_ASSOC)) {
                $disease_part[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $disease_part = array();
        }
        $disease['diseasePart'] = $disease_part;

        //疾病名
        $disease_name_deal = new DiseaseNameclass($this->content);
        $disease_name_result = $disease_name_deal->get_result();
        try {
            $i = 0;
            $disease_name = array();
            while ($row = mysqli_fetch_array($disease_name_result, MYSQLI_ASSOC)) {
                $disease_name[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $disease_name = array();
        }
        $disease['diseaseName'] = $disease_name;
        $all_res['diseaseNameEqual'] = empty($disease_name) ? null : $disease_name[0]['equal'];
        $all_res['disease'] = $disease;

        //医生
        //医生主治
        $doctor_expertise_deal = new DoctorExpertiseclass($this->content);
        $doctor_expertise_result = $doctor_expertise_deal->get_result();
        try {
            $i = 0;
            $doctor_expertise = array();
            while ($row = mysqli_fetch_array($doctor_expertise_result, MYSQLI_ASSOC)) {
                $doctor_expertise[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $doctor_expertise = array();
        }
        $doctor['doctorExpertise'] = $doctor_expertise;

        //医生科室
        $doctor_faculty_deal = new DoctorFacultyclass($this->content);
        $doctor_faculty_result = $doctor_faculty_deal->get_result();
        try {
            $i = 0;
            $doctor_faculty = array();
            while ($row = mysqli_fetch_array($doctor_faculty_result, MYSQLI_ASSOC)) {
                $doctor_faculty[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $doctor_faculty = array();
        }
        $doctor['doctorFaculty'] = $doctor_faculty;

        //医生名字
        $doctor_name_deal = new DoctorNameclass($this->content);
        $doctor_name_result = $doctor_name_deal->get_result();
        try {
            $i = 0;
            $doctor_name = array();
            while ($row = mysqli_fetch_array($doctor_name_result, MYSQLI_ASSOC)) {
                $doctor_name[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $doctor_name = array();
        }
        $doctor['doctorName'] = $doctor_name;
        $all_res['doctorNameEqual'] = empty($doctor_name) ? null : $doctor_name[0]['equal'];
        $all_res['doctor'] = $doctor;

        //医院
        //医院地区
        $hospital_area_deal = new HospitalAreaclass($this->content);
        $hospital_area_result = $hospital_area_deal->get_result();
        try {
            $i = 0;
            $hospital_area = array();
            while ($row = mysqli_fetch_array($hospital_area_result, MYSQLI_ASSOC)) {
                $hospital_area[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $hospital_area = array();
        }
        $hospital['hospitalArea'] = $hospital_area;
        //医院等级
        $hospital_level_deal = new HospitalLevelclass($this->content);
        $hospital_level_result = $hospital_level_deal->get_result();
        try {
            $i = 0;
            $hospital_level = array();
            while ($row = mysqli_fetch_array($hospital_level_result, MYSQLI_ASSOC)) {
                $hospital_level[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $hospital_level = array();
        }
        $hospital['hospitalLevel'] = $hospital_level;

        //医院名
        $hospital_name_deal = new HospitalNameclass($this->content);
        $hospital_name_result = $hospital_name_deal->get_result();
        try {
            $i = 0;
            $hospital_name = array();
            while ($row = mysqli_fetch_array($hospital_name_result, MYSQLI_ASSOC)) {
                $hospital_name[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $hospital_name = array();
        }
        $hospital['hospitalName'] = $hospital_name;
        $all_res['hospitalNameEqual'] = empty($hospital_name) ? null : $hospital_name[0]['equal'];
        $all_res['hospital'] = $hospital;

        //药品
        //药品公司
        $medicine_company_deal = new MedicineComclass($this->content);
        $medicine_company_result = $medicine_company_deal->get_result();
        try {
            $i = 0;
            $medicine_company = array();
            while ($row = mysqli_fetch_array($medicine_company_result, MYSQLI_ASSOC)) {
                $medicine_company[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $medicine_company = array();
        }
        $medicine['medicineCompany'] = $medicine_company;

        //药品名
        $medicine_name_deal = new MedicineNameclass($this->content);
        $medicine_name_result = $medicine_name_deal->get_result();
        try {
            $i = 0;
            $medicine_name = array();
            while ($row = mysqli_fetch_array($medicine_name_result, MYSQLI_ASSOC)) {
                $medicine_name[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $medicine_name = array();
        }
        $medicine['medicineName'] = $medicine_name;
        $all_res['medicineNameEqual'] = empty($medicine_name) ? null : $medicine_name[0]['equal'];
        //药品症状
        $medicine_symptom_deal = new MedicineSympclass($this->content);
        $medicine_symptom_result = $medicine_symptom_deal->get_result();
        try {
            $i = 0;
            $medicine_symptom = array();
            while ($row = mysqli_fetch_array($medicine_symptom_result, MYSQLI_ASSOC)) {
                $medicine_symptom[$i] = $row;
                $i++;
            }
            if ($i == 0) throw new Exception(-1);
        } catch (Exception $e) {
            $medicine_symptom = array();
        }
        $medicine['medicineSymptom'] = $medicine_symptom;

        $all_res['medicine'] = $medicine;
        
        return $all_res;
    }


    private $content;
}
