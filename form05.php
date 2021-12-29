<!DOCTYPE html>
<html>

<head>
    <title>63160256 form5</title>
</head>

    <body>
        <h1>แบบสอบถามข้อมูลส่วนบุคคล</h1>
    <hr>
    <form name="register">
        คำนำหน้า <select>
                    <option value=1> นาย
                    <option value=2> นาง
                    <option value=3> นางสาว
                </select> <br>
        <br>

        ชื่อ <input type="text" maxlength="5" /> นามสกุล <input type="text" maxlength="5" /> <br>
        <br>

        วันเกิด <input type="date" /> <br>
        <br>

        รหัสนิสิต <input type="number" /> <br>
        <br>
        
        อีเมล <input type="email" name="mail" /> <br>
        <br>

        รหัสผ่าน <input type="password" name="pass" /> <br>
        <br>

        <hr>

        <br>

        คณะ <select disabled> 
                <option value=1> คณะแพทยศาสตร์
                <option value=2> คณะพยายาลศาสตร์
                <option value=3 selected> คณะวิทยาการสารสนเทศ
            </select> <br>
        <br>

        นิสิตชั้นปีที่ <input type="number" value="2" disabled /> <br>
        <br>

        มกุล <br>
        <input type="radio" name="cluster" /> Cluster 0 - Cluster 3 <br>
        <input type="radio" name="cluster" /> Cluster 4 - Cluster 6 <br>
        <input type="radio" name="cluster" /> Cluster 7 - Cluster 9 <br>
        <br>

        ภาษาที่ถนัด <br>
        <input type="checkbox" name="lag" checked/> HTML <br>
        <input type="checkbox" name="lag" checked/> CSS <br>
        <input type="checkbox" name="lag" checked/> MySQL <br>
        <input type="checkbox" name="lag" checked/> JS <br>
        <input type="checkbox" name="lag" checked/> PHP <br>
        <br>
        
        <input type="reset" value=ยกเลิก />
        <input type="submit" value=บันทึก />

    </form>

    </body>

</html>