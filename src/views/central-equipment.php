<?php
require_once '../system/system.php';

if (empty($_GET['eq'])) {
    header("Location: index.php");
    exit;
}
doc_head('หน่วยเครื่องมือวิเคราะห์กลาง');
?>       
</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row">
            <div class="col-md-12">
                <?php
                if ($_GET['eq'] == 'XPS') {
                    ?>
                    <img src="../files/xps.jpg" class="img-responsive" alt="Responsive image" style="margin: 0 auto;">
                    <h2 class="text-center">เครื่องวิเคราะห์ผิววัสดุ XPS</h2>
                    <h3 class="text-center">(X-ray Photoelectron Spectroscopy)</h3>
                    <p>&nbsp;</p>

                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XPS เป็นตัวย่อของคำเต็มว่า X-ray Photoelectron Spectroscopy ที่อาจแปลเป็นไทยได้ว่า "สเปคโตรสโคปีของอนุภาคอิเล็กตรอนที่ถูกปลดปล่อยด้วยรังสีเอกซ์" 
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XPS เป็นเทคนิคเวิเคราะห์ทั้งเชิงคุณภาพและเชิงประมาณ ที่สามารถให้ข้อมูลสมบัติทางเคมีที่ระดับผิวของวัสดุในหลายแง่มุม เช่น ชนิดและจำนวนธาตุองค์ประกอบ โครงสร้างทางเคมี ชนิดพันธะทางเคมี และสถานะออกซิเดชันของอะตอม เป็นต้น นอกจากนั้นยังรวมถึงความสม่ำเสมอของธาตุองค์ประกอบ สภาพทางเคมีของผิวที่เปลี่ยนไป หลังถูกกระทบด้วยความร้อน สารเคมี ลำไอออน พลาสมา หรือ รังสี UV เป็นต้น
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เทคนิค XPS ใช้วิเคราะห์วัสดุได้มากมายหลายชนิด ทั้งสารประกอบอินทรีย์ และอนินทรีย์ โลหะผสม เซมิคอนดักเตอร์ พอลิเมอร์ แก้ว เซรามิกส์ สี สารเคลือบ กระดาษ หมึก ไม้ เครื่องสำอาง ฟัน กระดูก ฯลฯ จึงมีอุตสาหกรรมหลายประเภทที่ต้องอาศัยเครื่อง XPS เช่น อุตสาหกรรมรถยนต์ แบตเตอรี่ สารเคมี คอมพิวเตอร์ เครื่องสำอาง ไมโครอิเล็กทรอนิกส์ สิ่งทอ อาหาร แก้ว กาว น้ำมันหล่อลื่น หลอดไฟฟ้า บรรจุภัณฑ์ กระดาษและไม้ พอลิเมอร์และพลาสติก สิ่งพิมพ์ โลหะ ฯลฯ
                    </p>
                    <p>&nbsp;</p>

                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เอกสารรายละเอียดเพิ่มเติม เครื่องวิเคราะห์ผิววัสดุ XPS คลิก <a target="_blank" href="../files/eq/xps_machine.pdf">Download</a> ที่นี่</p>
                    <p>&nbsp;</p>

                    <h2>ข้อควรทราบในการขอใช้บริการวิเคราะห์ด้วยเทคนิค XPS</h2>
                    <h4>ลักษณะตัวอย่างที่นำมาวิเคราะห์</h4>
                    <ul>
                        <li>ตัวอย่างที่เป็นแผ่นโลหะ, กระจก, ซิลิกอน, พอลิเมอร์ และไม่ได้เคลือบด้วยฟิล์มบาง ผู้ขอรับบริการสามารถส่งตัวอย่างมาวิเคราะห์ได้ตามปกติ โดยนำตัวอย่างห่อด้วยอลูมิเนียมฟอยล์ แล้วจึงนำไปใส่ถุงพลาสติก</li>
                        <li>ตัวอย่างที่ถูกเคลือบผิวด้วยฟิล์มบาง ไม่ว่าฐานรองรับจะเป็นวัสดุจำพวก โลหะ, กระจก, ซิลิกอน, พอลิเมอร์ เมื่อต้องการส่งตัวอย่างมาวิเคราะห์ จำเป็นที่จะต้องไม่ให้ผิวหน้า (บริเวณที่เป็นเนื้อฟิล์ม) สัมผัสกับวัสดุใดๆโดยการบรรจุนั้นสามารถทำได้โดยการ ติดบนเทปกาวเล็กๆภายในกล่องที่มีฝาปิดมิดชิด จากนั้นจึงจะห่อด้วยซองกันกระแทกต่อไป</li>
                        <li>ตัวอย่างที่เป็นผง ผู้ขอรับบริการ จะต้องทำการอัดเม็ดให้เรียบร้อยโดยที่เม็ดที่อัดแล้ว จะต้องมีขนาดเส้นผ่านศูนย์กลาง ไม่เกิน 1 เซนติเมตร หรือ ไม่เกิน 1x 1 เซนติเมตรและจะต้องทำการอัดให้แน่นโดยห้ามใช้สารผสมใดๆและจะต้องอัดให้บางที่สุดเท่าที่จะทำได้ (ตั้งแต่ � มิลลิเมตร และไม่เกิน 1.5 มิลลิเมตร) เมื่ออัดเม็ดแล้ว จะต้องไม่หลุดร่อนเป็นผงอีก และไม่แตก, หัก, กร่อน ได้ง่าย และในกรณีที่ผงมีความชื้น จะต้องนำไปอบให้แห้งแล้วห่อด้วย อลูมิเนียมฟอล์ย จากนั้นจึงบรรจุลงในซองพลาสติก (ควรใส่ซองสองชั้นโดยชั้นที่สองให้บรรจุสารกันความชื้น เช่นเม็ดซิลิกาเจล ลงไปด้วย)</li>
                        <li>ตัวอย่างที่เป็นรูพรุนมาก ลักษณะคล้ายฟองน้ำ สามารถเตรียมมาได้ตามปกติเช่นเดียวกับ ตัวอย่างที่เป็นแผ่นโลหะ, กระจก, ซิลิกอน, พอลิเมอร์ แต่ไม่แนะนำให้วิเคราะห์ด้วยเทคนิค XPS เนื่องจากผลการวิเคราะห์จะเกิดความคลาดเคลื่อนได้ อันเป็นผลมาจาก Surface Roughness Effect โดยที่ Photo electron จะเกิดการกระเจิงและเข้าไปที่หัววัดได้ไม่มากพอ(สอบถามข้อมูลเพิ่มเติมได้ที่ ห้องวิเคราะห์ XPS)</li>
                        <li>	ตัวอย่างที่เป็นปุยฝ้าย ปุยนุ่น หรือเส้นใยที่ยังไม่ได้ถัก, ทอ สามารถเตรียมมาได้ตามปกติเช่นเดียวกับ ตัวอย่างที่เป็นแผ่นโลหะ, กระจก, ซิลิกอน, พอลิเมอร์ แต่ไม่แนะนำให้วิเคราะห์ด้วยเทคนิค XPS เนื่องจากผลการวิเคราะห์จะเกิดความคลาดเคลื่อนได้ อันเป็นผลมาจาก Surface Roughness Effect โดยที่ Photo electron จะเกิดการกระเจิงและเข้าไปที่หัววัดได้ไม่มากพอ เช่นเดียวกับตัวอย่างที่เป็นรูพรุน</li>
                    </ul>

                    <h4>ตัวอย่างที่ไม่รับวิเคราะห์</h4>
                    <ul>
                        <li>วัสดุที่ทำการชุบ อาบ จุ่ม อบ ทา เคลือบ wax พ่น ด้วยน้ำมันหอมระเหย, น้ำมัน และ สารระเหยต่างๆ</li>
                        <li>ตัวอย่างเป็นผงอัดเม็ด ที่มีความชื้นสูง</li>
                        <li>ตัวอย่างเป็นผงอัดเม็ด แต่ ร่วนและแตกง่ายและหนาเกิน 2 มิลลิเมตร</li>
                        <li>ตัวอย่างที่มีขนาดเล็กเกิน 2x2 มิลลิเมตร หรือน้อยกว่าเส้นผ่านศูนย์กลาง 2 มิลลิเมตร</li>
                    </ul>

                    <h4>เรื่องอื่นๆที่ควรทราบในการขอรับบริการด้วยเทคนิค XPS</h4>
                    <ul>
                        <li>ตัวอย่างจะต้องมีขนาดไม่เล็กกว่า 2 x 2 มิลลิเมตร หรือไม่น้อยกว่า ∅ 2 มิลลิเมตร และไม่หนาเกิน 1.5 มิลลิเมตร</li>
                        <li>ตัวอย่างทุกชนิดจำเป็นที่จะต้องติดลงบนเทปกาวคาร์บอน ยกเว้นตัวอย่างที่เป็นชิ้นโลหะ ดังนั้นตัวอย่างที่ถูกติดบนเทปกาวจะเกิดความเสียหายเมื่อแกะออกแต่ถ้าเป็นชิ้นโลหะจะถูกติดตั้งบนฐานแบบหนีบซึ่งสามารถขอตัวอย่างคืนได้</li>
                        <li>ในการทำ Etching และ Depth profiling จะต้องใช้เวลาในการวิเคราะห์นานกว่าปรกติ อาจมากกว่า 3 ชั่วโมง/ตัวอย่าง และจะไม่สามารถทำ Etching และ Depth profiling ถ้าฟิล์มมีความแข็งมาก โดยตัวอย่างที่นำมาวิเคราะห์ ควรเป็นตัวอย่างที่ถูกทิ้งไว้น้อยกว่า 1 อาทิตย์ เพื่อลดการเกิดปัญหาปนเปื้อนบนผิวโดยเฉพาะตัวอย่างที่มีฐานรองรับเป็น ซิลิคอน (Si)</li>
                        <li>ทางห้องวิเคราะห์ จะหยุดให้บริการกับผู้ขอรับบริการนั้นๆ ทันที ในกรณีที่เกิดความเสี่ยง เช่น ตัวอย่างร่วน, มีความชื้นสูง, ปนเปื้อน ฯลฯ</li>
                        <li>เทคนิค XPS สามารถวิเคราะห์ผิววัสดุได้ในระดับความลึกสูงสุดที่ 10นาโนเมตรเท่านั้น ซึ่งไม่ได้หมายความว่าลึกลงไป 10 นาโนเมตร แต่ Photo electron ในระดับ 10 นาโนเมตรขึ้นไปจะเดินทางออกมาไม่ได้เนื่องจากสูญญเสียพลังงาน</li>
                        <li>X-ray spot size ไม่สามารถปรับได้ ซึ่งจะถูกตั้งค่าให้อยู่ที่ 700um x 300um ซึ่งจะอาศัยการปรับที่หัววัด ดังนั้นตัวอย่างจะต้องมีขนาดไม่น้อยกว่าดังที่กล่าวข้างต้น เนื่องจากในสเปกตรัม อาจเจอพีคที่เป็นของ holder หรือฐานรองรับ ต่างๆได้</li>
                        <li>หลังจากการวิเคราะห์เสร็จสิ้น ผู้ขอรับบริการจะได้รับไฟล์ข้อมูลในรูปแบบของ PDF และ Raw Data (ASCII) ซึ่งไฟล์ Raw Data จะเป็นไฟล์ไม่มีนามสกุล ให้ผู้ขอรับบริการ ทำการเติมนามสกุล .xlsต่อท้ายชื่อไฟล์นั้นๆ ก็จะสามารถนำไปใช้งานได้ </li>
                        <li>ในการวิเคราะห์ผล ทางห้องวิเคราะห์จะไม่ทำการระบุพันธะทางเคมีให้ แต่จะระบุตำแหน่งพลังงานยึดเหนี่ยว, Atomic concentration, Mass concentration ให้เท่านั้น</li>
                        <li>ทางห้องวิเคราะห์ไม่รับเตรียมตัวอย่าง ทุกชนิด</li>
                        <li>ไม่มีส่วนลดใดๆ ในอัตราค่าบริการของทุกภาคส่วน</li>
                        <li>เวลาที่ใช้ในการวิเคราะห์ ไม่มีอัตราที่ตายตัว แต่ค่าบริการรวมทั้งหมดจะแปรผันตรงกับ เวลาในการทำสุญญากาศ และจำนวนธาตุที่ต้องการวิเคราะห์ (เช่น C, N, O, F, Sn ฯลฯ)</li>
                        <li>ปรกติ จะรับตัวอย่างได้มากสุดไม่เกิน 10 ชิ้น/วัน แต่จะวิเคราะห์แล้วเสร็จ 10 ชิ้น ภายใน 2 วัน</li>
                        <li>ข้อมูลการวิเคราะห์ของผู้ขอรับบริการแต่ละรายจะถูกเก็บรักษาไว้เป็นเวลา 1 ปี นับตั้งแต่วันที่ได้รับบริการ หลังจากนั้นจะทำการลบทิ้งทั้งหมด</li>
                        <li>ไม่รับจองคิวขอใช้บริการ และไม่รับติดต่อขอข้อมูล ในวันหยุดราชการ และวันหยุดนักขัตฤกษ์</li>
                    </ul>

                    <p>&nbsp;</p>
                    ตัวอย่างการวิเคราะห์ด้วยเครื่อง XPS <a target="_blank" href="../files/eq/xps_example.pdf">Download</a> ที่นี่
                    <p>&nbsp;</p>

                    <h3>อัตราค่าบริการ</h3>
                    <ol>
                        <li>ค่าวิเคราะห์ ชั่วโมงละ 1,800 บาท คิดตั้งแต่เริ่มทำสุญญากาศ (ปรกติเวลาทำสุญญากาศ ใช้เวลาไม่เกิน 30 นาที แต่ถ้าSample ชื้นมากเวลาก็จะเพิ่มตามขึ้นด้วย)</li>
                        <li>ค่าทำรายงานผลและนำข้อมูลออก คิดตัวอย่างละ 200 บาท </li>                        
                    </ol>
                    ตารางอัตราค่าบริการ <a target="_blank" href="../files/eq/xps_rate.pdf">Download</a> ที่นี่

                                        <!-- <p>ใบขอรับบริการ XPS <a target="_blank" href="../files/eq/ThEP-XPS-02.pdf">Download</a> ที่นี่</p> -->

                    <p>ใบขอรับบริการ XPS <a href="#" data-toggle="modal" data-target="#xpsNotice">Download</a> ที่นี่</p>

                    <h3>สามารถส่งตัวอย่างมาได้ที่</h3>
                    <address>
                        ชาญวิทย์ ศรีพรหม<br> 
                        ตู้ ปณ. 217 มหาวิทยาลัยเชียงใหม่ ถ.ห้วยแก้ว ต.สุเทพ อ.เมือง จ.เชียงใหม่ 50202
                    </address>
                    <p>
                        มัดจำค่าบริการประมาณ 50% คิดจากเรทปรกติ 3ชั่วโมงครึ่ง/4 ตัวอย่าง = 6,400 บาท<br> 
                        (เฉลี่ยจากการทำ survey scan,high res on C, O, N ใน 4 ตัวอย่าง และตัวอย่างเป็น พอลิเมอร์) = 3,200 บาท<br> 
                        <em>และไม่จำเป็นต้องมัดจำก่อน ในกรณีที่ส่งตัวอย่างมาวิเคราะห์น้อยกว่า 2 ตัวอย่าง</em>
                    </p>

                    <h3>โอนเงินมาได้ที่</h3>
                    <address>
                        ธนาคารไทยพานิชย์ จำกัด (มหาชน)<br>
                        สาขามหาวิทยาลัยเชียงใหม่<br>
                        ชื่อบัญชี ศูนย์ความเป็นเลิศด้านฟิสิกส์<br>
                        เลขที่บัญชี 667-264644-0<br> 
                        บัญชีออมทรัพย์
                    </address>
                    <p>หลังจากโอนเงินเรียบร้อยแล้ว ให้ส่งสำเนาสลิปการโอนเงิน ซึ่งสามารถสแกน, ถ่ายภาพ แล้วส่งกลับมาทาง อีเมล chanvit82@hotmail.com และสามารถส่งตัวอย่างมารอวิเคราะห์ล่วงหน้าก่อนการโอนเงินได้</p>

                    <h3>ข้อมูลการติดต่อผู้ดูแลเครื่อง</h3>
                    <address>
                        คุณ ชาญวิทย์ ศรีพรหม<br>
                        ที่อยู่: ตู้ ปณ. 217 มหาวิทยาลัยเชียงใหม่ ถ.ห้วยแก้ว ต.สุเทพ อ.เมือง จ.เชียงใหม่ 50202<br>
                        โทรศัพท์: 087-7250960<br>
                        โทรสาร (FAX): 053-222774<br>
                        Email: chanvit82@hotmail.com
                    </address>                    

                    <!-- #xpsNotice Modal -->
                    <div id="xpsNotice" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h1 class="modal-title text-center" id="myModalLabel" style="padding-top: 40px; color: #d44950;">ประกาศ</h1>
                                </div>
                                <div class="modal-body">
                                    <p class="text-center" style="color: #d44950; font-size: 16px; font-weight: bold;">เพื่อความสะดวกรวดเร็วและลดความผิดพลาดอันอาจจะเกิดขึ้นในการให้บริการ<br>
                                        ผู้ขอรับบริการ ควรศึกษารายละเอียดอย่างถี่ถ้วน ก่อนทำการติดต่อขอรับบริการ<br>                                    
                                        และกรุณาปฏิบัติตามขั้นตอนที่ได้ระบุไว้อย่างเคร่งครัด เพื่อประโยชน์ของท่านเอง</p>

                                    <h2 style="text-decoration: underline;">ขั้นตอนการขอรับบริการ</h2>
                                    <ol style="font-size: 16px;">
                                        <li>ศึกษารายละเอียดการเตรียมตัวอย่าง ตัวอย่างที่สามารถวิเคราะห์ได้ และขั้นตอนการเตรียมตัวอย่างรวมไปถึงการส่งสารตัวอย่างเพื่อการวิเคราะห์ ให้เรียบร้อย</li>
                                        <li>ติดต่อเจ้าหน้าที่เพื่อสอบถาม วันและเวลาเพื่อขอรับคิววิเคราะห์ และข้อสงสัยอื่นๆ เพิ่มเติม 
                                            <strong style="color: #d44950;">หลังจากที่ได้ศึกษารายละเอียดดังข้อ 1. เรียบร้อยแล้ว</strong></li>
                                        <li><a target="_blank" title="ดาวโหลดเอกสารใบขอรับบริการ" href="../files/eq/ThEP-XPS-02.pdf">ดาวโหลดเอกสาร ใบขอรับบริการที่นี่</a> กรอกข้อมูล ชื่อ-สกุล ที่อยู่ เบอร์โทรติต่อกลับ และ E-mail ให้ชัดเจน และสามารถติดต่อได้สะดวก
                                            <strong style="color: #d44950;">(ห้ามระบุเบอร์โทรศัพท์ประจำสำนักงานเด็ดขาด เพื่อประโยชน์ของท่าเอง)</strong> 
                                            พร้อมทั้งระบุรายละเอียดของตัวอย่าง ธาตุที่ต้องการวิเคราะห์ ให้ชัดเจน หรือแนบเอกสารเพิ่มเติม (ถ้ามี)
                                        </li>
                                        <li>สแกน ใบขอรับบริการ <strong style="color: #d44950;">และสลิปโอนเงินมัดจำ 3,200 บาท (ในกรณีตัวอย่าง เกิน 2 ตัว)</strong> 
                                            แล้วส่ง E-mail มาที่ chanvit82@hotmail.com หรือ chanvit@thep-center.org                                            
                                        </li>
                                        <li>หลังจากที่ติดต่อเจ้าหน้าที่ ตามข้อ 2. แล้วส่งตัวอย่างที่ต้องการวิเคราะห์พร้อมใบขอรับบริการฉบับจริงมาที่
                                            <address style="padding-left: 40px; margin-top: 12px; margin-bottom: 12px;">
                                                ชาญวิทย์ ศรีพรหม<br>
                                                ตู้ ปณ. 217 มหาวิทยาลัยเชียงใหม่<br>
                                                ถ.ห้วยแก้ว ต.สุเทพ อ.เมือง จ.เชียงใหม่ 50202
                                            </address>                                            
                                        </li>
                                        <li>เมื่อตัวอย่างวิเคราะห์เสร็จสิ้น หรือมีปัญหาในการวิเคราะห์ 
                                            ทาง<strong style="color: #d44950;">เจ้าหน้าที่จะติดต่อกลับไปยังท่าน ตามรายละเอียดที่ให้ไว้ในใบขอรับบริการ</strong>                                            
                                        </li>
                                    </ol>
                                    <p>&nbsp;</p>

                                    <p style="color: #d44950; font-size: 16px; font-weight: bold;">
                                        ***ทางหน่วยเครื่องมือวิเคราะห์กลาง จะยกเลิกการให้บริการกับผู้ขอรับบริการที่ไม่ได้ปฏิบัติตามขั้นตอน และ 
                                        จะไม่คืนเงินมัดจำให้ และตัวอย่างทั้งหมดจะถูกทำลายทิ้งต่อไป***
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php } else if ($_GET['eq'] == 'FESEM') { ?>

                    <img src="../files/fesem.jpg" class="img-responsive" alt="Responsive image" style="margin: 0 auto;">
                    <h2 class="text-center">เครื่อง FESEM</h2>
                    <h3 class="text-center">Field Emission Scanning Electron Microscope JSM-7001F</h3>
                    <table class="table-bordered">
                        <tr>
                            <td class="text-center" style="min-width: 160px;">คำอธิบายของเครื่อง  :</td>
                            <td>
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Field Emission Scanning Electron Microscope (FESEM) เป็นเครื่องมือที่มีประโยชน์ในการศึกษาโครงสร้างขนาดเล็กระดับจุลภาค และเป็นอุปกรณ์ที่ใช้กันอย่างแพร่หลายทั้งในการวิจัย และการผลิตภาคอุตสาหกรรม FESEM เป็นกล้องจุลทรรศน์อิเล็กตรอนที่มีกำลังขยายสูงถึงระดับ 1,000,000 เท่า ทำให้สามารถศึกษาโครงสร้างขนาดเล็กระดับไมโครหรือนาโนได้ FESEM ยังสามารถเชื่อมต่อกับอุปกรณ์วิเคราะห์ธาตุเชิงพลังงาน (Energy Dispersive X-Ray Spectrometer ; EDS) ซึ่งช่วยในการศึกษา ชนิด ปริมาณ และการกระจายขององค์ประกอบธาตุของวัสดุที่ศึกษาได้ อีกทั้ง FESEM ยังสามารถเชื่อมต่อกับอุปกรณ์หรือหัววัดอื่นๆเพื่อใช้ศึกษาวิเคราะห์ตามวัตถุประสงค์ที่ต่างกันออกไป เช่น เชื่อมต่อกับอุปกรณ์วิเคราะห์การเรียงตัวของผลึกโดยใช้สัญญาณจากการเลี้ยวเบนของอิเล็กตรอนกระเจิงกลับ (Electron Backscatter Diffraction; EBSD) นอกจากนี้ FESEM ยังสามารถประยุกต์โดยเชื่อมต่อกับชุดอุปกรณ์ควบคุมลำอิเล็กตรอนเพื่อใช้เขียนลวดลายขนาดเล็กลงบนชิ้นงาน (Electron Beam Lithography) จะเห็นได้ว่า FESEM เป็นเครื่องมือที่มีความจำเป็นต่อการศึกษาวิจัย ด้วยกำลังขยายที่สูง และสามารถประยุกต์ใช้งานได้หลากหลายและครอบคลุมการศึกษาวิจัยในระดับจุลภาค
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">อัตราค่าบริการ  :</td>
                            <td>ตารางอัตราค่าบริการ <a target="_blank" href="../files/eq/fesem_rate.pdf">Download</a> ที่นี่</td>
                        </tr>
                        <tr>
                            <td class="text-center">การติดต่อ  :</td>
                            <td>
                                <address>
                                    ศูนย์วิจัยทางฟิสิกส์ของฟิล์มบาง ภาควิชาฟิสิกส์ จุฬาลงกรณ์มหาวิทยาลัย <br>
                                    ถนนพญาไท เขตปทุมวัน 10330 <br>
                                    เบอร์โทรศัพท์ : 02-218-5108 , โทรสาร : 02-218-5116<br>
                                    Email : fesem@thep-center.org <br>
                                    เวลาทำการ : จันทร์ - ศุกร์ เวลา 8.30 - 16.30 น.
                                </address>
                            </td>
                        </tr>
                    </table>
                    <p class="text-center">
                        เอกสารรายละเอียดเพิ่มเติม<br>
                        เครื่อง FESEM<br>
                        Field Emission Scanning Electron Microscope JSM-7001F <br>
                        คลิก <a target="_blank" href="../files/eq/fesem.pdf">Download</a> ที่นี่
                    </p>            
                <?php } ?>
            </div>
        </div> <!-- /.row -->

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <script>
        $(window).load(function () {
            $('#xpsNotice').modal('show');
        });
    </script>

</body>
</html>