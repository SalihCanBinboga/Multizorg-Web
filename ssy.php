<?php
    $title="Üyecin.com";
	
    include 'inc/def.php';
    hdr(); nav(); $sas=''; $sql->getstat();
?>
    <div class="container">
      <div class="jumbotron">
        <h1>Üyecin</h1>
        <p>Site verileri analizi:</p>
		<div class="row placeholders">
			<div class="col-s-6 col-sm-4 placeholder">
				<h4><?=$sas['ut']?> Kişi kayıt oldu</h4>
				<span class="text-muted">Bugüne kadar toplam alınan kayıt sayısı.</span>
				<br><br>
				<div class="progress">
					<div class="progress-bar progress-bar-danger" style="width: <?=$sas['yuk']?>%" title="<?=$sas['yuk']?>% Kadın (<?=$sas['uk']?>)"><?=$sas['yuk']?>%</div>
					<div class="progress-bar progress-bar-info" style="width: <?=$sas['yue']?>%" title="<?=$sas['yue']?>% Erkek (<?=$sas['ue']?>)"><?=$sas['yue']?>%</div>
				</div>
			</div>
			<div class="col-s-6 col-sm-4 placeholder">
				<h4><?=$sas['un']?> Kişinin kaydını onaylanmadı</h4>
				<span class="text-muted">Henüz onaylanmamış, işleme alınmamış kayıt sayısı.</span>
				<br><br>
				<div class="progress">
					<div class="progress-bar progress-bar-warning" style="width: <?=$sas['yun']?>%" title="<?=$sas['yun']?>% (<?=$sas['un']?>)"><?=$sas['yun']?>% (<?=$sas['un']?>)</div>
				</div>
			</div>
			<div class="col-s-6 col-sm-4 placeholder">
				<h4><?=$sas['uy']?> Kişinin kaydını onaylandı</h4>
				<span class="text-muted">Bugüne kadar onaylanmış, işleme alınmış kayıt sayısı.</span>
				<br><br>
				<div class="progress">
					<div class="progress-bar progress-bar-success" style="width: <?=$sas['yuy']?>%" title="<?=$sas['yuy']?>% (<?=$sas['uy']?>)"><?=$sas['yuy']?>% (<?=$sas['uy']?>)</div>
				</div>
			</div>
		</div>
      </div>
    </div>
<?php ftr(); ?>
