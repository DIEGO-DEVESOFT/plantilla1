function exito(){
    Swal.fire({
        title: "Bien Hecho",
        text: "Mi número de contacto es 3002311877",
        icon: "success",
        color: "white"
      });
}

function prueba(){
    Swal.fire({
        title: "El cliente siempre tiene la razón",
        showClass: {
          popup: `
            animate__animated
            animate__fadeInUp
            animate__faster
          `
        },
        hideClass: {
          popup: `
            animate__animated
            animate__fadeOutDown
            animate__faster
          `
        }
      });
}

function soporte(){
    Swal.fire({
        title: "¿Necesitas Soporte Técnico?",
        text: "Genial Estamos para servirte!",
        color: "white",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si por favor"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Listo Van en camino",
            text: "En pocos minutos llegan",
            color:"white",
            icon: "success"
          });
        }
      });
}








