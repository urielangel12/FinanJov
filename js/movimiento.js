/*movimiento de inicio*/
document.querySelectorAll('a[href="inicio"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
  
      document.getElementById('inicio').scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
  
/*movimiento de servicios*/
document.querySelectorAll('a[href="servicios"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
  
      document.getElementById('servis').scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
  /*movimiento de prestamos*/
  document.querySelectorAll('a[href="prestamos"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
  
      document.getElementById('prestamos').scrollIntoView({
        behavior: 'smooth'
      });
    });
  });

  /*moviemito de contactos*/
  document.querySelectorAll('a[href="contactos"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
  
      document.getElementById('contactos').scrollIntoView({
        behavior: 'smooth'
      });
    });
  });

  