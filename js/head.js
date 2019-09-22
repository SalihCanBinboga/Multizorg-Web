/* 
 * Bu dosya Eldem ÖZTÜRK (eldemozturk.com) tarafından hazırlanmıştır.
 */

function isEmpty(str) {
    if(str.length > 0){return false}
    else{return true}
}

function detectmob() { 
 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iOS/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    return true;
  }
 else {
    return false;
  }
}

var nc = (function (e) {
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
    (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) ||
    (e.keyCode >= 35 && e.keyCode <= 40)) {
        return;
    }
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});
function bhe(e) {
    var nesne = e.target ? e.target : e.srcElement;
    var basilantus = e.charCode == undefined ? e.keyCode : e.charCode;
    var str = String.fromCharCode(basilantus);
    if ((basilantus < 97 || basilantus > 122) && !isTRChar(basilantus))
        return true;
    if (basilantus == 105)
        str = '\u0130';
    if (nesne.createTextRange) {
        e.keyCode = str.toUpperCase().charCodeAt(0);
        return str.toUpperCase().charCodeAt(0); ;
    }
    else {
        var startpos = nesne.selectionStart;
        var endpos = nesne.selectionEnd;
        nesne.value = nesne.value.substr(0, startpos) + str.toUpperCase() + nesne.value.substr(endpos);
        nesne.setSelectionRange(startpos + 1, startpos + 1);
        return false;
    }
}
function tctest() {
    var t = $('#tckn').val();
    var post = 'tt=1&t='+t;
    $.ajax({
        type:'POST',
        url:'tckn.php',
        data:post,
        success:function(status){
            if (status == 't') {
                document.getElementById("pit").className = "panel panel-warning has-feedback";
                document.getElementById("tcknd").className = "form-group has-success has-feedback";
                document.getElementById("tcknok").className = "glyphicon glyphicon-ok form-control-feedback";
                $('#tckn').attr('disabled', true);
                $("#pih").html('Kimlik Bilgileri<span id="pio" class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>');
            }
            if (status == 'f') {
                document.getElementById("pit").className = "panel panel-danger has-feedback";
                document.getElementById("tcknd").className = "form-group has-error has-feedback";
                document.getElementById("tcknok").className = "glyphicon glyphicon-remove form-control-feedback";
                $("#pih").html('Kimlik Bilgileri<span id="pio" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            }
              //  if (status==-1) {$("#pit").html('Kimlik Bilgileri<span id="pio" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');}
                //$("#pio").fadeIn("fast");
        }
    });
}
function tcok() {
    var t = $('#tckn').val();var a = $('#name').val();var s = $('#surname').val();var y = $('#year').val();
    var post = 'tt=2&t='+t+'&a='+a.toUpperCase()+'&s='+s.toUpperCase()+'&y='+y;
    $.ajax({type:'POST',url:'tckn.php',data:post,success:function(status){
        if (status == 'tt') {document.getElementById("pit").className = "panel panel-success has-feedback";$('#rgm').removeAttr('disabled');
            document.getElementById("tcknd").className = "form-group has-success has-feedback";$('#year').attr('disabled',true);
            document.getElementById("tcknok").className = "glyphicon glyphicon-ok form-control-feedback";
            $("#pih").html('Kimlik Bilgileri<span id="pio" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
            $('#tckn').attr('disabled',true);$('#name').attr('disabled',true);$('#surname').attr('disabled',true);
        }else{document.getElementById("pit").className = "panel panel-danger has-feedback";$('#tckn').removeAttr('disabled',true);
            document.getElementById("tcknd").className = "form-group has-error has-feedback";
            document.getElementById("tcknok").className = "glyphicon glyphicon-remove form-control-feedback";
            $("#pih").html('Kimlik Bilgileri<span id="pio" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
        }
    }});
}
function soc() {
    var c = $('#city').val();
    if (c==0) {$("#state").html("<option value='0' selected='selected'>İlçe</option>");$('#state').attr('disabled',true);}
    else{var post = 'c='+c;$.ajax({type:'POST',url:'soc.php',data:post,success:function(rsoc){
        if (rsoc=='Error') {
            $("#state").html("<option value='0' selected='selected'>İlçe</option>");
            $('#state').attr('disabled',true);
        }else{$('#state').removeAttr('disabled');$("#state").html(rsoc);}
    }});}
}
function treg() {
    // Personal
    var ct = $('#gender').val();
    var ad = $('#name').val();
    var sa = $('#surname').val();
    var tc = $('#tckn').val();
    var dg = $('#day').val();
    var da = $('#month').val();
    var dy = $('#year').val();
    //address
    var sh = $('#city').val();
    var ic = $('#state').val();
    var mh = $('#mh').val();
    var cd = $('#cd').val();
    var sk = $('#sk').val();
    var aa = $('#apa').val();
    var an = $('#apn').val();
    var kn = $('#kpn').val();
    //contact
    var ta = $('#pa').val();
    var tn = $('#pn').val();
    var ea = $('#ma').val();
    var es = $('#ms').val();
    //note
    var nt = $('#dn').val();
    //script
    var post = 'ct='+ct+'&ad='+ad.toUpperCase()+'&sa='+sa.toUpperCase()+'&tc='+tc+'&dg='+dg+'&da='+da+'&dy='+dy+'&sh='+sh+'&ic='+ic+'&mh='+mh+'&cd='+cd+'&sk='+sk+'&aa='+aa+'&an='+an+'&kn='+kn+'&ta='+ta+'&tn='+tn+'&ea='+ea+'&es='+es+'&nt='+nt;
    $.ajax({type:'POST',url:'treg.php',data:post,success:function(st){
        if(st=="OK"){
            alert("Başarılı bir şekilde kayıt oldunuz.");
            $("#reup").html("Tebrikler! Bilgileriniz başarılı bir şekilde bize ulaştı, iletmiş olduğunuz bilgiler en kısa zamanda incelenecek ve size dönüş yapılacaktır.");
            $("#rpf").html("Teşekkürler...");
        }else if(st=="TCF"){
            alert("Kimlik bilgileriniz onaylanmadı!");
            $('#rgm').attr('disabled',true);
            $('#tckn').removeAttr('disabled',true);
            $('#name').removeAttr('disabled',true);
            $('#surname').removeAttr('disabled',true);
            $('#year').removeAttr('disabled',true);
            document.getElementById("pit").className = "panel panel-danger has-feedback";
            document.getElementById("tcknd").className = "form-group has-error has-feedback";
            document.getElementById("tcknok").className = "glyphicon glyphicon-remove form-control-feedback";
            $("#pih").html('Kimlik Bilgileri<span id="pio" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
        }else if(st=="FAIL"){
            alert("Zaten üyesiniz!..");
        }else{
            alert("Lütfen bilgilerinizi eksiksiz doldurun!");
        }
    }});
}
function wa(wame) {
    var phone='905395524418';
    var typ = detectmob() ? 'api' : 'web';
    var msg = isEmpty(wame) ? '' : '&text='+wame+'&';
    var uri = 'https://'+typ+'.whatsapp.com/send?phone='+phone+msg
    window.open(uri, '_blank');
}
/*
function insta() {
    $('div#galeri').append('gg');

    var token = '261674480.4750f7a.028cf318ed784bb5944410f681f298f4', 
        userid = '3417614354',
        num_photos = 10; // how much photos do you want to get

    $.ajax({
        url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent',
        dataType: 'jsonp',
        type: 'GET',
        data: {access_token: token, count: num_photos},
        success: function(data){
            console.log(data);
            for( n in data.data ){

                $('div#galeri').append('<div><img src="'+data.data[n].images.standard_resolution.url+'"></div>');

            }
        },
        error: function(data){
            console.log(data);
        }
    });
}
*/