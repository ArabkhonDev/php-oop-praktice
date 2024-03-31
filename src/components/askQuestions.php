<?php
if(isset($_POST)){
echo "test ishladi";
// die();
}
?>



<div class="askQuestions">
    <div class="container">
        <div class="questions_main">
            <div class="question_lists">
                <div class="questions_main_title">
                    <h1>Ko'p beriladigan savollar !!!</h1>
                </div>
                <div class="question_lists_item">
                    <button class="accordion">
                        <h3> 1) 100% tabiiy mahsulot ekanligiga kafolat bormi?</h3>
                    </button>
                    <div class="panel">
                        <p>Sertifikat olgan</p>
                        <div class="question_cer">
                            <img src="../../public/assets/newImages/cer.png" class="question_img" alt="sertifikat" width="100%">
                        </div>
                    </div>
                </div>
                <div class="question_lists_item">
                    <button class="accordion">
                        <h3>2) Boshqa shu kabi tabiiiy maxsulotlardan asosiy afzalligi nimada?</h3>
                    </button>
                    <div class="panel">
                        <p>25 hil murakkab tarkibi</p>
                    </div>
                </div>
                <div class="question_lists_item">
                    <button class="accordion">
                        <h3>3) Choy harid qilib Umraga ham borib kelsa boladimi?</h3>
                    </button>
                    <div class="panel">
                        <p>Ha albatta shu kungacha aksiyamiz doirasida 20 ta baxtli insonlarga bepul yo'llanma sertifikatlari topshirildi! Yaxshi niyat, nasib bo'lsa keyingisi siz bo'lishi bo'lishingiz mumkin.</p>
                    </div>
                </div>
                <div class="question_lists_item">
                    <button class="accordion">
                        <h3>4) Menga ham mos keladimi?</h3>
                    </button>
                    <div class="panel">
                        <p>Bu bo'yicha batafsil jismoniy holatingiz bilan tanishib chiqqan holdagina, mutahasislarimiz tomonidan tavsiya etilishi mumkin!.</p>
                    </div>
                </div>
                <div class="question_lists_item">
                    <button class="accordion">
                        <h3>5) Boshqa tabiiy mahsulotlaring ham bormi ?</h3>
                    </button>
                    <div class="panel">
                        <p>Ha albatta bor! Shu kabi tabiiy balzamlar, ko'z va yuz uchun surtmalar hamda salomatlik uchun davolovchi hususiyatga ega choylar ishlab chiqariladi. Mahsulotlar O'rta osiyo hamda Europa davlatlariga ham eksport qilinmoqda!.</p>
                    </div>
                </div>
            </div>
            <div class="your_question">
                <div class="your_question_title">
                    <h2>O'zingizni qiziqtirgan hamda shaxsiy savollaringiga malakali mutaxasilardan javob olish uchun savollaringizni yozib qoldiring?</h2>
                </div>
                <form class="your_question_form" action="#" method="post">
                    <input name="questions" class="form_question" required placeholder="Sizning savolingiz uchun joy">
                    <input type="text" name="user_name" maxlength="5" placeholder="Ismingiz?" required>
                    <input type="number" name="tel_number" placeholder="Telefon raqam +998(_) ___ __ __" required minlength="9" maxlength="9">
                    <button type="submit" name="question_form_btn" class="question_form_btn">Yuborish</button>
                </form>
            </div>
        </div>
    </div>
</div>