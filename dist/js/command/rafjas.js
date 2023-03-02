// Default Password Function
function password_default(){
    document.getElementById("password").value = "12345!";
}    
//End Default Password Function     
    
// Add Account Function                 
function insertdata(){ 
    var id = document.getElementById("user_id").value;
    var a_Complete = document.getElementById("a_Complete").value;
    var username = document.getElementById("username").value;
    var type = document.getElementById("type").value;
    var password = document.getElementById("password").value;
    $.ajax({
    type: "POST",
    url: "controller/add-account", 
    data: {"user_id": id,"a_Complete": a_Complete,"username": username, "type": type, "password": password},
    success: function(html){
    $('#idsp').html(html);
        },
    });     
} 

// Update Account Function 
function updatedata(){ 
    var idx = document.getElementById("idx").value;
    var a_Complete = document.getElementById("a_Complete").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var type = document.getElementById("type").value;
    $.ajax({
    type: "POST", 
    url: "controller/update-account",
    data: {"idx": idx, "a_Complete": a_Complete, "username": username, "password": password, "type": type},
    success: function(html){
    $('#idsp').html(html);
        },
    });     
} 

// Add Data to Table #Registration 
function regdata(){
    // Table #1 tb_students
    var id = document.getElementById("stud_id").value;
    var time_encoded = document.getElementById("time_encoded").value;
    var mode_of_reg = document.getElementById("mode_of_reg").value;
    var l_name = document.getElementById("l_name").value;
    var f_name = document.getElementById("f_name").value;
    var m_name = document.getElementById("m_name").value;
    var lrn = document.getElementById("lrn").value;
    var s_contact_num = document.getElementById("s_contact_num").value;
    var birthdate = document.getElementById("birthdate").value;
    var gender = document.getElementById("gender").value;
    var religion = document.getElementById("religion").value;
    var a_status = document.getElementById("a_status").value;
    var regCode = document.getElementById("regCode").value;
    var provCode = document.getElementById("provCode").value;
    var citymunCode = document.getElementById("citymunCode").value;
    var brgyCode = document.getElementById("brgyCode").value;
    var address = document.getElementById("address").value;
    var current_school = document.getElementById("current_school").value;
    var school_type = document.getElementById("school_type").value;
    var year_grad = document.getElementById("year_grad").value;
    var a_strand = document.getElementById("a_strand").value;
    var a_level = document.getElementById("a_level").value;
    var fb_account = document.getElementById("fb_account").value;
    var x_name = document.getElementById("x_name").value;
    var ip = document.getElementById("ip").value;
    var s_ip = document.getElementById("s_ip").value;
    var mt = document.getElementById("mt").value;
    var s_mt = document.getElementById("s_mt").value;

    // Table #2 tb_students
    var grant_type = document.getElementById("grant_type").value;
    var student_type = document.getElementById("student_type").value;
    var fathers_name = document.getElementById("fathers_name").value;
    var f_contactnum = document.getElementById("f_contactnum").value;
    var mothers_name = document.getElementById("mothers_name").value;
    var m_contactnum = document.getElementById("m_contactnum").value; 

    var guardian_name = document.getElementById("guardian_name").value;
    var guardian_relationship = document.getElementById("guardian_relationship").value;
    var guardian_contactnum = document.getElementById("guardian_contactnum").value;
    var credentials = document.getElementById("credentials").value;

    var learning_modality = document.getElementById("learning_modality").value;
    var referred = document.getElementById("referred").value;
    var last_levelcompleted = document.getElementById("last_levelcompleted").value;
    var last_yearcompleted = document.getElementById("last_yearcompleted").value;
    var school_id = document.getElementById("school_id").value;
    var school_last_attended = document.getElementById("school_last_attended").value;
    var school_address = document.getElementById("school_address").value;


    // var grant_type = document.getElementById("grant_type").value;
    // var student_type = document.getElementById("student_type").value;

    $.ajax({
    type: "POST",
    url: "controller/stud-register", 
    // data: {"stud_id": id,"time_encoded": time_encoded,"l_name": l_name, "f_name": f_name, "m_name": m_name, "lrn": lrn, "s_contact_num": s_contact_num, "birthdate": birthdate, "gender": gender, "religion": religion, "regCode": regCode, "provCode": provCode, "citymunCode": citymunCode, "address": address, "current_school": current_school, "school_type": school_type, "a_strand": a_strand, "a_level": a_level, "grant_type": grant_type, "student_type": student_type, "fb_account": fb_account},
 data: {"stud_id": id,"time_encoded": time_encoded,"mode_of_reg": mode_of_reg,"l_name": l_name, "f_name": f_name, "m_name": m_name, "x_name": x_name, "ip": ip,"year_grad": year_grad, "s_ip": s_ip, "mt": mt, "s_mt": s_mt, "lrn": lrn, "learning_modality": learning_modality, "referred": referred, "last_levelcompleted": last_levelcompleted, "last_yearcompleted": last_yearcompleted, "school_id": school_id, "school_last_attended": school_last_attended, "school_address": school_address, "s_contact_num": s_contact_num, "birthdate": birthdate, "gender": gender, "religion": religion, "a_status": a_status, "regCode": regCode, "provCode": provCode, "citymunCode": citymunCode, "brgyCode": brgyCode, "address": address, "current_school": current_school, "school_type": school_type, "a_strand": a_strand, "a_level": a_level, "fb_account": fb_account, "grant_type": grant_type, "student_type": student_type, "fathers_name": fathers_name, "f_contactnum": f_contactnum, "mothers_name": mothers_name, "m_contactnum": m_contactnum, "guardian_name": guardian_name, "guardian_relationship": guardian_relationship, "guardian_contactnum": guardian_contactnum, "credentials": credentials},    
    success: function(html){
    $('#idreg').html(html);
        },
    });     
}

