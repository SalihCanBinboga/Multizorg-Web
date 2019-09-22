<?php
    $title="İletişim - Fiberland";
?>
<?php
    include 'inc/def.php';
    hdr();
    nav();
?>
    <div class="container">
      <div class="jumbotron">
	<!--<img src="img/nso.jpg" alt="neden sen olmayasin">-->
        <h1>Fiberland</h1>
        <p id="reup">Yazı</p>
        <form id="rpf" action="javascript:treg()" method="post" class="form-inline">
            <div class="form-group">
                <div class="panel panel-default has-feedback" id="pit">
                    <div class="panel-heading" id="pih">Kimlik Bilgileri</div>
                    <div class="panel-body">
                        <select id="gender" name="gender" class="form-control" title="Cinsiyetiniz">
                            <option value='K'>Kadın</option>
                            <option value='E'>Erkek</option>
                        </select>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input id="name" name="name" type="text" class="form-control" maxlength="64" title="Tam adınız (Kimliğinizde olduğu gibi)" onkeypress="return bhe(event)">
                        &nbsp;
                        <input id="surname" name="surname" type="text" class="form-control" maxlength="32" title="Soyadınız (Kimliğinizde olduğu gibi)" onkeypress="return bhe(event)">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div id="tcknd" class="form-group has-feedback">
                            <input id="tckn" name="tckn" type="text" class="form-control" title="TC Kimlik Numaranız (Kimlik bilgilerinizi doğrulamak için kullanılır veritabanımıza kayıt edilmeden önce 3 farklı şifreleme yöntemiyle koruma altına alınır, yapılan şifreleme işlemi geri alınamayacağından yöneticiler dahil hiç kimse bu bilgiye erişemez)." onblur="tctest()" onkeypress="tctest()" onchange="return tctest()">
                            <span id="tcknok" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <hr>
                        <select id="day" name="day" class="form-control" title="Doğduğunuz gün">
    <?php $ftc->selopt('g'); ?>
                        </select>&nbsp;<select id="month" name="month" class="form-control" title="Doğduğunuz ay">
    <?php $ftc->selopt('a'); ?>
                        </select>&nbsp;<select id="year" name="year" class="form-control" onchange="tcok()" title="Doğduğunuz yıl">
    <?php $ftc->selopt('y'); ?>
                        </select>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Adres Bilgileri</div>
                    <div class="panel-body">
                        <div class="input-group">
                            <input id="mh" name="mh" type="text" class="form-control" maxlength="32" title="Mahalle adı">
                            <span class="input-group-addon" title="Mahalle(si)">Mh.</span>
                        </div>&nbsp;
                        <div class="input-group">
                            <input id="cd" name="cd" type="text" class="form-control" maxlength="32" title="Cadde adı">
                            <span class="input-group-addon" title="Cadde(si)">Cd.</span>
                        </div>&nbsp;
                        <div class="input-group">
                            <input id="sk" name="sk" type="text" class="form-control" maxlength="32" title="Sokak adı">
                            <span class="input-group-addon" title="Sokak(ı)">Sk.</span>
                        </div><br><br>
                        <div class="input-group">
                            <input id="apa" name="apa" type="text" class="form-control" title="Apartman/Site/Residence "maxlength="32">
                            <span class="input-group-addon">No:</span>
                            <input id="apn" name="apn" type="text" class="form-control" title="Apartman Numarası" maxlength="8">
                            <span class="input-group-addon">/</span>
                            <input id="kpn" name="kpn" type="text" class="form-control" title="Kapı numarası" maxlength="8">
                        </div>&nbsp;
                        <select id="city" name="city" class="form-control" onchange="soc()">
                            <?php $ftc->selopt('s'); ?>
                        </select>&nbsp;
                        <select id="state" name="state" class="form-control" disabled="disabled">
                            <option>İlçe</option>
                        </select>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">İletişim Bilgileri</div>
                    <div class="panel-body">
                        <div class="input-group" title="Telefon Numaranız">
                            <span class="input-group-addon">+90</span>
                            <input id="pa" name="pa" type="text" class="form-control" title="Telefon numaranızın ilk 3 hanesi" maxlength="3">
                            <input id="pn" name="pn" type="text" class="form-control" title="Telefon numaranızın son 7 hanesi" maxlength="7">
                        </div>
                        &nbsp;
                        <div class="input-group" title="ePosta Adresiniz">
                            <input id="ma" name="ma" type="text" class="form-control" maxlength="64">
                            <span class="input-group-addon">@</span>
                            <input id="ms" name="ms" type="text" class="form-control" maxlength="32" title="Servis sağlayıcınız (örn: gmail.com, hotmail.com...)">
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" id="tregg">Dipnot (İsteğe bağlı)</div>
                    <div class="panel-body">
                        <textarea id="dn" name="dn" class="form-control" type="textarea" maxlength="400"></textarea>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body" id="kb">
                        <h4>Kayıt olan herkes hizmet kural ve şartlarımızı okuyup kabul eder.</h4>
                        <h2>Kabul ederek devam et ve</h2>
                        <button id="rgm" type="submit" class="form-control btn btn-lg btn-primary" disabled="disabled">Kayıt Ol &raquo;</button>
                    </div>
                </div>
            </div>
        </form>
	<img src="img/hhh.jpg" alt="harika hediye">
      </div>
    </div>
<?php ftr(); ?>
