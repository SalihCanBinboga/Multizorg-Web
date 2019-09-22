<?php
    $title="İletişim - Fiberland";
?>
<?php
    include 'inc/def.php';
    hdr();
    nav();
?>
    <div class="container">
      <div class="jumbotron" id="iletisim">
        <h1>İletişim</h1>
        <p id="reup">Bize ulaşabileceğiniz telefon numaralarımız.</p>
        <div id="rpf" class="form-inline">
            <div class="form-group">
                <div class="panel panel-default has-feedback" id="pit">
                    <div class="panel-heading"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> <b>İletişim Bilgileri</b></div>
                    <div class="panel-body row-mb-3">
                        <div class="input-group col-md-4" title="Telefon">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i> Telefon</span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon">+31 1 83659595</span>
                        </div>
                        &nbsp;
                        <div class="input-group col-md-3" title="WhatsApp" onclick="javascript:wa('')">
                            <span class="input-group-addon"><i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp</span>
                            <input type="text" class="form-control" value="" maxlength="0" disabled>
                            <span class="input-group-addon">+31 1 83659595</span>
                        </div>
                        &nbsp;
                        <div class="input-group col-md-4" title="ePosta">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> ePosta</span>
                            <input type="text" class="form-control" value="0" maxlength="0" disabled>
                            <span class="input-group-addon">iletisim@fiberland.com.tr</span>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-home" aria-hidden="true"></i> <b>Adres Bilgileri</b></div>
                    <div class="panel-body">
                        <p><span class="input-group-addon"><b>Birlik</b> Mahallesi</span>
                        <span class="input-group-addon"><b>448</b>.Cadde</span>
                        <span class="input-group-addon">No:<b>115</b>/A</span>
                        <span class="input-group-addon"><b>Çankaya</b></span>
                        <span class="input-group-addon"><b>Ankara</b></span></p>
                        <iframe class="container" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2165.242425732242!2d32.872762592536944!3d39.87165730525035!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa41f142b96e61087!2sFiberland%20Dijital%20Teknolojileri!5e0!3m2!1str!2str!4v1567512707484!5m2!1str!2str" height="480px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
<?php ftr(); ?>