// Update Registration Function 
function updatereq(){ 
    var idx = document.getElementById("idx").value;
    var mode_of_reg = document.getElementById("mode_of_reg").value;
    var l_name = document.getElementById("l_name").value;
    var f_name = document.getElementById("f_name").value;
    var m_name = document.getElementById("m_name").value;
    var x_name = document.getElementById("x_name").value;
    var lrn = document.getElementById("lrn").value;
    var s_contact_num = document.getElementById("s_contact_num").value;
    var birthdate = document.getElementById("birthdate").value;
    var gender = document.getElementById("gender").value;
    var religion = document.getElementById("religion").value;
    var regCode = document.getElementById("regCode").value;
    var provCode = document.getElementById("provCode").value; 
    var citymunCode = document.getElementById("citymunCode").value;
    var brgyCode = document.getElementById("brgyCode").value;
    var address = document.getElementById("address").value;
    var current_school = document.getElementById("current_school").value;
    var school_type = document.getElementById("school_type").value;
    var year_grad = document.getElementById("year_grad").value;
    var a_strand = document.getElementById("a_strand").value;
    var a_level = document.getElementById("a_level").value;
    var fb_account = document.getElementById("fb_account").value;
    var ip = document.getElementById("ip").value;
    var s_ip = document.getElementById("s_ip").value;
    var mt = document.getElementById("mt").value;
    var s_mt = document.getElementById("s_mt").value;

    // Table #2 tb_students
    var grant_type = document.getElementById("grant_type").value;
    var student_type = document.getElementById("student_type").value;
    var fathers_name = document.getElementById("fathers_name").value;
    var f_contactnum = document.getElementById("f_contactnum").value;
    var mothers_name = document.getElementById("mothers_name").value;
    var m_contactnum = document.getElementById("m_contactnum").value; 

    var guardian_name = document.getElementById("guardian_name").value;
    var guardian_relationship = document.getElementById("guardian_relationship").value;
    var guardian_contactnum = document.getElementById("guardian_contactnum").value;
    var credentials = document.getElementById("credentials").value;

    var learning_modality = document.getElementById("learning_modality").value;
    var referred = document.getElementById("referred").value;
    var last_levelcompleted = document.getElementById("last_levelcompleted").value;
    var last_yearcompleted = document.getElementById("last_yearcompleted").value;
    var school_id = document.getElementById("school_id").value;
    var school_last_attended = document.getElementById("school_last_attended").value;
    var school_address = document.getElementById("school_address").value;
    $.ajax({
    type: "POST", 
    url: "controller/stud-update",
    data: {"idx": idx,"l_name": l_name,"mode_of_reg": mode_of_reg,"f_name": f_name, "m_name": m_name, "x_name": x_name, "ip": ip, "year_grad": year_grad, "s_ip": s_ip, "mt": mt, "s_mt": s_mt,"lrn": lrn, "learning_modality": learning_modality, "referred": referred, "last_levelcompleted": last_levelcompleted, "last_yearcompleted": last_yearcompleted, "school_id": school_id, "school_last_attended": school_last_attended, "school_address": school_address, "s_contact_num": s_contact_num, "birthdate": birthdate, "gender": gender, "religion": religion, "regCode": regCode, "provCode": provCode, "citymunCode": citymunCode, "brgyCode": brgyCode, "address": address, "current_school": current_school, "school_type": school_type, "a_strand": a_strand, "a_level": a_level, "fb_account": fb_account, "grant_type": grant_type, "student_type": student_type, "fathers_name": fathers_name, "f_contactnum": f_contactnum, "mothers_name": mothers_name, "m_contactnum": m_contactnum, "guardian_name": guardian_name, "guardian_relationship": guardian_relationship, "guardian_contactnum": guardian_contactnum, "credentials": credentials},    
    // success: function(html){  
    success: function(html){
    $('#idreq').html(html);
        },
    });     
} 


