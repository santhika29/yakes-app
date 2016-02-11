<?php

use kartik\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\widgets\Typeahead;
use yii\helpers\Url;
use yii\web\JsExpression;
use kartik\widgets\Select2;

/* @var $this yii\web\View */
/* @var $model frontend\models\MonitoringKacamata */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="monitoringkacamata-form">
    <div class="col-md-6">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->errorSummary($model); ?>

        <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

        <?php

            $template = '<div><p class="nikkes">{{value}}</p></div>';

            echo $form->field($model, 'nikkes')->widget(Typeahead::classname(), [
                    'options' => ['placeholder' => 'Ketik NIKKES yang diinginkan'],
                    'pluginOptions' => ['highlight' => true],
                    'dataset' => [
                        [
                            'datumTokenizer' => "Bloodhound.tokenizers.obj.whitespace('value')",
                            'display' => 'value',
                            'templates' => [
                                'notFound' => '<div class="text-danger" style="padding:0 8px"> Nikkes tidak terdaftar </div>',
                                'suggestion' => new JsExpression("Handlebars.compile('{$template}')"),
                            ],
                            'remote' => [
                                'url' => Url::to(['caripeserta/get-nikkes-list']).'?q=%QUERY%',
                                'wildcard' => '%QUERY%'
                            ],
                            'limit' => 10,
                        ]
                    ],
                ]);
        ?>

        <?php
            echo $form->field($model, 'hak_kacamata_id')->widget(Select2::classname(), [
                'data' => \frontend\models\MonitoringKacamataSearch::getHakKacamataList(),
                'options' => [
                    'placeholder' => 'Please Choose One',
                    //'onchange' => 'alert(this.value)'
                    'disabled' =>true,
                ],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
        ?>

        <?= $form->field($model, 'tgl_ambil')->widget(\kartik\datecontrol\DateControl::classname(), [
            'type'=>\kartik\datecontrol\DateControl::FORMAT_DATE,
            'ajaxConversion'=>false,
            'options' => [
                'pluginOptions' => [
                    'autoclose' => true
                ],
                'disabled' => true,
            ]

        ]); ?>


        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
    <div class="col-md-4">
        <div class="box box-info" style="display:none" id="panel">
             <div class="box-header with-border">
             <h3 class="box-title">Data Peserta</h3>
             </div>
             <div class="box-body" id='panel-body'>

             </div>
        </div>
    </div>
</div>


<?php
$script = <<< JS
//here the place for the JS
var nama,band,status,tgl_ambil;




$('#monitoringkacamata-nikkes').keydown(function(e){
    if (e.keyCode == 9 )
    {

        e.preventDefault();

        var panjang = $('#monitoringkacamata-nikkes').val().length;
            if (panjang==10)
            {
                var nikkes = $(this).val();

                $.get('../caripeserta/get-data-peserta',{nikkes:nikkes},function(data){
                    var data = $.parseJSON(data);
                    if (!(jQuery.isEmptyObject(data)))
                    {
                        nama = data.nama;
                        band = data.band;
                        status = data.status_peserta_id;
                        var sts;
                        switch (status) {
                            case 1:
                                sts = "Pegawai";
                                break;
                            case 2:
                                sts = "Pensiun";
                                break;
                            case 3:
                                sts = "Keluarga";
                                break;
                        }

                        $('#panel').animate({
                            left: "+=50",
                            height: "toggle"
                        }, 100, function() {
                            // Animation complete.
                          });
                        var headingDiv = document.getElementById('panel-body');
                        headingDiv.innerHTML = "<p> Nama : " + nama +
                            "</p><br><p> Band : "+ band +
                            "</p><br><p> Status : "+ sts +"</p><br>";
                    };
                });
                //cek tanggal terakhir pengambilan kacamata
                $.get('../caripeserta/get-last-date',{nikkes:nikkes},function(datax){
                  var datax = $.parseJSON(datax);
                  if(!(jQuery.isEmptyObject(datax)))
                  {
                      var headingDiv = document.getElementById('panel-body');
                      headingDiv.innerHTML += "<table id='myTable' class='table table table-bordered'><tr><th>Tanggal Pengambilan</th><th>Durasi</th><th>Hak</th></</tr></table>";

                      $.each(datax, function (i, data)
                      {
                          tgl_ambil = data.tgl_ambil;
                          var x = moment(tgl_ambil);
                          var tgl = moment();
                          var table = document.getElementById("myTable");
                          var row = table.insertRow(-1);
                          var cell1 = row.insertCell(0);
                          var cell2 = row.insertCell(1);
                          var cell3 = row.insertCell(2);
                          cell1.innerHTML = tgl_ambil;
                          cell2.innerHTML = tgl.diff(x,"months");
                          cell3.innerHTML = (data.hak == 1) ? "<code>Lengkap</code>" : "<code>Lensa</code>" ;
                      });

                  }
                  else {
                      tgl_ambil = 0;
                      var headingDiv = document.getElementById('panel-body');
                      headingDiv.innerHTML += "<p> Tanggal Pengambilan Terakhir : Tidak Tercatat </p><br>";
                      $('#monitoringkacamata-hak_kacamata_id').prop('disabled', false);
                      $('#monitoringkacamata-tgl_ambil-disp').prop('disabled', false);
                      $('#monitoringkacamata-hak_kacamata_id').focus();
                  };
                });
            }
    }
});
$('#monitoringkacamata-hak_kacamata_id').change(function(){

    var hak_kacamata_id = $(this).val();
    //var band = document.getElementById('band').value;

    //var status_peserta_id = document.getElementById('status').value;
    $.get('../caripeserta/get-data-plafon',{hak_kacamata_id:hak_kacamata_id,band:band,status_peserta_id:status},function(data){
        var data = $.parseJSON(data);
        if (!(jQuery.isEmptyObject(data)))
            {
                //$('#hak').attr('value',data.biaya);
                var headingDiv = document.getElementById('panel-body');
                        headingDiv.innerHTML += "<p> Plafond : " + data.biaya +"</p>";
            };
        });
});
JS;
$this->registerJs($script);
?>
