@extends('layouts.layout')

@section('content')
    <div class="col-md-9">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>Tulis Resep</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p>Upload Foto Resep</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p>Submit</p>
                </div>
            </div>
        </div>
        <form class="form" role="form" method="POST" action="{{ url('/store')}}" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="row setup-content" id="step-1">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Nama Resep</label>
                            <input id="title" maxlength="100" type="text" required="required" class="form-control"
                                   name="title"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Bahan</label>
                            <input id="" smaxlength="100" type="text" required="required" class="form-control"
                                   name="subject"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Kategori</label>
                            <div class="select-style">
                                <select name="category" required="required">
                                    <option value="">Pilih Kategori</option>
                                    <option value="Masakan">Masakan</option>
                                    <option value="Minuman">Minuman</option>
                                    <option value="Snack">Snack</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Langkah Pembuatan</label>
                            <textarea class="form-control" required="required" rows="4" name="recipe"></textarea>
                        </div>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Selanjutnya</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Upload Foto Resep</label>
                            <input type="file" required="required" name="image" id="image"/>
                        </div>

                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" onclick="showPreview()">
                            Selanjutnya
                        </button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-3">
                
                <div class="col-xs-12">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label"></label>

                            <h3>Nama Resep:<h4></h4></h3>
                            <p id="titleP"></p>
                            <h3>Bahan:</h3>
                            <p id="subjectP"> YOOYOY</p>
                            <h3>Kategori:</h3>
                            <p id="categoryP"> YOOYOY</p>
                            <h3>Langkah Pembuatan:</h3>
                            <p id="recipeP">YOOYOY</p>
                        </div>
                        <button class="btn btn-success btn-lg pull-right" type="submit" name="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        function showPreview() {

            document.getElementById('titleP').innerHTML = document.getElementsByName('title')[0].value;
            document.getElementById('subjectP').innerHTML = document.getElementsByName('subject')[0].value;
            document.getElementById('categoryP').innerHTML = document.getElementsByName('category')[0].value;
            document.getElementById('recipeP').innerHTML = document.getElementsByName('recipe')[0].value;

        }

    </script>
@stop

@section('createMenu')
    @parent
    $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
    $item = $(this);

    if (!$item.hasClass('disabled')) {
    navListItems.removeClass('btn-primary').addClass('btn-default');
    $item.addClass('btn-primary');
    allWells.hide();
    $target.show();
    $target.find('input:eq(0)').focus();
    }
    });

    allNextBtn.click(function(){
    var curStep = $(this).closest(".setup-content"),
    curStepBtn = curStep.attr("id"),
    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
    curInputs = curStep.find("input[type='text'],input[type='url']"),
    isValid = true;

    $(".form-group").removeClass("has-error");
    for(var i=0; i
    <curInputs.length; i++){
    if (!curInputs[i].validity.valid){
    isValid = false;
    $(curInputs[i]).closest(".form-group").addClass("has-error");
    }
    }

    if (isValid)
    nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
    });
@endsection