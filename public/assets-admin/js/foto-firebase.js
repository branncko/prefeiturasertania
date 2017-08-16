var FotoAdmin = FotoAdmin || {};

FotoAdmin.EnviarFireBase = (function () {

    function EnviarFireBase() {
        this.fotoenviada        = $('.photoenviada');
        this.fotoescolhe        = $('.photo-escolhe');
        this.fotoenviadapreview = $('.fotoenviadapreview');
        this.loadimg = $('.loadimg');
    }


    EnviarFireBase.prototype.iniciar = function() {
        console.log('iniciou');
        this.fotoescolhe.on('change', handleFileSelect.bind(this) );
        this.loadimg.addClass('hide');
    }


    function handleFileSelect(evt) {
        console.log('change input')
        evt.stopPropagation();
        evt.preventDefault();
        var storageRef = firebase.storage().ref();
        var imagemPreview = this.fotoenviadapreview;
        var inputDestino = this.fotoenviada;
        var file = evt.target.files[0];
        var loadimg = this.loadimg;

        loadimg.removeClass('hide');

        var metadata = {
            'contentType': file.type
        };
        // Push to child path.
        // [START oncomplete]
        var myDate = new Date();
        var myTime = myDate.getTime();


        storageRef.child('imagem/' + + myTime+file.name).put(file, metadata).then(function(snapshot) {
            console.log('Uploaded', snapshot.totalBytes, 'bytes.');
            console.log(snapshot.metadata);
            var url = snapshot.downloadURL;
            console.log('File available at ', url);
            inputDestino.val(url);
            imagemPreview.attr('src', url);
            imagemPreview.removeClass('hide');
            loadimg.addClass('hide')

            // [START_EXCLUDE]
            // document.getElementById('linkbox').innerHTML = '<a href="' +  url + '">Click For File</a>';
            // [END_EXCLUDE]
        }).catch(function(error) {
            // [START onfailure]
            console.error('Upload failed:', error);
            loadimg.addClass('hide')

            // [END onfailure]
        });
        // [END oncomplete]
    }


    return EnviarFireBase;

}());

$(function () {

    var enviarFireBase = new FotoAdmin.EnviarFireBase();
    enviarFireBase.iniciar();
});