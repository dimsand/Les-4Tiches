@extends('layouts.admin')

@section('title', 'Photos')

<style>

    /* Number text (1/3 etc) */
    .numbertext {
        color: #000;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    .delete-image{
        position: relative;
        top: -8px;
        left: 54px;
        color: #fd0000;
        background-color: white;
        font-size: 18px !important;
        cursor: pointer;
        border-radius: 10px;
    }

    .delete-doc{
        color: #fd0000;
        font-size: 18px !important;
        cursor: pointer;
    }

    .delete-image-added{
        display: none;
        top: -26px;
        left: -9px;
    }

    .list-files{
        display: flex;
        flex-direction: row;
        justify-content: center;
        flex-wrap: wrap;
        align-content: stretch;
        align-items: stretch;
        padding: 0 5px;
    }

    .list-files-docs{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-content: stretch;
        align-items: stretch;
        padding: 0 5px;
    }

    .file-container{
        width:60px;
        height:60px;
        background-size:cover;
        background-position:center center;
        background-repeat:no-repeat;
        margin-top: 10px;
    }

    .dz-preview.dz-processing.dz-image-preview.dz-success.dz-complete {
        margin-top: 5px;
        cursor: pointer;
        margin-left: 5px;
    }

    .dz-error-message{
        position: absolute;
        display: none;
        width: 50%;
        margin: 4px 25%;
        text-align: center;
        padding: 7px 6px;
    }

    .dz-error-message .close{
        top: 0 !important;
        right: 6px !important;
    }

    .dz-error-message img{
        height: 16px;
    }

    .progress-upload{
        height: 3px;
        background-color: #007dcc;
        display: none;
    }

    .dz-progress{
        display: none;
        height: 3px;
        background-color: #007dcc;
        margin-right: 20%;
        margin-top: 1px;
        border-radius: 5px;
        border: solid #333 1px;
    }

    .title-type-file{
        text-align: center;
        font-weight: bold;
    }
    .title-type-file:not(:first-child){
        margin-top: 10px;
        margin-bottom: 10px;
        border-top: solid 1px #bbbbbb;
        padding-top: 10px;
    }

    .slideshow-container-no-images{
        display: flex;
        flex-direction: column;
        align-items: center;
        align-content: center;
        justify-content: center;
        height: 380px;
    }

    .slideshow-container-no-images button{
        margin-top: 10px;
    }

    .dz-preview.dz-image-preview {
        float: left;
    }

</style>

@section('content')


    <div id="my_modal" class="">

        <div class="progress-upload"></div>

        <div class="dz-error-message alert alert-danger">
            <span data-dz-errormessage=""></span>
        </div>

        <div class="slideshow-container" style="<?=(empty($files['images'])) ? 'display: none;' : ''?>">
            <div class="mySlides" key="">
                <div class="numbertext"></div>
                <img src="" rotate="0">
                <a href="" target="_blank" class="zoom-image"><i class="fa fa-search-plus"></i></a>
                <a href="" class="rotate-image"><i class="fa fa-repeat"></i></a>
            </div>
            <a class="prev">&#10094;</a>
            <a class="next">&#10095;</a>
        </div>

        <div class="slideshow-container-no-images" style="<?=(!empty($files['images'])) ? 'display: none;' : ''?>">
            <div>Glisser-déposer ou cliquer ici</div>
            <div class="list-files list-files-images"></div>
        </div>

        <div class="photos_deja_ajoutees">
            @foreach($photos as $photo)
                <img src="/{{ env('GALLERIES_FOLDER') . DIRECTORY_SEPARATOR . $photo->path_image }}">
                <img src="/{{ env('GALLERIES_FOLDER') . DIRECTORY_SEPARATOR . $photo->path_image_resize }}">
            @endforeach
        </div>
    </div>


@endsection

