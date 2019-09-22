<?php
    $title="Kayıt Ol - Üyecin.com";
?>
<?php
    include 'inc/def.php';
    hdr();
    nav();
?>
    <div class="container">
      <div class="jumbotron">
        <h1>Üyecin</h1>
        <p>Kayıt sayfası üst yazısı</p>
        <form id="rpf" action="javascript:treg()" method="post" class="form-inline">
            <div class="form-group">
                <div class="panel panel-default has-feedback" id="pit">
                    <div class="panel-heading" id="pih">Kimlik Bilgileri</div>
                    <div class="panel-body">
                        <select id="gender" name="gender" class="form-control">
                            <option value='K'>Kadın</option>
                            <option value='E'>Erkek</option>
                        </select>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input id="name" name="name" type="text" class="form-control" placeholder="Zeynep Elif" maxlength="64">
                        &nbsp;
                        <input id="surname" name="surname" type="text" class="form-control" placeholder="YILMAZ" maxlength="32">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div id="tcknd" class="form-group has-feedback">
                            <input id="tckn" name="tckn" type="text" class="form-control" placeholder="TC Kimlik NO" aria-describedby="inputSuccess2Status" onblur="tctest()" onchange="return tctest()">
                            <span id="tcknok" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <hr>
                        <select id="day" name="day" class="form-control">
    <?php $ftc->selopt('g'); ?>
                        </select>&nbsp;<select id="month" name="month" class="form-control">
    <?php $ftc->selopt('a'); ?>
                        </select>&nbsp;<select id="year" name="year" class="form-control" onkeypress="tcok()" onclose="tcok()" onblur="tcok()">
    <?php $ftc->selopt('y'); ?>
                        </select>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Adres Bilgileri</div>
                    <div class="panel-body">
                        <select id="city" name="city" class="form-control" onkeypress="soc()" onclose="soc()" onblur="soc()">
                            <?php $ftc->selopt('s'); ?>
                        </select>&nbsp;
                        <select id="state" name="state" class="form-control" disabled="disabled">
                            <option>İlçe</option>
                        </select>&nbsp;
                        <div class="input-group">
                            <input id="mh" name="mh" type="text" class="form-control" placeholder="Yenibağlar" maxlength="32">
                            <span class="input-group-addon">Mahallesi</span>
                        </div>&nbsp;
                        <div class="input-group">
                            <input id="cdsk" name="cdsk" type="text" class="form-control" placeholder="Cihanpınar" maxlength="32">
                            <div class="input-group-btn">
                              <select id="cst" name="cst" class="form-control input-group-addon">
                                    <option value="Cd">Cadde(si)</option>
                                    <option value="Sk" selected="selected">Sokak(ı)</option>
                              </select>
                            </div>
                            <span class="input-group-addon"></span>
                        </div><br><br>
                        <div class="input-group">
                            <input id="apa" name="apa" type="text" class="form-control" placeholder="Eldem Residence" maxlength="32">
                            <span class="input-group-addon">No:</span>
                            <input id="apn" name="apn" type="text" class="form-control" placeholder="2" maxlength="8">
                            <span class="input-group-addon">/</span>
                            <input id="kpn" name="kpn" type="text" class="form-control" placeholder="4" maxlength="8">
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">İletişim Bilgileri</div>
                    <div class="panel-body">
                        <div class="input-group">
                            <span class="input-group-addon">+90</span>
                            <input id="pa" name="pa" type="text" class="form-control" placeholder="850" maxlength="3">
                            <input id="pn" name="pn" type="text" class="form-control" placeholder="8850469" maxlength="7">
                        </div>
                        &nbsp;
                        <div class="input-group">
                            <input id="ma" name="ma" type="text" class="form-control" placeholder="zelifyilmaz" maxlength="64">
                            <span class="input-group-addon">@</span>
                            <input id="ms" name="ms" type="text" class="form-control" placeholder="gmail.com" maxlength="32">
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" id="tregg">Dipnot (İsteğe bağlı)</div>
                    <div class="panel-body">
                        <textarea id="dn" name="dn" class="form-control" type="textarea" placeholder="" maxlength="400"></textarea>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body" id="kb">
                        <h4>Kayıt olan herkes hizmet kural ve şartlarımızı okuyup kabul eder.</h4>
                        <h2>Kabul ederek devam et ve</h2>
                        <button type="submit" class="form-control btn btn-lg btn-primary">Kayıt Ol &raquo;</button>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </div>
<?php ftr(); ?>