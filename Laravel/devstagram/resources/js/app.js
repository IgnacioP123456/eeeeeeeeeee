Dropzone.autoDiscover = false;

const dropzone = new Dropzone("#dropzone", {
dictDefaultMessage:"Sube Aquì tu imagen",
acceptedFiles:".png, .jpg, .jpeg, .png",
addRemoveLinks: true,
dictRemoveFile: "Borrar Archivo",
maxFiles: 1,
uploadMultiple: false,
})

dropzone.on("success", function(file, response) {
  console.log(response);
})