@section('javascript')
    @parent
    <script src="/js/dropzone.js"></script>
    <script>
        $(function () {

            ////////////////////////////////////////////////////////////////////
            // Gestion du Dropzone

            var nbFiles = 0;
            var slideIndex = 0;

            var optionsDropzone = {
                url: "/&admin-pannel/photos/storeImages",
                paramName: "file",
                previewsContainer: '.slideshow-container-no-images',
                previewTemplate: '<div class="dz-preview dz-file-preview" key="toEdit">\n  <img data-dz-thumbnail /><i class="fa fa-times-circle delete-image delete-image-added" data="'+nbFiles+'" key=""></i>\n <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>\n</div>',
                acceptedFiles: ".jpeg,.jpg,.png,.JPEG,.JPG,.PNG",
                autoDiscover: false,
                thumbnailHeight: 200,
                thumbnailWidth: 200,
                dictMaxFilesExceeded: "Vous ne pouvez pas uploader plus d'un document PDF ou TXT.",
                maxFiles: null,
                timeout: 180000,
                dictFileTooBig: 'La taille maximal d\'un fichier est limité à {maxFilesize}MiB (votre fichier : ({filesize}MiB).',
                dictInvalidFileType: "Les formats de fichier acceptés sont : .jpeg,.jpg,.png",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                init: function () {

                    myDropzone = this;

                    this.on("sending", function(file, xhr, formData) {
                        formData.append("album_id", '{{ $albumId }}');
                    });

                    this.on("drop", function(event) {
                        nbSuccess = 0;
                        nbErrors = 0;
                        errors = "";
                        $('.progress-upload').show();
                        $('.dz-error-message').hide();
                        $('.add-files-container').hide();
                        resizePreview();
                    });
                    this.on("addedfile", function(event) {
                        nbSuccess = 0;
                        nbErrors = 0;
                        errors = "";
                        listDocsId = [];
                        $('.progress-upload').show();
                        $('.dz-error-message').hide();
                        $('.add-files-container').hide();
                        resizePreview();
                    });
                    this.on("dragenter", function(event) {
                        $('.add-files-container').css('background-color', '#d6d6d6');
                    });
                    this.on("dragleave", function(event) {
                        $('.add-files-container').css('background-color', '#efefef');
                    });
                    this.on("uploadprogress", function (file, progress) {
                        $('.dz-error-message').removeClass('alert-danger').removeClass('alert-success').addClass('alert-warning').show().find('span').html("<img src='/images/loaders/loader9.gif'/> Envoi du fichier en cours <a href=\"#\" class=\"close close-alert\" aria-label=\"close\">&times;</a>");
                        resizePreview();
                    });
                    this.on("success", function(file, data) {
                        nbSuccess++;
//                        data = JSON.parse(data);
//
//                        nbFiles++;
//                        var mySlide = '<div class="mySlides" key="'+nbFiles+'" style="display: none;">' +
//                            '<div class="numbertext">'+nbFiles+' / '+nbFiles+'</div>' +
//                            '<img src="'+data.imagePath+'">' +
//                            '<a href="'+data.imagePath+'" target="_blank" class="zoom-image"><i class="fa fa-search-plus"></i></a>' +
//                            '<a href="" class="rotate-image"><i class="fa fa-repeat"></i></a>' +
//                            '</div>';
//                        $(".slideshow-container").append(mySlide);
//                        $('.add-files-container').css('background-color', '#efefef');
//                        var addFilesContainer = $('.add-files-container').clone();
//                        $('.add-files-container').remove();
//                        $('.list-files-images').append(addFilesContainer);
//
//                        listDocsId.push({name: (file.name), idDoc: data.idDoc});
//
//                        if(nbFiles > 0){
//                            $('#modal-wrapper_viewDoc').find('.downloadPdf').show();
//                        }

                    });
                    this.on("error", function(file, data) {
                        nbErrors++;
                        file.previewElement.children[1].remove();
                        errors += " " +data + ".";
                        $('.add-files-container').show();
                    });

                    this.on("totaluploadprogress", function(progress, totalBytesSent) {
                        $('.progress-upload').css('width', progress + '%');
                    });

                    this.on("queuecomplete", function (file) {
                        var slides = document.getElementsByClassName("mySlides");
                        var previewKeyToEdit = $(".dz-image-preview.dz-success.dz-complete[key=toEdit]");
                        for(var i = 0; i<nbSuccess; i++){
                            $(previewKeyToEdit[i]).attr('key', ((slides.length - nbSuccess) + i))
                        }
                        $(".dz-file-preview[key=toEdit]").remove();
                        updateCompteurSlide();
                        $('.progress-upload').hide();
                        if(nbErrors >= 1){
                            $('.dz-error-message').removeClass('alert-danger').removeClass('alert-success').addClass('alert-warning').show().find('span').html(nbErrors + " fichier(s) en echec d'upload. " + nbSuccess + " uploadé(s) avec succès."+errors + "<a href=\"#\" class=\"close close-alert\" aria-label=\"close\">&times;</a>");
                        }else{
                            $('.dz-error-message').removeClass('alert-danger').removeClass('alert-warning').addClass('alert-success').show().find('span').html("Tous les fichiers ont été uploadés. <a href=\"#\" class=\"close close-alert\" aria-label=\"close\">&times;</a>");
                            setTimeout(function () {
                                $('.dz-error-message').hide();
                            }, 3000);
                        }
                        $('.add-files-container').removeClass('dz-clickable');
                        $(".add-files-container").show();
                        $(".delete-image-added").show();
                        resizePreview();
                        $('.btn_close').attr('disabled', false);

                        var listImageThumbail = $('img[data-dz-thumbnail]');
                        listDocsId.forEach(function (value) {
                            for(var i=0; i<listImageThumbail.length; i++){
                                if($(listImageThumbail[i]).attr('alt') == value.name){
                                    (($(listImageThumbail[i]).parent()).find('i.delete-image')).attr('data', value.idDoc);
                                }
                            }
                        });

                        $(".add-files-container, .add-files-container i").dropzone(optionsDropzone);
                    });
                }
            };

            $(".slideshow-container-no-images").dropzone(optionsDropzone);

            ////////////////////////////////////////////////////////////////////
            // Gestion des events

//            $( document ).on('click', ".btn-show-photos-content", function(e) {
//                e.preventDefault();
//                console.log('test');
//                $(".add-files-container, .add-files-container i").dropzone(optionsDropzone);
//                $('.photos-content').show();
//            });

            $(document).on('click', '.file-container, .dz-image-preview', function(){
                var key = $(this).attr('key');
                currentSlide(key);
            });

            $(document).on('click', '.prev', function(){
                plusSlides(-1);
            });
            $(document).on('click', '.next', function(){
                plusSlides(1);
            });

            ////////////////////////////////////////////////////////////////////
            // Gestion du slider

            function plusSlides(n) {
                slideIndex = parseInt(slideIndex) + parseInt(n)
                showSlides(slideIndex);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function updateCompteurSlide() {
                var slides = $(".mySlides");
                var imagesPreviews = $(".list-files-images").children();
                if(slides.length > 0) {
                    for (var i = 0; i < nbFiles; i++) {
                        slides[i].setAttribute('key', i);
                    }
                    for(var i = 0; i < nbFiles; i++){
                        $(".mySlides[key="+i+"]").find('.numbertext').text( (i+1) + ' / ' + nbFiles );
                    }
                }
                if(imagesPreviews.length > 0) {
                    for (var i = 0; i < nbFiles; i++) {
                        $(imagesPreviews[i]).attr('key', i);
                        $(imagesPreviews[i]).find("i.delete-image").attr('key', i);
                    }
                }
            }

            function gestionImageActive(keyToRemove) {
                if(slideIndex == keyToRemove){
                    currentSlide(0);
                }
            }

            function resizePreview(){
                setTimeout(function () {
                    $('.mySlides').find('img').height( $('#my_modal').height() - ($('.photos-content').height() + 30) );
                    $('.slideshow-container').height( $('#my_modal').height() - ($('.photos-content').height() + 20) );
                }, 400);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                if(slides.length > 0){
                    if (n >= slides.length) {slideIndex = 0; n = 0}
                    if (n < 0) {slideIndex = (slides.length - 1); n = (slides.length - 1);}
                    $('.file-container').removeClass('active');
                    $('.dz-image-preview').removeClass('active');
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slides[slideIndex].style.display = "block";
                    $('.file-container[key='+(n)+']').addClass('active');
                    $('.dz-image-preview[key='+(n)+']').addClass('active');
                }
            }

            showSlides(slideIndex);
            resizePreview();

        });
    </script>
@endsection