// Add Data to Table #Section 
function insertsection(){ 
    var id = document.getElementById("id_section").value;
    var sec_name = document.getElementById("sec_name").value;
    var max_stu = document.getElementById("max_stu").value;
    var a_level = document.getElementById("a_level").value;
    var a_strand = document.getElementById("a_strand").value;
    $.ajax({
    type: "POST", 
    url: "controller/add-section",
    data: {"id_section": id, "sec_name": sec_name, "max_stu": max_stu, "a_level": a_level, "a_strand": a_strand},
    success: function(html){
    $('#idsp').html(html);
        },
    });     
} 

// Update Data to Table #Section 
function updatesection(){ 
    var idx = document.getElementById("idx").value;
    var sec_name = document.getElementById("sec_name").value;
    var max_stu = document.getElementById("max_stu").value;
    var a_level = document.getElementById("a_level").value;
    var a_strand = document.getElementById("a_strand").value;
    $.ajax({
    type: "POST", 
    url: "controller/update-section",
    data: {"idx": idx, "sec_name": sec_name, "max_stu": max_stu, "a_level": a_level, "a_strand": a_strand},
    success: function(html){
    $('#idsp').html(html);
        },
    });     
} 


 // Add Data to Table #Facultyloads #11
function insertfacload(){ 
    var idx = document.getElementById("idx").value;
    var a_level = document.getElementById("a_level").value;
    var Subjectloads = document.getElementById("Subjectloads").value;
    var Section = document.getElementById("Section").value;
    var Semester_year = document.getElementById("Semester_year").value;
    $.ajax({
    type: "POST", 
    url: "controller/add-facloads",
    data: {"idx": idx, "a_level": a_level, "Subjectloads": Subjectloads, "Section": Section, "Semester_year": Semester_year},
    success: function(html){
    $('#idsp').html(html);
        },
    });     
} 

 // Add Data to Table #Facultyloads #11
function insertfacload(){ 
    var idx = document.getElementById("idx").value;
    var a_level = document.getElementById("a_level").value;
    var Subjectloads = document.getElementById("Subjectloads").value;
    var Section = document.getElementById("Section").value;
    var Semester_year = document.getElementById("Semester_year").value;
    $.ajax({
    type: "POST", 
    url: "controller/add-facloads",
    data: {"idx": idx, "a_level": a_level, "Subjectloads": Subjectloads, "Section": Section, "Semester_year": Semester_year},
    success: function(html){
    $('#idsp').html(html);
        },
    });     
} 

 // Add Data to Table #Advisory
function insertadvisory(){ 
    var User_id = document.getElementById("User_id").value;
    var id_section = document.getElementById("id_section").value;
    var semester_year = document.getElementById("semester_year").value;
    $.ajax({
    type: "POST", 
    url: "controller/add-advisory",
    data: {"User_id": User_id, "id_section": id_section, "semester_year": semester_year},
    success: function(html){
    $('#idsp').html(html);
        },
    });     
} 
