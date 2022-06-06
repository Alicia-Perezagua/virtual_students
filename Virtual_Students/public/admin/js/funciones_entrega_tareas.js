function mostrarValor(){
    console.log($("#archivo-nuevo").val());
}

function dropHandler(ev) {
    $("#drop-zone").css("background-color", "white");
    $("#drop-zone").css("border", "2px solid black");
    $("#mensaje").text("");

    // Evitar el comportamiendo por defecto (Evitar que el fichero se abra/ejecute)
    ev.preventDefault();
    
    if (ev.dataTransfer.items) {
      // Usar la interfaz DataTransferItemList para acceder a el/los archivos)
        for (var i = 0; i < ev.dataTransfer.items.length; i++) {
        // Si los elementos arrastrados no son ficheros, rechazarlos
            if (ev.dataTransfer.items[i].kind === 'file') {
                var file = ev.dataTransfer.items[i].getAsFile();
                console.log(file);
                let fileName = file.name; 
                console.log(fileName);
                let extension = fileName.substring(fileName.lastIndexOf("."));
                console.log(extension);
                switch(extension){
                    case ".doc":
                    case ".pdf":
                    case ".docx":
                    case ".zip":
                }
            }
        }
    } else {
      // Usar la interfaz DataTransfer para acceder a el/los archivos
        for (var i = 0; i < ev.dataTransfer.files.length; i++) {
            console.log('... file[' + i + '].name = ' + ev.dataTransfer.files[i].name);
        }
    }



    // Pasar el evento a removeDragData para limpiar
    // removeDragData(ev)
}

function dragLeave(ev){
    $("#mensaje").text("Arrastra aquí tus archivos");
    $("#drop-zone").css("background-color", "white");
    $("#drop-zone").css("border", "2px solid black");
}

function dragOverHandler(ev) {
    console.log('File(s) in drop zone');
    $("#mensaje").text("Suelta aquí los archivos");
    $("#drop-zone").css("background-color", "lightgreen");
    $("#drop-zone").css("border", "2px dashed blue");

    // Prevent default behavior (Prevent file from being opened)
    ev.preventDefault();
}

// function removeDragData(ev) {
//     console.log('Removing drag data')

//     if (ev.dataTransfer.items) {
//       // Use DataTransferItemList interface to remove the drag data
//         ev.dataTransfer.items.clear();
//     } else {
//       // Use DataTransfer interface to remove the drag data
//         ev.dataTransfer.clearData();
//     }
// }