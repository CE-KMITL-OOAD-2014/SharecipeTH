## Functional requirements ##

    1) ระบบสมัครสมาชิก แก้ไขและลบประวัติสมาชิก
    2) สมาชิกเพิ่มสูตรอาหารในหน้าข้อมูลส่วนตัวของตนเอง
    3) เจ้าของสูตรอาหารสามารถลบหรือแก้ไขสูตรอาหารของตนเองได้
    4) สมาชิกให้คะแนน(เพื่อนำไปจัดอันดับ)สูตรอาหารได้
    5) สมาชิกแสดงความคิดเห็นสูตรอาหารได้
    6) ระบบค้นหาสูตรอาหารภายในเว็บไซต์
    7) คำนวณแคลอรี่ของอาหารแต่ละสูตร
    8) สมาชิกสามารถรายงานข้อผิดพลาดของระบบได้
  
## Non-functional requirements ##

    1) แจ้งเตือนเมื่อมีการแสดงความคิดเห็นสูตรอาหาร
    2) มีตัวกรองการค้นหา(Filter) เพื่อทำให้ง่ายต่อการหาสูตรอาหารที่ต้องการ
    3) มีแบบฟอร์มให้กรอกเมื่อต้องการเพิ่มสูตรอาหาร
    4) วิธีการใช้งานและส่วนติดต่อผู้ใช้งาน(User interface) ที่ไม่ซับซ้อน
    5) แสดงสูตรอาหารที่ได้รับความนิยมจากการจัดอันดับของสมาชิก
    6) ใช้โปรโตคอลที่มีการเข้ารหัส(https) เพื่อความปลอดภัยข้อมูลของสมาชิก
    7) ผู้ดูแลระบบสามารถตรวจสอบคำร้องเรียนที่สมาชิกรายงานมาได้
    
## Use case diagram ##

![Use case diagram](http://i.imgur.com/Tcuwatu.jpg)

## Use case specifications ##

#### **1. Use case name :** โพสสูตรอาหาร (Post recipe) ####
- **Use case purpose :** ทำให้ผู้ใช้งานสามารถแบ่งปันสูตรอาหาร โดยการกรอกข้อมูลต่างๆลงในแบบฟอร์ม เพื่อที่จะนำมาแบ่งปันให้ผู้อื่นดูได้
- **Preconditions :** ผู้ใช้งานต้องเป็นสมาชิก
- **Postconditions :** เจ้าของสุตรอาหารสามารถแก้ไข/ลบสูตรอาหารของตัวเองได้และสูตรอาหารนั้นสามารถค้นหาได้ด้วยบุคคลทั่วไป
- **Limitations :** ประเภทของสูตรอาหารและวัตถุดิบอาจไม่มีครบทุกชนิดให้ใส่เป็น "อื่นๆ" แทน จะปรับปรุงเพิ่มเติมภายหลัง และการอัพโหลดรูปภาพนั้นรองรับไฟล์ภาพเพียงบางชนิด
- **Assumptions :** ผู้ใช้งานควรรู้จักหน่วยตวงของส่วนผสม และปริมาณของส่วนผสม
- **Primary Scenario :**
  - A.	ผู้ใช้งานลงชื่อเข้าใช้
  - B.	กดปุ่มเพิ่มสูตรอาหาร
  - C.	เลือกประเภทของอาหาร
  - D.	กรอกข้อมูลที่ต้องการแบ่งปันลงในแบบฟอร์ม
  - E.	เลือกรูปอัพโหลดเป็นรูปภาพประกอบ
  - F.	กดปุ่ม "แบ่งปัน"
  - G.	กดปุ่ม "ตกลง" ในหน้าต่างยืนยันเพื่อแบ่งปันสูตรอาหาร
  - H.	กลับไปหน้าหลักผู้ใช้งาน
- **Alternate Scenario :** 
  - condition 1 : ผู้ใช้เลือกรูปผิดไฟล์
    - E1. กดเลือกรุปที่จะอัพโหลดใหม่ 
    - E2. กลับไปทำขั้นตอน F ต่อ
   

#### **2. Use case name :** ค้นหาสูตรอาหาร (Search recipe) ####
- **Use case purpose :** ทำให้ผู้ใช้งานสามารถค้นหาสูตรอาหาร โดยมีตัวกรองการค้นหา(Filter) เพื่อให้ง่ายต่อการค้นหาสูตรอาหารที่ตรงกับความต้องการ
- **Preconditions :** -
- **Postconditions :** ผู้ใช้งานสามารถเลือกสูตรอาหารจากผลการค้นหาเพื่อดูรายละเอียด
- **Limitations :** ไม่สามารถค้นหาด้วยข้อมูลที่เจาะจงในบางหัวข้อ เช่น แคลอรี่ที่ต้องการ ไม่สามารถใส่เป็นตัวเลขต้องการ แต่ต้องเลือกช่วงของแคลอรี่ที่ทางเว็บไซต์จัดไว้ให้
- **Assumptions :** -
- **Primary Scenario :**
  -  A. ผู้ใช้งานพิมพ์ชื่ออาหารหรือวัตถุดิบที่ต้องการค้นหา
  -  B. กดปุ่มค้นหา
  -  C. ผู้ใช้งานจะพบกับผลการค้นหา และตัวกรองการค้นหา(Filter) โดยผู้ใช้งานสามารถเลือกตัวเลือกต่างๆที่ช่วยจำกัดผลการค้นหาให้ตรงกับที่ต้องการด้วยตัวกรองการค้นหา (Filter)
  -  D. หากต้องการใช้ตัวกรองการค้นหา ใส่รายละเอียดลงในตัวกรอง และกดปุ่มค้นหา
  -  E. กดเลือกสูตรอาหารที่ต้องการ
  -  F. ผู้ใช้งานจะพบกับหน้ารายละเอียดของสูตรอาหารนั้น รวมถึงชื่อเจ้าของสูตรอาหาร
- **Alternate Scenario :** 
  - condition 1 : คำค้นหาของผู้ใช้งานไม่ตรงกับรายการใดๆ
    - C1. พิมพ์คำค้นหาใหม่
    - C2. กลับไปทำขั้นตอน D ต่อ


## Activity diagrams ##

**1.Use case :** ลบสูตรอาหาร (Delete Recipe)

####![Activity diagrams1](http://i.imgur.com/lpJxAJI.jpg)
**2.Use case :** แสดงความคิดเห็น(Comment Recipe)

####![Activity diagrams2](http://i.imgur.com/7xWr8Ap.jpg)
